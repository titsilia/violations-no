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
        // создание таблицы Заявки
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->string('description');
            $table->string('auto_number');
            $table->foreignId('status_id')->references('id')->on('statuses');
            $table->foreignId('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};
