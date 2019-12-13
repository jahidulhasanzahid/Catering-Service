<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserinfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userinfos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('userID')->nullable();
            $table->string('shopName')->nullable();
            $table->string('address')->nullable();;
            $table->string('phone')->nullable();
            $table->string('foodTypeOne')->nullable();
            $table->string('foodTypeTwo')->nullable();
            $table->string('foodTypeThree')->nullable();
            $table->string('foodTypeFour')->nullable();
            $table->string('foodTypeFive')->nullable();
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
        Schema::dropIfExists('userinfos');
    }
}
