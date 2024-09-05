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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->integer('current_logged_in_organization')->nullable();
            $table->string('name');
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('otp')->nullable();
            $table->string('status')->nullable();
            $table->boolean('is_system_admin')->default(false);
            $table->timestamp('last_login')->nullable();
            $table->timestamp('account_opening_date')->nullable();
            $table->string('account_status')->nullable();
            $table->integer('failed_login_attempts')->default(0);
            $table->timestamp('account_closure_date')->nullable();
            $table->string('account_closure_reason')->nullable();
            $table->unsignedBigInteger('created_by')->nullable();
            $table->rememberToken();
            $table->timestamps();

            // Optional: Add foreign key constraint if necessary
            $table->foreign('created_by')->references('id')->on('users')->onDelete('SET NULL');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
