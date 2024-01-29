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
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();

            $table->string('second_name');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('doctor_alias');
            $table->string('age')->default('1990');

            $table->string('work_start_year')->default('1990');
            $table->string('work_stage_year')->default('25');

            $table->text('doctor_img');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctors');
    }
};
