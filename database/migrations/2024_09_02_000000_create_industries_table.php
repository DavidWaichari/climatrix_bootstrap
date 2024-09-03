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
        Schema::create('industries', function (Blueprint $table) {
            $table->id();
            $table->string('code')->nullable();
            $table->string('name')->nullable();
            $table->decimal('ssp1_2030', 10, 3)->default(0);
            $table->decimal('ssp1_2050', 10, 3)->default(0);
            $table->decimal('ssp2_2030', 10, 3)->default(0);
            $table->decimal('ssp2_2050', 10, 3)->default(0);
            $table->decimal('ssp5_2030', 10, 3)->default(0);
            $table->decimal('ssp5_2050', 10, 3)->default(0);
            $table->text('reference')->nullable();
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('industries');
    }
};
