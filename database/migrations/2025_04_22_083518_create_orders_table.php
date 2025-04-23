<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Http\Traits\AuditColumnTraits;
use App\Models\Order;

return new class extends Migration
{
    use SoftDeletes, AuditColumnTraits;
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
        $table->id();
        $table->string('order_number')->unique();
        $table->tinyInteger('status')->max(1)->default(Order::STATUS_PENDING)->comment(Order::STATUS_PENDING . ' = Pending, ' . Order::STATUS_PROCESSING . ' = Processing, ' . Order::STATUS_COMPLETED . ' = Completed, ' . Order::STATUS_CANCELLED . ' = Cancelled');
        $table->integer('total_items');
        $table->integer('amount');
        $table->integer('tax_totatl')->default(0);
        $table->integer('discount_total')->default(0);
        $table->integer('shipping_total')->default(0);
        $table->text('notes')->nullable();
        $table->unsignedBigInteger('user_id');
        // $table->unsignedBigInteger('product_id');
        // $table->unsignedBigInteger('payment_method_id');
        // $table->unsignedBigInteger('billing_address_id');
        // $table->unsignedBigInteger('shipping_address_id');
        $table->timestamps();
        $table->softDeletes();
        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        // $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade')->onUpdate('cascade');
        // $table->foreign('payment_method_id')->references('id')->on('payment_methods')->onDelete('cascade')->onUpdate('cascade');
        // $table->foreign('billing_address_id')->references('id')->on('billing_addresses')->onDelete('cascade')->onUpdate('cascade');
        // $table->foreign('shipping_address_id')->references('id')->on('shipping_addresses')->onDelete('cascade')->onUpdate('cascade');
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
