<?php

namespace App\Models\Users\Testing;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testing extends Model
{
    use HasFactory;
    protected $fillable = [
        'erp_status',
        'erp_category_name',
        'erp_product_name',
        'erp_request_type',
        'erp_hidden_type',
        'erp_rejected',
        'erp_suggestion_category',
        'erp_suggestion_product',
        'erp_requirement_need',
        'erp_general_feedback',
        'erp_testing_request',
        'erp_user_id'
    ];

    public function UserName()
    {
        return $this->belongsTo(User::class,'erp_user_id');
    }




}
