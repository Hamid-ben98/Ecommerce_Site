<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->id();
            $table->integer("order_id")->unseigned();
            $table->integer("product_color_size_id")->unseigned();

            $table->foreign("order_id")->references("id")->on("orders");
            $table->foreign("product_color_size_id")->references("id")->on("product_color_size");
            $table->integer("quantity");
            $table->decimal("price",10,2)->nullable();
            $table->decimal("discount",10,2)->nullable();
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
        Schema::dropIfExists('order_details');
    }
}
