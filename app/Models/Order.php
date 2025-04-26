<?php

namespace App\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Products as Product;

class Order extends BaseModel
{
    use SoftDeletes;

    protected $fillable = [
        'user_id', 'product_id', 'billing_address_id', 'shipping_address_id', 'payment_method_id', 'order_number', 'status', 'total_items', 'amount', 'tax_total', 'notes'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function product() {
        return $this->belongsTo(Product::class);
    }

    public function billingAddress() {
        return $this->belongsTo(BillingAddress::class);
    }

    public function shippingAddress() {
        return $this->belongsTo(ShippingAddress::class);
    }

    public function paymentMethod() {
        return $this->belongsTo(PaymentMethod::class);
    }

    public const STATUS_PENDING = 1;
    public const STATUS_PROCESSING = 2;
    public const STATUS_COMPLETED = 3;
    public const STATUS_CANCELLED = 0;

    protected $appends = [
        'status_text',
        'status_bg_color'
    ];

    public function getStatus()
    {
        return[
            self::STATUS_PENDING => 'Pending',
            self::STATUS_PROCESSING => 'Processing',
            self::STATUS_COMPLETED => 'Completed',
            self::STATUS_CANCELLED => 'Cancelled'
        ];
    }
    public function getStatusBg()
    {
        return[
            self::STATUS_PENDING => 'warning',
            self::STATUS_PROCESSING => 'info',
            self::STATUS_COMPLETED => 'success',
            self::STATUS_CANCELLED => 'danger'
        ];
    }

    public function getStatusTextAttribute()
    {
        return $this->getStatus()[$this->status] ?? 'Unknown';
    }
    public function getStatusBgColorAttribute()
    {
        return $this->getStatusBg()[$this->status] ?? 'secondary';
    }
    public function getStatusBtnText($currentStatus)
    {
        $statusTexts = [];

        foreach ($this->getStatus() as $key => $value) {
            if ($key == $currentStatus) {
                continue;
            }

            $statusTexts[] = [
                'class' => $this->getStatusBg()[$key] ?? 'secondary',
                'text'  => $value,
            ];
        }

        return $statusTexts;
    }
 


}
