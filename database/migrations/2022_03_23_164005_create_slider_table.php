<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Slider;

class CreateSliderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slider', function (Blueprint $table) {
            $table->id();
            $table->string('slider_1')->nullable();
            $table->string('slider_2')->nullable();
            $table->string('slider_3')->nullable();
            $table->string('slider_4')->nullable();
            $table->timestamps();
        });

        Slider::create([
            'slider_1' => NULL,
            'slider_2' => NULL,
            'slider_3' => NULL,
            'slider_4' => NULL,
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('slider');
    }
}
