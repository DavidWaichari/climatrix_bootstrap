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
        Schema::create('scope_two_emission_categories', function (Blueprint $table) {
            $table->id();
            $table->text('group')->nullable();
            $table->string('name')->nullable();
            $table->decimal('factor', 10, 3)->default(0);
            $table->string('status')->nullable();
            $table->text('extras')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scope_two_emission_categories');
    }
};
