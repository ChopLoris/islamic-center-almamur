<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use App\Models\KategoriArtikel;

class CreateCategoryArtikelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_artikel', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        KategoriArtikel::create([
            'name' => 'Pengurus'
        ]);
        KategoriArtikel::create([
            'name' => 'Agenda'
        ]);
        KategoriArtikel::create([
            'name' => 'Pengumuman'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category_artikel');
    }
}
