<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class work extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'Image',
        'gemder',
        'mo_no',
        'bod',
        'hobby',
        'city',
        'password',
    ];
}
