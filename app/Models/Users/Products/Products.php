<?php

namespace App\Models\Users\Products;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $fillable = [
        'erp_product_name',
        'erp_product_code',
        'erp_product_price',
        'erp_sales_price',
        'erp_short_description',
        'erp_long_description',
        'erp_product_image',
        'erp_status',
        'erp_category_name',
        'erp_user_id'
    ];
}
