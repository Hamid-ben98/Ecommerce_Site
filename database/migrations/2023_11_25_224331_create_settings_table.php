<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("description");
            $table->string("address");
            $table->string("favicon");
            $table->string("facebook");
            $table->string("twitter"); 
            $table->string("email");
            $table->string("phone");
            $table->string("logo"); 
            $table->string("instegram");
            $table->string("youtube");
            $table->string("tiktok");
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
        Schema::dropIfExists('settings');
    }
}
