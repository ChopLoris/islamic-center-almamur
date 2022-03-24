<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function index() {
        if(auth()->check()) {
            return redirect()->route('admin_dashboard');
        }
        return view('auth.login');
    }

    public function settings(){
        return view('admin.pages.Setting.index');
    }

    public function userData($id) {
        $users = User::where('id', $id)->firstOrFail();
        $users->makeHidden(['password']);
        return response()->json($users);
    }

    public function adminIndex() {
        $userslist = User::all()->makeHidden(['password']);
        return view('admin.pages.Users.index', compact('userslist'));
    }

    public function edit(Request $request){
        $request->validate([
            'name' => 'required',
            'username' => 'required',
            'user_id' => 'required|integer'
        ]);

        $findUser = User::where('id', $request->user_id)->firstOrFail();

        if(!empty($request->level)){
            $findUser->isAdmin = $request->level;
        }

        if($request->has('password')){
            $findUser->password = bcrypt($request->password);
        }

        $findUser->name = $request->name;
        $findUser->username = $request->username;
        $findUser->save();

        return back()->with('success', 'Anda berhasil mengubah data user');
    }

    public function deleteUser(Request $request) {
        $request->validate([
            'users_id' => 'required|integer'
        ]);

        $findUser = User::where('id', $request->users_id)->firstOrFail();
        $findUser->delete();

        return redirect()->route('users_list')->with('success', 'Anda berhasil menghapus salah satu user');
    }

    public function register(Request $request) {
        $request->validate([
            'name' => 'required',
            'username' => 'required',
            'password' => 'required',
            'level' => 'required|integer'
        ]);

        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'isAdmin' => $request->level
        ]);

        return redirect()->route('users_list')->with('success', 'Anda berhasil menambahkan user baru.');
    }

    public function postLogin(Request $request) {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only('username', 'password');
        if(Auth::attempt($credentials)) {
            return redirect()->route('admin_dashboard')->withSuccess('Signed In');
        }

        return redirect('administrator')->with('failed', 'Username / Password salah, cek kembali.');
    }

    public function signOut() {
        Session::flush();
        Auth::logout();

        return redirect('administrator');
    }
}
