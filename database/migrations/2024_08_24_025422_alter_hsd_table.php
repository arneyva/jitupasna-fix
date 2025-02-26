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
        Schema::table('hsd', function (Blueprint $table) {
            // Mengubah tipe data kolom 'harga' menjadi 'decimal(15, 2)'
            $table->decimal('harga', 15, 2)->default(0.00)->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('hsd', function (Blueprint $table) {
            // Mengembalikan tipe data kolom 'harga' ke 'decimal(10, 2)' jika diperlukan
            $table->decimal('harga', 10, 2)->default(0.00)->nullable()->change();
        });
    }
};
