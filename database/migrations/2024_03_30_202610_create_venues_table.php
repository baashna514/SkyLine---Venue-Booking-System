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
        Schema::create('venues', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('city_id')->nullable();
            $table->enum('type', ['banquet', 'farmhouse'])->default('banquet');
            $table->string('title')->nullable();
            $table->text('thumbnail')->nullable();
            $table->text('address')->nullable();
            $table->string('size')->nullable();
            $table->integer('min_persons')->nullable();
            $table->integer('max_persons')->nullable();
            $table->integer('parking')->nullable();
            $table->integer('baths')->nullable();
            $table->decimal('starting_price')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('venues');
    }
};
