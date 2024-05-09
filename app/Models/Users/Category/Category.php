<?php

namespace App\Models\Users\Category;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'erp_status',
        'erp_category_name',
        'erp_user_id'
    ];
}
