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
        Schema::create('customer_payments', function (Blueprint $table) {
            $table->integer('id')->primary()->autoIncrement();
            $table->date('date');
            $table->string('customer_account', 20);
            $table->string('vehicle_name', 30);
            $table->string('chassis', 30);
            $table->string('c&f', 10);
            $table->date('payment_recieved_date');
            $table->string('balance', 10);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer_payments');
    }
};
