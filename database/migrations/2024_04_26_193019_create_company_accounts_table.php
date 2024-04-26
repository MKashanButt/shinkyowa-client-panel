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
        Schema::create('company_accounts', function (Blueprint $table) {
            $table->integer('id')->primary()->autoIncrement();
            $table->date('date');
            $table->text('description');
            $table->string('debit', 10);
            $table->string('credit', 10);
            $table->string('balance', 10);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_accounts');
    }
};
