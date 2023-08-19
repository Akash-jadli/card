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
        Schema::create('salepack', function (Blueprint $table) {
            $table->id();
            $table->datetime('date');
            $table->integer('used');
            $table->string('name', 255);
            $table->string('categoryname', 255);
            $table->string('type', 255);
            $table->string('level', 255);
            $table->string('class', 255)->nullable();
            $table->string('code', 255);
            $table->string('comment1', 255);
            $table->string('comment2', 255);
            $table->string('country', 255);
            $table->integer('value');
            $table->integer('price');
            $table->integer('seller');
            $table->string('sellerprc', 11)->default('0');
            $table->string('refund', 11)->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('salepack');
    }
};
