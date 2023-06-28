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
        Schema::table('platforms', function (Blueprint $table) {
            $table->string('company')->nullable();
            $table->date('release_date')->nullable();
            $table->date('discontinued_date')->nullable();
            $table->text('description')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('platforms', function (Blueprint $table) {
            $table->dropColumn('company');
            $table->dropColumn('release_date');
            $table->dropColumn('discontinued_date');
            $table->dropColumn('description');
        });
    }
};
