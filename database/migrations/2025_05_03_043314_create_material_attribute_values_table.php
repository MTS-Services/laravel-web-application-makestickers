<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Http\Traits\AuditColumnTraits;
use App\Models\MaterialAttributeValue;

return new class extends Migration
{
    use SoftDeletes, AuditColumnTraits;
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('material_attribute_values', function (Blueprint $table) {
            $table->id();
            $table->integer('sort_order')->default(0);
            $table->unsignedBigInteger('material_id');
            $table->unsignedBigInteger('material_attribute_id');
            $table->string('value');
            $table->tinyInteger('status')->default(MaterialAttributeValue::STATUS_ACTIVE)->comment(MaterialAttributeValue::STATUS_ACTIVE . ' = Active, ' . MaterialAttributeValue::STATUS_INACTIVE . ' = Inactive');

            $table->foreign('material_id')->references('id')->on('materials')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('material_attribute_id')->references('id')->on('material_attributes')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
            $table->softDeletes();

            $this->addAdminAuditColumns($table);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('material_attribute_values');
    }
};
