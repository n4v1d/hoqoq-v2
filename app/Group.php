<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    //
    public function personel()
    {
        return $this->hasMany(personel::class);
    }
    protected $hidden = ['created_at', 'updated_at'];


    public function payslip()
    {
        return $this->hasMany(Payslip::class);
    }

}
