<?php

namespace App\Models\Tester\Profile;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'erp_cell_number',
        'erp_alternative_number	',
        'erp_address',
        'erp_country',
    ];
}
