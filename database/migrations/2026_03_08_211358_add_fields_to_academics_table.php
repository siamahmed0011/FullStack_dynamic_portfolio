<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('academics', function (Blueprint $table) {
            $table->string('degree')->nullable();
            $table->string('institution')->nullable();
            $table->string('year')->nullable();
            $table->string('result')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('academics', function (Blueprint $table) {
            $table->dropColumn(['degree', 'institution', 'year', 'result']);
        });
    }
};