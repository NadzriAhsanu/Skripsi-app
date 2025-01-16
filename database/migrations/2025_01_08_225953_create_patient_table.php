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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            // Pasien name
            $table->string('patient_name');
             //nik
             $table->string('patient_nik');
             //kk
             $table->string('patient_kk');
             //phone
             $table->string('patient_phone');
             //email
             $table->string('patient_email')->nullable();
             //birth_date
             $table->date('birth_date');(false);
             //address line
             $table->text('address_line');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patient');
    }
};
