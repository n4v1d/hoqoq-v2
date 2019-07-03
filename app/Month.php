<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Month extends Model
{
    //
    public function payslip()
    {
        return $this->hasMany(Payslip::class);
    }
    protected $hidden = ['created_at', 'updated_at'];
}
