<?php

namespace App\Models;

use App\Models\PackageItem;
use App\Models\MemberPackage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Package extends Model
{
    use HasFactory;

    public function pkgItem()
    {
        return $this->hasOne(PackageItem::class);
    }

    public function memberPkg()
    {
        return $this->hasMany(MemberPackage::class);
    }
}
