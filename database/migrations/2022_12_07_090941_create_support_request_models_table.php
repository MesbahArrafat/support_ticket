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
        Schema::create('support_request_models', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('customer_id');
            $table->bigInteger('project_id');
            $table->bigInteger('category_id');
            $table->string('description');
            $table->integer('status')->nullable();
            $table->integer('employee_id')->nullable();
            $table->timestamps();


            $table->foreignId('customer_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade')->nullable();
            $table->foreignId('category_id')->references('id')->on('support_category_models')->onDelete('cascade')->onUpdate('cascade')->nullable();
            $table->foreignId('project_id')->references('id')->on('projects_models')->onDelete('cascade')->onUpdate('cascade')->nullable();
            $table->foreignId('employee_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('support_request_models');
    }
};
