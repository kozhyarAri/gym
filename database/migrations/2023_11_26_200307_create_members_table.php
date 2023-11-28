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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->foreignId('plan_id')->nullable()->constrained('plans')->onDelete('set null');
            $table->foreignId('user')->nullable()->constrained('users')->onDelete('set null');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->enum('gender',['male', 'female']);
            $table->string('address');
            $table->string('phone_number')->unique();//07711576170
            $table->enum('membership_status',['active', 'inactive', 'expired'])->default('inactive');
            $table->string('card_num')->unique();
            $table->timestamp('expire_date')->nullable;
            $table->longText('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
