<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testings', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->unsignedInteger('erp_user_id');
            $table->string('erp_status')->default('0');
            $table->string('erp_category_name')->nullable();
            $table->string('erp_product_name')->nullable();
            $table->string('erp_request_type')->nullable();
            $table->string('erp_hidden_type')->nullable();
            $table->string('erp_rejected')->nullable();
            $table->string('erp_suggestion_category')->nullable();
            $table->string('erp_suggestion_product')->nullable();
            $table->string('erp_requirement_need')->nullable();
            $table->string('erp_general_feedback')->nullable();
            $table->longText('erp_testing_request')->nullable();
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
        Schema::dropIfExists('testings');
    }
}
