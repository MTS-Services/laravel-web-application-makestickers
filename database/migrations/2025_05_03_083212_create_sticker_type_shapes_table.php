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
        Schema::create('sticker_type_shapes', function (Blueprint $table) {
            $table->id();
            $table->integer('sort_order')->default(0);
            $table->unsignedBigInteger('sticker_type_id');
            $table->unsignedBigInteger('sticker_shape_id');
            $table->timestamps();
            $table->softDeletes();

            $this->addAdminAuditColumns($table);

            // Foreign keys
            $table->foreign('sticker_type_id')->references('id')->on('sticker_types')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('sticker_shape_id')->references('id')->on('sticker_shapes')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sticker_type_shapes');
    }
};
