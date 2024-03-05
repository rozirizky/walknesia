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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('users_id');
            $table->date('awal');
            $table->date('akhir');
            $table->integer('harga');
            $table->integer('durasi');
            $table->integer('subtotal');
            $table->string('destinasi');
            $table->string('car');
            $table->enum('status',['paid','unpaid']);
            
            $table->integer('peserta');
       

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
