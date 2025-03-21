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
        Schema::create('products', function (Blueprint $table) {
            $table->id();                // Primary key (auto-increment)

            $table->string('name');       // Item name

            $table->text('description');

            $table->integer('quantity');  // Quantity in stock

            $table->decimal('price', 8, 2); // Price per item

            $table->timestamps();        // Created at and updated at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventory');
    }
};
