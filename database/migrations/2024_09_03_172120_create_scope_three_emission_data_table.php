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
        Schema::create('scope_three_emission_data', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('organization_id')->nullable();
            $table->unsignedBigInteger('organization_branch_id')->nullable();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->timestamp('from_date')->nullable();
            $table->timestamp('to_date')->nullable();
            $table->decimal('units', 15, 3)->default(0);
            $table->string('unit_of_measurement')->nullable();
            $table->decimal('emissions_per_month', 15, 3)->default(0);
            $table->decimal('total_ghg', 15, 3)->default(0);
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
        Schema::dropIfExists('scope_three_emission_data');
    }
};
