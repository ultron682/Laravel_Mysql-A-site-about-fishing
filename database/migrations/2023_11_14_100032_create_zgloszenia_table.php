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
        Schema::create('zgloszenia', function (Blueprint $table) {
            $table->id();
            $table->string('reportType');
            $table->string('imie');
            $table->string('naz');
            $table->integer('wiek');
            $table->string('panstwo');
            $table->integer('telefon');
            $table->string('email')->unique();
            $table->string('uwagi');
            $table->string('zainteresowania');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('zgloszenia');
    }
};
