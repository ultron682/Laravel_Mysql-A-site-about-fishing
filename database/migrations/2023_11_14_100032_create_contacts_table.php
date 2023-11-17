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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('reportType')->default("default");
            $table->string('imie')->default('imie');
            $table->string('naz')->default('nazwisko');
            $table->integer('wiek')->default('0');
            $table->string('panstwo')->default('');
            $table->string('telefon')->default('123123123');
            $table->string('email')->default('email@email.com');
            $table->string('uwagi')->default('');
            $table->string('zainteresowania')->default('');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
