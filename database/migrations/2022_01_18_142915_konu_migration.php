<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class KonuMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('konus', function (Blueprint $table) {
            $table->id();
            $table->string('pointName');
            $table->longText('opinion')->unique();
            $table->timestamps();
            $table->string('Konu_photo_path',2048);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('konus');
    }
}
