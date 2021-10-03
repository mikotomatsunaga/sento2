<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sento_user extends Model
{
    use HasFactory;

    protected $table = 'sento_users';

    protected $fillable = [
        'user_id',
        'file',
        'sento_name',
        'gender',
        'birth_year',
        'birth_month',
        'birth_day',
        'carrier_year',
        'carrier_month',
        'home_sento',
        'went_to_go_sento',
        'profile',
    ];

}
