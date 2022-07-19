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
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('version')->nullable();
            $table->string('file_path')->nullable();
            $table->string('access_level')->nullable();
            $table->unsignedBigInteger('section_id')->index()->nullable();
            $table->unsignedBigInteger('user_id')->index()->nullable();            
            $table->softDeletes();
            $table->timestamps();
            $table->foreign('section_id')->references('id')->on('sections');
            $table->foreign('user_id')->references('id')->on('users');
        });

        // $table->foreign('assigned_to')->references('id')->on('users');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('documents');
    }
};
