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
        Schema::create('evaluations', function (Blueprint $table) {
            $table->id();
            $table->string('danger');
            $table->string('effects');
            $table->string('source');
            $table->string('means');
            $table->string('individual');
            $table->decimal('linked', 10, 0, 1000);
            $table->decimal('contractor', 10, 0, 1000);
            $table->decimal('temporary', 10, 0, 1000);
            $table->decimal('time', 10, 0, 1000);
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evaluations');
    }
};
