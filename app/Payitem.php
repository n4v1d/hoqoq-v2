<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payitem extends Model
{
    //

    public function payslip()
    {
        return $this->belongsTo(Payslip::class);
    }


    public function item()
    {
        return $this->belongsTo(Item::class);
    }

}
