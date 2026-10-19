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
        Schema::create('action_message_contacts', function (Blueprint $table) {
            $table->id();
            $table->string('statut');
            $table->string('date');
            $table->string('action')->nullable();
            $table->text('description')->nullable();
            $table->foreignId('message_contact_id')->constrained('message_contacts')->onDelete('cascade');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('action_message_contacts');
    }
};
