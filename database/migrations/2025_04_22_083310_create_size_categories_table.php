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
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone_number')->nullable();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('image')->nullable();
            $table->rememberToken();
            $table->string('title');
            $table->timestamps();
            $table->softDeletes();
            $this->addMorpheAuditColumns($table);
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
