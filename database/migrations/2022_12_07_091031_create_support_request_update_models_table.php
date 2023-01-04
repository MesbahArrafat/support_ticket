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
        Schema::create('support_request_update_models', function (Blueprint $table) {
            $table->id();
            $table->string('comment');
            $table->integer('parent_id')->unsigned()->nullable();
            $table->timestamps();

            $table->foreignId('support_request_id')->references('id')->on('support_request_models')->onDelete('cascade')->onUpdate('cascade')->nullable();
            $table->foreignId('commentator_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade')->nullable();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('support_request_update_models');
    }
};
