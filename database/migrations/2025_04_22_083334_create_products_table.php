<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Http\Traits\AuditColumnTraits;
use App\Models\Product;

return new class extends Migration
{
    use SoftDeletes, AuditColumnTraits;
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->unsignedBigInteger('size_categories_id')->nullable();
            $table->string('description')->nullable();
            $table->string('unit_price');
            $table->string('preview_image')->nullable();

            $table->tinyInteger('status')->max(1)->default(Product::STATUS_ACTIVE)->comment(Product::STATUS_ACTIVE . ' = Active, ' );

            $table->timestamps();
            $table->softDeletes();            
            $this->addAdminAuditColumns($table);

            $table->foreign('size_categories_id')->references('id')->on('size_categories')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
