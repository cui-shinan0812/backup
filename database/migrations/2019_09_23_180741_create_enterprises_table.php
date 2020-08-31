<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnterprisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enterprises', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('name');
            $table->string('location');
            $table->string('city');
            $table->string('country');
            $table->string('zip_code');
            $table->string('tel')->nullable();
            $table->string('phone')->nullable();
            $table->string('ceo');
            $table->string('ceo_phone');
            $table->enum('category',['雑貨・アパレル','工具用品','機械部品','デジタル家電','建築材料','おもちゃ','その他']);
            $table->longText('comment');
            $table->enum('employees',['1~50人','51~100人','101~500人','501人以上']);
            $table->string('scale');
            $table->string('video_url')->nullable();
            $table->string('icon_url')->nullable(); // 300 × 300
            $table->string('image_1_url')->nullable();
            $table->string('image_2_url')->nullable();
            $table->enum('status',['normal','ban','recommend'])->default('normal');
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
        Schema::dropIfExists('enterprises');
    }
}
