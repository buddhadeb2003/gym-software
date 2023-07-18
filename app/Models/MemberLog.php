<?php

namespace App\Models;

use App\Models\Member;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MemberLog extends Model
{
    use HasFactory;
    protected $fillable = [
        'date',
        'height',
        'weight'
    ];
}
