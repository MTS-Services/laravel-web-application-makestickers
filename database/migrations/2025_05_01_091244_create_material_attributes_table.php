<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Http\Traits\AuditColumnTraits;
use App\Models\MaterialAttribute;

return new class extends Migration
{
    use SoftDeletes, AuditColumnTraits;
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('material_attributes', function (Blueprint $table) {
            $table->id();
            $table->integer('sort_order')->default(0);
            $table->string('name');
            $table->tinyInteger('type')->default(MaterialAttribute::TYPE_TEXT)->comment(MaterialAttribute::TYPE_TEXT . ' = 0, ' . MaterialAttribute::TYPE_NUMBER . ' = 1', MaterialAttribute::TYPE_DECIMAL . ' = 2');
            $table->tinyInteger('status')->default(MaterialAttribute::STATUS_ACTIVE)->comment(MaterialAttribute::STATUS_ACTIVE . ' = Active, ' . MaterialAttribute::STATUS_INACTIVE . ' = Inactive');
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
        Schema::dropIfExists('material_attributes');
    }
};
