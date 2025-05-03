<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Http\Traits\AuditColumnTraits;
use App\Models\StickerType;

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
            $table->integer('sort_order')->default(0);
            $table->unsignedBigInteger('category_id');
            $table->string('name');
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->decimal('base_price', 10, 2)->nullable();
            $table->string('thumbnail');
            $table->boolean('status')->default(StickerType::STATUS_ACTIVE)->comment(StickerType::STATUS_ACTIVE . ' = Active, ' . StickerType::STATUS_INACTIVE . ' = Inactive');
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
