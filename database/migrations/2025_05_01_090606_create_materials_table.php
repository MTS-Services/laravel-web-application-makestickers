<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Http\Traits\AuditColumnTraits;
use App\Models\Material;

return new class extends Migration
{
    use SoftDeletes, AuditColumnTraits;
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('materials', function (Blueprint $table) {
            $table->id();
            $table->integer('sort_order')->default(0);
            $table->string('name');
            $table->longText('description')->nullable();
            $table->string('icons')->nullable();
            $table->decimal('price_modifier', 10, 2);
            $table->tinyInteger('status')->default(Material::STATUS_ACTIVE)->comment(Material::STATUS_ACTIVE . ' = Active, ' . Material::STATUS_INACTIVE . ' = Inactive');
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
        Schema::dropIfExists('materials');
    }
};
