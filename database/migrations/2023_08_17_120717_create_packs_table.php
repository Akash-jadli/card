<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('packs', function (Blueprint $table) {
            $table->id();
            $table->datetime('date');
            $table->unsignedBigInteger('categoryId');
            $table->string('type', 255)->default('0');
            $table->string('level', 255)->default('0');
            $table->string('class', 255)->default('0');
            $table->integer('code')->default(0);
            $table->string('name', 255);
            $table->string('comment1', 255);
            $table->string('comment2', 255);
            $table->integer('Used')->default(0);
            $table->string('country', 512);
            $table->integer('value');
            $table->string('price', 11)->default('0');
            $table->integer('norefund')->default(0);
            $table->unsignedBigInteger('seller')->default(1);
            $table->string('sellerprc', 11)->default('0');
            $table->foreign('categoryId')->references('categoryId')->on('category');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('packs');
    }
};
