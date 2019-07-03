<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class personel extends Model
{
    //
    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }


    public function group()
    {
        return $this->belongsTo(Group::class);
    }


    public function banks()
    {
        return $this->belongsTo(Bank::class);
    }
}
