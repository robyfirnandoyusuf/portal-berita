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
        if (!Schema::hasColumn('users', 'id_role')) {
            Schema::table('gambar', function (Blueprint $table) {
                //
                $table->unsignedBigInteger('id_berita');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('gambar', function (Blueprint $table) {
            //
        });
    }
};
