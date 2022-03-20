<?php

namespace Database\Seeders;

use App\Models\KategoriArtikel;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'username' => 'admin',
            'name' => 'Administrator',
            'password' => bcrypt('12345')
        ]);

        KategoriArtikel::create([
            'name' => 'Berita'
        ],
        [
            'name' => 'Tausiyah'
        ]);
    }
}
