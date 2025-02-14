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
        // Tabel Pesanan
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_number')->unique();
            $table->string('customer_name');
            $table->string('customer_phone');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->enum('delivery_method', ['pickup', 'dropoff']);
            $table->text('pickup_address')->nullable();
            $table->text('notes')->nullable();
            $table->enum('status', ['pending', 'processing', 'completed', 'cancelled'])->default('pending');
            $table->unsignedTinyInteger('rating')->nullable(); // Rating dari 1-5
            $table->text('review')->nullable(); // Ulasan teks
            $table->timestamp('rated_at')->nullable(); // Waktu rating diberikan
            $table->timestamps();
        });

        Schema::create('order_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->constrained()->onDelete('cascade');
            $table->foreignId('service_detail_id')->constrained()->onDelete('cascade');
            $table->integer('quantity'); // Jumlah sepatu untuk layanan ini
            $table->json('shoe_images')->nullable(); // Gambar sepatu
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_items');
        Schema::dropIfExists('orders');
    }
};
