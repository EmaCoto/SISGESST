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
            $table->string('linked', 10, 0);
            $table->string('contractor', 10, 0);
            $table->string('temporary', 10, 0);
            $table->string('time', 10, 0);
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
