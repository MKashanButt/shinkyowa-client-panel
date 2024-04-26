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
        Schema::create('stocks', function (Blueprint $table) {
            $table->integer('id')->primary()->autoIncrement();
            $table->string('stock', 10);
            $table->integer('make');
            $table->string('model', 10);
            $table->integer('year');
            $table->string('fob', 10);
            $table->string('currency', 1)->nullable();
            $table->string('mileage', 10);
            $table->string('engine', 10);
            $table->string('doors', 4);
            $table->string('transmission', 10);
            $table->string('body_type', 10);
            $table->string('fuel', 10);
            $table->integer('category_id');
            $table->text('extras');
            $table->text('buy_link');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stocks');
    }
};
