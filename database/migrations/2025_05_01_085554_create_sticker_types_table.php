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
        Schema::create('sticker_types', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('sort_order');
            $table->unsignedBigInteger('category_id');
            $table->string('name', 255);
            $table->string('slug', 255)->unique();
            $table->text('description')->nullable();
            // Note: base_price was marked as XX, so it's removed
            $table->decimal('base_price', 10, 2)->nullable();
            $table->string('thumbnail', 255);
            $table->boolean('status')->default(true);
            $table->boolean('is_featured')->default(false);
            $table->timestamps();
            $table->softDeletes();
            
            $this->addAdminAuditColumns($table);
            $table->foreign('category_id')->references('id')->on('sticker_categories')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sticker_types');
    }
};
