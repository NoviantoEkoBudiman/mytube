<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chanel', function (Blueprint $table) {
            $table->increments('chanel_id');
            $table->unsignedInteger('channel_user_id');
            $table->foreign('channel_user_id')->references('user_id')->on('users')->onDelete('cascade');
            $table->string('channel_name')->length(55);
            $table->text('channel_description');
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
        Schema::dropIfExists('chanel');
    }
};
