<?php

use App\Models\Product;
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
        Schema::table('products', function (Blueprint $table) {
            $table->unsignedBigInteger('material_category_id')->nullable();
            $table->unsignedBigInteger('sticker_category_id')->nullable();
            $table->unsignedBigInteger('label_category_id')->nullable();
            $table->foreign('material_category_id')->references('id')->on('material_categories')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('sticker_category_id')->references('id')->on('sticker_categories')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('label_category_id')->references('id')->on('label_categories')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            //
        });
    }
};
