<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->unsignedBigInteger('enterprise_id');
            $table->foreign('enterprise_id')->references('id')->on('enterprises');
            $table->string('name');
            $table->string('category');      
            $table->string('price')->nullable();
            $table->string('build_at');
            $table->unsignedBigInteger('minimum_order_quantity');
            $table->string('minimum_build_days')->nullable(); 
            $table->string('icon_url');// 300 × 300
            $table->longText('comment')->nullable();
            $table->string('three_d_url')->nullable();
            $table->string('video_url')->nullable();
            $table->string('image_1_url')->nullable(); // 1200 × 1200
            $table->string('image_2_url')->nullable();
            $table->string('image_3_url')->nullable();
            $table->string('image_4_url')->nullable();
            $table->string('image_5_url')->nullable();
            $table->string('image_6_url')->nullable();
            $table->string('image_7_url')->nullable();
            $table->string('image_8_url')->nullable();
            $table->string('image_9_url')->nullable();
            $table->string('image_10_url')->nullable();
            $table->string('image_11_url')->nullable();
            $table->string('other')->nullable();
            $table->enum('status',['normal','in_review','ban','recommend'])->default('in_review');
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
