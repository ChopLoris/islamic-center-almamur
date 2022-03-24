<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgendaJumatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agenda_jumat', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal_mulai');
            $table->string('imam');
            $table->string('khatib')->nullable();
            $table->string('muadzin')->nullable();
            $table->string('bilal')->nullable();
            $table->string('image_content')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agenda_jumat');
    }
}
