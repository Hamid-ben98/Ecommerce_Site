<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductColorSizeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_color_size', function (Blueprint $table) {
            $table->id();
            $table->integer("quantity");
            $table->decimal("price_two",10,2)->nullable();
            $table->decimal("discount",10,2)->nullable();
            $table->integer("status")->default(1);

            $table->integer("product_color_id")->unseigned();
            $table->integer("product_size_id")->unseigned();

            $table->foreign("product_color_id")->references("id")->on("product_colors");
            $table->foreign("product_size_id")->references("id")->on("product_sizes");

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
        Schema::dropIfExists('product_color_size');
    }
}
