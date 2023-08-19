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
        Schema::create('dumps', function (Blueprint $table) {
            $table->id();
            $table->integer('categoryId')->default(1);
            $table->integer('dumpUsed')->default(0);
            $table->string('dumpContent', 512)->unique();
            $table->string('dumpNum', 20)->unique();
            $table->string('dumpMon', 10);
            $table->string('dumpYea', 10);
            $table->string('dumpCou', 128);
            $table->integer('dumpcode');
            $table->string('dumptype', 255)->default('-');
            $table->string('dumpclass', 255)->default('-');
            $table->string('dumplevel', 255)->default('-');
            $table->string('dumpbank', 255);
            $table->integer('status');
            $table->string('price', 11);
            $table->integer('seller')->default(1);
            $table->string('sellerprc', 11)->default('0');
            $table->integer('pack')->default(0);
            $table->string('checkermsg', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dumps');
    }
};
