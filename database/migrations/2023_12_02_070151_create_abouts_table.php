<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('image');        
            $table->string('job_title');
            $table->text('description');
            $table->date('birthday');
            $table->string('website');
            $table->string('phone');
            $table->string('city');
            $table->string('address');
            $table->integer('age');
            $table->string('degree');
            $table->string('email');
            $table->string('freelance_status');
            $table->text('additional_info');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};
