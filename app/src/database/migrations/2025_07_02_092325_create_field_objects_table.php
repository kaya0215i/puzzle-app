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
        Schema::create('field_objects', function (Blueprint $table) {
            $table->id();
            $table->integer('field_id');
            $table->integer('index');
            $table->integer('item_id');
            $table->integer('piece_id');
            $table->float('angle_x');
            $table->float('angle_y');
            $table->float('angle_z');
            $table->float('angle_w');
            $table->timestamps();
            $table->unique(['field_id', 'index']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('field_objects');
    }
};
