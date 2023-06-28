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
        Schema::table('roms', function (Blueprint $table) {
            $table->date('release_date')->nullable();
            $table->string('publisher')->nullable();
            $table->string('genre')->nullable();
            $table->string('region_code')->nullable();
            $table->integer('metacritic_score')->nullable();
            $table->text('metacritic_url')->nullable();
            $table->text('video_trailer')->nullable();
            $table->text('official_website')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('roms', function (Blueprint $table) {
            $table->dropColumn('release_date');
            $table->dropColumn('publisher');
            $table->dropColumn('genre');
            $table->dropColumn('region_code');
            $table->dropColumn('metacritic_score');
            $table->dropColumn('metacritic_url');
            $table->dropColumn('video_trailer');
            $table->dropColumn('official_website');
        });
    }
};
