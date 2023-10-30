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
            $table->string('first_name'); 
            $table->string('last_name'); 
            $table->string('middle_name'); 
            $table->string('mother_name');
            $table->string('birth_place'); 
            $table->date('birthday'); 
            $table->enum('sex' , ['m' , 'f']);
            $table->enum('title' , ['Mr' , 'Ms' , 'Dr' ,'Esq']);
            $table->string('national_number');
            $table->string('passport_number')->nullable();
            $table->string('address');
            $table->string('landline');
            $table->string('phone');
            $table->foreignId('department_id')->constrained('departments')->onDelete('cascade');
            $table->enum('health_status' , ['decent' , 'handicapped']);
            $table->enum('socail_status' , ['married' , 'single']);
            $table->string('partner_name')->nullable();
            $table->string('children')->nullable();
            $table->string('exp_brief')->default('No previous experience');
            $table->timestamps();
            $table->softDeletes();
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
