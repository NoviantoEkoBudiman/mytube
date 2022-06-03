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
        Schema::create('subscription', function (Blueprint $table) {
            $table->increments('subscriptions_id');
            $table->unsignedInteger('subscription_user_id');
            $table->foreign('subscription_user_id')->references('user_id')->on('users')->onDelete('cascade');
            $table->unsignedInteger('subsribtion_by_user_id');
            $table->foreign('subsribtion_by_user_id')->references('user_id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('subscription');
    }
};
