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
        Schema::table('users', function (Blueprint $table) {
            $table->integer('downloads')->default(0);
            $table->integer('uploads')->default(0);

            $table->text('avatar')->nullable();
            $table->text('bio')->nullable();

            $table->string('twitter')->nullable();
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();

            $table->string('github_id')->nullable();
            $table->string('github_username')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'downloads',
                'uploads',
                'avatar',
                'bio',
                'twitter',
                'facebook',
                'instagram',
                'github_id',
                'github_username',
            ]);
        });
    }
};
