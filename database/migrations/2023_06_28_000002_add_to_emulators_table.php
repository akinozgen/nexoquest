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
        Schema::table('emulators', function (Blueprint $table) {
            $table->text('homepage')->nullable();
            $table->text('download')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('emulators', function (Blueprint $table) {
            $table->dropColumn('homepage');
            $table->dropColumn('download');
        });
    }
};
