<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdvertisementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advertisements', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->string('location')->nullable();
            //$table->string('category_id')->nullable();
            $table->text('description')->nullable();
            $table->string('photos')->nullable();

            $table->integer('watches')->default('0');

            $table->string('bussiness_id')->nullable();
            $table->string('bussiness_vat')->nullable();
            $table->string('name_surname')->nullable();
            $table->string('phonenumber')->nullable();
            $table->string('email')->nullable();
            $table->string('city')->nullable();
            $table->string('address')->nullable();

            $table->string('ad_color')->nullable();
            $table->string('ad_up')->nullable();

            $table->string('user_id')->nullable();

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
        Schema::dropIfExists('advertisements');
    }
}
