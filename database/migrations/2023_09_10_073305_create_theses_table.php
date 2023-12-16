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
        Schema::create('theses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nim')->unique();
            $table->foreignId('faculty_id')->constrained();
            $table->foreignId('major_id')->constrained();
            $table->string('title');
            $table->text('abstract');
            $table->string('isrnissn')->unique()->nullable();
            $table->string('no')->unique()->nullable();
            $table->string('category');
            $table->string('date');
            $table->string('metodology');
            $table->string('collation')->nullable();
            $table->string('photo');
            $table->string('file');
            $table->string('status')->nullable();
            $table->string('position')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('theses');
    }
};
