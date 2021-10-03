<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sekatsu_user extends Model
{
    use HasFactory;

    protected $table = 'sekatsu_users';

    protected $fillable =
    [
        'id',
        'visit_name',
        'visit_date',
        'sekatsu_comment',
        'visit_temperature_men',
        'visit_temperature_woman',
        'file',
        'created_at',
        'updated_at'
    ];

}
