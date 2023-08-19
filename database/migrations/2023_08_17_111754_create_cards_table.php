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
        Schema::create('cards', function (Blueprint $table) {
            $table->id('cardId');
            $table->dateTime('date');
            $table->integer('categoryId')->default(1);
            $table->integer('cardUsed')->default(0);
            $table->string('cardContent', 512)->collation('latin1_swedish_ci');
            $table->string('cardNum', 20);
            $table->string('cardMon', 10);
            $table->string('cardYea', 10);
            $table->string('cardCvv', 10)->nullable();
            $table->string('cardCou', 128);
            $table->string('CardState', 255);
            $table->string('CardCity', 255);
            $table->string('CardZip', 255);
            $table->string('cardSpliter', 11);
            $table->integer('cardNumPost');
            $table->integer('cardMonPost');
            $table->integer('cardYeaPost');
            $table->integer('cardCvvPost');
            $table->integer('cardCouPost');
            $table->integer('CardStatePost');
            $table->integer('CardCityPost');
            $table->integer('CardZipPost');
            $table->integer('status');
            $table->string('price', 11)->default('0');
            $table->integer('seller')->default(1);
            $table->string('sellerprc', 11)->default('0');

            $table->unique('cardContent')->collation('latin1_swedish_ci');
            $table->unique('cardNum');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cards');
    }
};
