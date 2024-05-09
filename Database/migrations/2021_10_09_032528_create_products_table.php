<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->unsignedInteger('erp_user_id');
            $table->string('erp_status')->default('0');
            $table->string('erp_category_name')->nullable();
            $table->string('erp_product_name')->nullable();
            $table->string('erp_product_code')->nullable();
            $table->string('erp_product_price')->nullable();
            $table->string('erp_sales_price')->nullable();
            $table->string('erp_product_image')->nullable();
            $table->string('erp_short_description')->nullable();
            $table->longText('erp_long_description')->nullable();
            $table->foreign('erp_user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('products');
    }
}
