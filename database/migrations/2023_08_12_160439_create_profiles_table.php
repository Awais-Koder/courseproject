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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('nationality');
            $table->string('telephone');
            $table->string('hearing')->nullable();
            $table->text('message')->nullable();
            $table->date('selected_date')->nullable();
            $table->string('address')->nullable();
            $table->string('p_test')->nullable();
            $table->string('p_test_link')->nullable();
            $table->string('roll_no');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
