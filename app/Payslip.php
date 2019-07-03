<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Maatwebsite\Excel\Facades\Excel;

class Payslip extends Model
{
    //

    public function personel()
    {
        return $this->belongsTo(personel::class);
    }

    public function month()
    {
        return $this->belongsTo(Month::class);
    }

    public function group()
    {
        return $this->belongsTo(Group::class);
    }

    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }

    public function payitem()
    {
        return $this->hasMany(Payitem::class);
    }



}
