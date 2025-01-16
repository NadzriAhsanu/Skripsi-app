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
        Schema::create('bidan_schedules', function (Blueprint $table) {
            $table->id();
            $table->foreignId('bidan_id')->constrained('bidans');
            $table->string('day');
            $table->string('time');
            $table->string('status')->default('active');
            $table->string('note')->nullable();
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('bidan_schedules');

    }
    };

