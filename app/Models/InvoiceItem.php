<?php

namespace App\Models;

use App\Models\MemberPackage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class InvoiceItem extends Model
{
    use HasFactory;

    public function memberPkg()
    {
        return $this->hasOne(MemberPackage::class);
    }
}
