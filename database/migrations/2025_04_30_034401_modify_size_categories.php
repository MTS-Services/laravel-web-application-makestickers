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
        Schema::table('size_categories', function (Blueprint $table) {
            $table->unsignedBigInteger('sticker_category_id')->nullable();
            $table->unsignedBigInteger('label_category_id')->nullable();
            $table->foreign('sticker_category_id')->references('id')->on('sticker_categories')->onDelete('set null');
            $table->foreign('label_category_id')->references('id')->on('label_categories')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('size_categories', function (Blueprint $table) {
            //
        });
    }
};
