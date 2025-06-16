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
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
            $table->string('name', 20);
            $table->string('password', 255);
            $table->timestamps();

            //$table->index('name');
            $table->unique('name');
        });
//        Schema::table('accounts', function (Blueprint $table) {
//            $table->string('password', 255)->after('name');
//        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accounts');
//        Schema::table('accounts', function (Blueprint $table) {
//            $table->dropColumn('password');
//        });
    }
};
