@extends('admin.layouts.master')
@section('custom-css')
@trixassets
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="{{ asset('js/plugins/DataTables/datatables.min.css') }}">
<style>
    .trix-content {
        height: 356px !important;
        max-height: 356px !important;
        overflow-y: auto !important;
    }
</style>
@endsection

@section('title', "Dashboard Administrator | Masjid Jami Al-Mamur")

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">
        <span class="text-muted fw-light">Admin Area /</span> User List
    </h4>

    @if(session()->has('success'))
    <div class="alert alert-success" role="alert">{{ session('success') }}</div>
    @elseif (session()->has('failed'))
    <div class="alert alert-danger" role="alert">{{ session('failed') }}</div>
    @endif

    <div class="card overflow-hidden mb-4">
        <div class="d-flex justify-content-between">
            <h5 class="card-header">Tambah User Account</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('users_add') }}" id="form_users" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-12 col-lg-3">
                        <label class="form-label" for="">Name</label>
                        <input class="form-control @error('perihal') is-invalid @enderror" type="text" name="name"
                            required>
                        <div class="invalid-feedback">
                            Anda di haruskan mengisi data ini.
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-3">
                        <label class="form-label" for="">Username</label>
                        <input class="form-control @error('total') is-invalid @enderror" type="text" name="username"
                            required>
                        <div class="invalid-feedback">
                            Anda di haruskan mengisi data ini.
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-3">
                        <label class="form-label" for="">password</label>
                        <input class="form-control @error('total') is-invalid @enderror" type="password" name="password"
                            required>
                        <div class="invalid-feedback">
                            Anda di haruskan mengisi data ini.
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-3">
                        <label class="form-label" for="">Level</label>
                        <select class="form-select" name="level" id="level" required>
                            <option value="">--Pilih--</option>
                            <option value="0">User Biasa</option>
                            <option value="1">Administrator</option>
                        </select>
                    </div>
                    <div class="col-12 d-flex justify-content-end">
                        <button type="button" id="save_btn" class="btn btn-primary mt-3">Tambah</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="card overflow-hidden">
        <div class="d-flex justify-content-between">
            <h5 class="card-header">List User Account</h5>
        </div>
        <div class="table-responsive text-nowrap px-3 py-3">
            <table id="table_infaq_list" class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Username</th>
                        <th>Level</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($userslist as $user)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->isAdmin == 1 ? 'Admin' : 'User' }}</td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                    data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <button type="button" class="dropdown-item btn-edit" data-id="{{ $user->id }}">
                                        <i class="bx bx-edit-alt me-1"></i> Edit
                                    </button>
                                    <form action="{{ route('users_delete') }}" id="form-delete-{{ $user->id }}"
                                        method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <input type="hidden" name="users_id" value="{{ $user->id }}">
                                        <button type="button" data-id="{{ $user->id }}"
                                            class="btn-delete dropdown-item">
                                            <i class="bx bx-trash me-1"></i> Delete
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


{{-- MODAL --}}
<div class="modal fade" id="modalEdit" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="{{ route('users_edit') }}" method="POST">
            @csrf
            <input type="hidden" name="user_id" id="user_id">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1">Edit Laporan Infaq</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            <label class="form-label" for="">Name</label>
                            <input class="form-control @error('perihal') is-invalid @enderror" type="text" name="name" id="name"
                                required>
                            <div class="invalid-feedback">
                                Anda di haruskan mengisi data ini.
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-12">
                            <label class="form-label" for="">Username</label>
                            <input class="form-control @error('total') is-invalid @enderror" type="text" name="username" id="username"
                                required>
                            <div class="invalid-feedback">
                                Anda di haruskan mengisi data ini.
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-12">
                            <label class="form-label" for="">password</label>
                            <input class="form-control @error('total') is-invalid @enderror" type="password"
                                name="password">
                            <div class="invalid-feedback">
                                Anda di haruskan mengisi data ini.
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-12">
                            <label class="form-label" for="">Level</label>
                            <select class="form-select" name="level" id="level_edit" required>
                                <option value="">--Pilih--</option>
                                <option value="0">User Biasa</option>
                                <option value="1">Administrator</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        Close
                    </button>
                    <button type="submit" id="btn-save-modal" class="btn btn-primary">Simpan</button>
                </div>
        </form>
    </div>
</div>
</div>

@endsection

@section('custom-js')
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/plugins/DataTables/datatables.min.js') }}"></script>
<script src="{{ asset('js/inits/datatables.init.js') }}"></script>
<script src="{{ asset('js/plugins/SweetAlert2/sweetalert.min.js') }}"></script>
<script src="{{ asset('js/inits/custom.init.js') }}"></script>
@endsection
