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
        Schema::create('orders', function (Blueprint $table) {
            $table->id('orderId');
            $table->unsignedBigInteger('userId');
            $table->integer('approved')->default(0);
            $table->double('orderTotal');
            $table->datetime('orderDate');
            $table->string('wallet', 255);
            $table->integer('walletbalance');
            $table->string('type', 255);
            $table->string('btcvalue', 100)->default('no');
            $table->string('btcreceived', 100);
            $table->string('txhash', 255);
            $table->string('confirmations', 100);
            $table->string('uorderid', 255);
            $table->foreign('orderId')->references('id')->on('users'); // Assuming 'users' table exists
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
