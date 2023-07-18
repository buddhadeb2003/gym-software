<?php

namespace App\Models;

use App\Models\PackageItem;
use App\Models\MemberPackageItem;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Item extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'type',
        'price'
    ];

    public function pkgItem()
    {
        return $this->hasMany(PackageItem::class);
    }

    public function memberPkgItem()
    {
        return $this->hasMany(MemberPackageItem::class);
    }
}
