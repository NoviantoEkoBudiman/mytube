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
        Schema::create('video', function (Blueprint $table) {
            $table->increments('video_id');
            $table->unsignedInteger('video_playlist_id');
            $table->foreign('video_playlist_id')->references('playlist_id')->on('playlist')->onDelete('cascade');
            $table->string('video_name')->length(55);
            $table->text('video_description');
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
        Schema::dropIfExists('video');
    }
};
