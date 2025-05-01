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
        Schema::create('size_categories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('material_category_id')->nullable();
            $table->string('height')->nullable();
            $table->string('width')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $this->addMorpheAuditColumns($table);

            // Foreign keys (assumed names for related tables)
            $table->foreign('material_category_id')->references('id')->on('material_categories')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('size_categories');
    }
};
