<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderHasProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_has_products', function (Blueprint $table) {
            $table -> increments('id');
            $table -> unsignedInteger('order_id');
            $table -> unsignedInteger('product_id');
            $table -> softDeletes();
            $table -> timestamps();

            $table -> foreign('order_id') -> references('id') -> on('orders') -> onDelete('cascade');

            $table -> foreign('product_id') -> references('id') -> on('products') -> onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_has_products');
    }
}
