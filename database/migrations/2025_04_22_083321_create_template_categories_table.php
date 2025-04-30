<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Http\Traits\AuditColumnTraits;

return new class extends Migration
{
    use SoftDeletes, AuditColumnTraits;
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('template_categories', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('image')->nullable();
            $table->unsignedBigInteger('material_category_id')->nullable();
            $table->unsignedBigInteger('size_categories_id')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $this->addMorpheAuditColumns($table);

            // Foreign keys (assumed names for related tables)
            $table->foreign('material_category_id')->references('id')->on('material_categories')->onDelete('set null');
            $table->foreign('size_categories_id')->references('id')->on('size_categories')->onDelete('set null');
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('template_categories');
    }
};
