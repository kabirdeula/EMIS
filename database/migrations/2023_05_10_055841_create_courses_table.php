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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('code');
            $table->string('credit_hour');
            $table->unsignedBigInteger('program_id')->nullable();
            $table->unsignedBigInteger('semester_id')->nullable();

            $table->foreign('program_id')->references('id')->on('programs')->onDelete('cascade');
            $table->foreign('semester_id')->references('id')->on('semesters')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('courses', function (Blueprint $table){
            $table->dropForeign(['program_id']);
            $table->dropForeign(['semester_id']);
        });
        Schema::dropIfExists('courses');
    }
};
