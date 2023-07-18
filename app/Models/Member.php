<?php

namespace App\Models;

use App\Models\Invoice;
use App\Models\MemberLog;
use App\Models\MemberPackage;
use App\Models\DailyAttendence;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Member extends Model
{
    use HasFactory;
    protected $fillable =[
        'member_id',
        'name',
        'gender',
        'address',
        'phone',
        'email',
        'sos_contact',
        'doc_type',
        'doc_number'
    ];

    public function memberLog()
    {
        return $this->hasMany(MemberLog::class);
    }

    public function memberPkg()
    {
        return $this->hasMany(MemberPackage::class);
    }

    public function dailyAttend()
    {
        return $this->hasMany(DailyAttendence::class);
    }

    public function invoice()
    {
        return $this->hasMany(Invoice::class);
    }

}
