<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Http\Traits\AuditColumnTraits;
use App\Models\Blog;

return new class extends Migration
{
    use SoftDeletes, AuditColumnTraits;
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title', 120);
            $table->string('slug', 120)->unique();
            $table->string('short_desc', 300)->nullable();
            $table->text('long_desc')->nullable();
            $table->string('featured_image', 255)->nullable();
            $table->string('image', 125)->nullable();
            $table->string('video', 255)->nullable();
            $table->string('video_thumbnail', 255)->nullable();
            $table->tinyInteger('status')->max(1)->default(Blog::STATUS_DRAFT)->comment(Blog::STATUS_PUBLISH . ' = Publish, ' . Blog::STATUS_DRAFT . ' = Draft, ' . Blog::STATUS_HIDE . ' = Hide');
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
        Schema::dropIfExists('blogs');
    }
};
