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
            $table->integer('pos_X');
            $table->integer('pos_Y');
            $table->integer('item_object_id');
            $table->timestamps();
            $table->unique(['field_id', 'pos_X', 'pos_Y']);
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
