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
        Schema::create('sticker_shapes', function (Blueprint $table) {
            $table->id();
            $table->integer('sort_order')->default(0);
            $table->string('name');
            $table->text('image')->nullable();
            $table->decimal('price_modifier', 8,2);
            $table->boolean('status')->default(true);
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
        Schema::dropIfExists('sticker_shapes');
    }
};
