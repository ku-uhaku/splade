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
        Schema::create('stores', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('owner');
            $table->string('phone');
            $table->string('email');
            $table->string('country');
            $table->string('city');
            $table->string('address');
            $table->string('logo');
            $table->string('website');
            $table->string('facebook');
            $table->string('instagram');
            $table->string('signature');
            $table->string('currency');
            $table->string('timezone');
            $table->string('language');
            $table->string('date_format');
            $table->string('time_format');
            $table->string('monday');
            $table->string('tuesday');
            $table->string('wednesday');
            $table->string('thursday');
            $table->string('friday');
            $table->string('saturday');
            $table->string('sunday');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stores');
    }
};
