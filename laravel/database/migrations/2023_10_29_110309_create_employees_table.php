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
        // if (!Schema::hasTable('employees')) {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // first_name
            $table->string('family'); // last_name
            $table->string('father'); // middle_name
            $table->string('mother'); // mother_name
            $table->string('birth_place'); 
            $table->date('birth_date'); // birthday
            $table->enum('sex' , ['m' , 'f']);
            $table->enum('title' , ['Mr' , 'Ms' , 'Dr' ,'Esq']);
            $table->string('national_number');
            $table->string('pass_port_number')->nullable(); // passport_number
            $table->string('address');
            $table->string('landline');
            $table->foreignId('department_id')->constrained('departments')->onDelete('cascade');
            $table->enum('health_status' , ['decent' , 'handicapped']);
            $table->enum('socail_status' , ['married' , 'single']);
            $table->string('partner_name')->nullable();
            $table->string('children')->nullable();
            $table->string('exp_brief')->default('No previous experience');
            $table->timestamps();
            // Add softdelete column
        });
        // }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
