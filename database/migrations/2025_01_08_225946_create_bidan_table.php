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
        Schema::create('bidans', function (Blueprint $table) {
            $table->id();
            //doctor_name
            $table->string('bidan_name');
            // /bidan_specialist
            $table->string('birth_date');
            // /bidan_phone
            $table->string('bidan_phone');
            // /bidan_email
            $table->string('bidan_email');
            // role
            $table->string('role')->default('bidan');
            // Bidan_Password
            $table->string('bidan_password');
            //photo
            $table->string('photo')->nullable();
            //address
            $table->string('address')->nullable();
            //sip
            $table->string('sip');
            $table->string('id_ihs')->nullable();
            $table->string('nik')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bidans');
    }
};
