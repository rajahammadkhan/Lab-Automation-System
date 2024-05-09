<?php

namespace App\Models\Tester\TestingRequest;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestingRequest extends Model
{
    use HasFactory;
    protected $fillable = [
        'erp_status',
        'erp_category_name',
        'erp_product_name',
        'erp_request_type',
        'erp_suggestion_category',
        'erp_suggestion_product',
        'erp_requirement_need',
        'erp_general_feedback',
        'erp_testing_request',
        'erp_user_id'
    ];




}
