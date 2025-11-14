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
        Schema::create('mobils', function (Blueprint $table) { 
            $table->id(); 
            $table->String("merk"); 
            $table->String("type"); 
            $table->String("warna"); 
            $table->String("no_polisi") -> unique(); 
            $table->foreignId("penyewa_id") -> nullable() -> constrained("penyewas") -> onDelete('set null'); 
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mobils');
    }
};
