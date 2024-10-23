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
        Schema::create('calendars', function (Blueprint $table) {
            $table->id();
            $table->foreignId('dentalclinic_id')->constrained('dentalclinics')->onDelete('cascade');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->date('appointmentdate');
            $table->time('appointmenttime');
            $table->string('concern');
            $table->string('name');
            $table->string('gender');
            $table->date('birthday');
            $table->string('age');
            $table->string('address');
            $table->string('phone');
            $table->string('email');
            $table->string('medicalhistory')->nullable();
            $table->string('emergencycontactname');
            $table->string('emergencycontactrelation');
            $table->string('emergencycontactphone');
            $table->string('relationname')->nullable();
            $table->string('relation')->nullable();
            $table->string('approved')->default('Pending Approval');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('calendars');
    }
};
