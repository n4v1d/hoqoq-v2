<?php

namespace App\Http\Controllers;

use App\Branch;
use App\Group;
use App\Item;
use App\Month;
use App\Payitem;
use App\Payslip;
use App\personel;
use App\Setting;
use Illuminate\Http\Request;

class PayslipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //

        $branchs = Branch::all();
        $groups = Group::all();
        $months = Month::all();



        if($request->has('branch_id')) {
            if ($request->get('branch_id') != 0)
            {
                $payslips = Payslip::where('branch_id', 'like' , '%'. $request->get('branch_id') . '%');

            }


            if($request->get('month_id') != 0)
            {
                $payslips->where('month_id', '=' , $request->get('month_id'));
            }


            if($request->get('group_id') != 0)
            {
                $payslips->where('group_id', '=' , $request->get('group_id'));
            }


            if($request->get('status') != 0)
            {
                $payslips->where('status', '=' , $request->get('status'));
            }



            $payslips =  $payslips->OrderBy('id','desc')->get();

        }
        else
        {
            $payslips = Payslip::OrderBy('id','desc')->paginate(15);

        }


        return view('Admin.Payslip.Index',compact('payslips' , 'branchs','months','groups', 'request'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(personel $personel)
    {
        //

        $months =Month::all();
        $item =Item::all();

        return view('Admin.PaySlip.New',compact('personel' , 'months','item'));
    }



    public function store(Personel $personel , Request $request)
    {

        //

            $sum = 0;

            $Payslip = new Payslip();

            $Payslip->personel_id = $personel->id;
            $Payslip->month_id = $request->get('month_id');
            $Payslip->group_id = $personel->group_id;
            $Payslip->branch_id = $personel->branch_id;

            $Payslip->day = $request->get('day');
            $Payslip->hour = $request->get('hour');
            $Payslip->min = $request->get('min');

            // Start Calculate

            // Calculate Day
            $Payslip->day = $request->get('day');
            $Payslip->day_price = 505279;
           $sum = $sum +  $Payslip->day_sum = $request->get('day') * '505279';

            // Calculate Ezafe Kari
            $Payslip->hour = $request->get('hour');
            $Payslip->min = $request->get('min');


            $sum = $sum +   $Payslip->ezafekari_price = (( $request->get('hour') * 60) + $request->get('min')) * 1609;


            $Payslip->sum = $sum;
            $Payslip->bon = 0;

                $Payslip->save();

            return redirect("/admin/payslip/autoItem/$Payslip->id");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Payslip  $payslip
     * @return \Illuminate\Http\Response
     */
    public function show(Payslip $payslip)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Payslip  $payslip
     * @return \Illuminate\Http\Response
     */
    public function edit(Payslip $payslip)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Payslip  $payslip
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Payslip $payslip)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Payslip  $payslip
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payslip $payslip)
    {
        //
        $payslip->delete();

        return redirect()->back();
    }


    public function AddItem(Payslip $payslip)
    {
        $items = Item::all();

        return view('Admin.PaySlip.AddItem',compact('payslip','items'));
    }


    public function StoreItem(Payslip $payslip , Request $request)
    {
        $item = Item::find($request->get('item_id'));

        $payItem = new Payitem();

            $payItem->payslip_id = $payslip->id;
            $payItem->item_id = $request->get('item_id');
            $payItem->price = $request->get('price');
            $payItem->type = $item->type;
            $payItem->save();


        if($item->type == 1)
        {
            $payslip->increment('sum',$request->get('price'));
        }

        if($item->type == 2)
        {
            $payslip->increment('bon',$request->get('price'));

        }


        if($item->type == 3)
        {
            $payslip->decrement('sum',$request->get('price'));

        }


        if($item->type == 4)
        {
            $payslip->decrement('bon',$request->get('price'));

        }

        return redirect()->back();
    }


    public function DeleteItem(Payitem $payitem , Request $request)
    {

        $payslip = Payslip::Find($payitem->payslip_id);


        if($payitem->type == 1)
        {
            $payslip->decrement('sum',$payitem->price);
        }

        if($payitem->type == 2)
        {
            $payslip->decrement('bon',$payitem->price);

        }


        if($payitem->type == 3)
        {
            $payslip->increment('sum',$payitem->price);

        }


        if($payitem->type == 4)
        {
            $payslip->increment('bon',$payitem->price);

        }

        $payitem->delete();

        return redirect()->back();
    }

    public function autoItem(Payslip $payslip)
    {
        $setting = Setting::find(1);

        // Calculate Personel Bon

        if($payslip->personel->bon == 1)
        {
            $payitem = new Payitem();
            if($payslip->day == 31 || $payslip->day == 30)
            {
                $bon =  $payitem->price = $setting->bon * 30;
            }
            else
            {
                $bon = $payitem->price = $setting->bon * $payslip->day;

            }
            $payitem->payslip_id = $payslip->id;
            $payitem->item_id = 1;
            $payitem->type = 2;
            $payitem->save();

            $payslip->increment('bon',$bon);

        }


        // Calculate maskan

        if($payslip->personel->maskan == 1)
        {
            $payitem = new Payitem();
            if($payslip->day == 31 || $payslip->day == 30)
            {
                $maskan =  $payitem->price = $setting->maskan * 30;
            }
            else
            {
                $maskan = $payitem->price = $setting->maskan * $payslip->day;

            }
            $payitem->payslip_id = $payslip->id;
            $payitem->item_id = 10;
            $payitem->type = 1;
            $payitem->save();

            $payslip->increment('sum',$maskan);

        }


        // Calculate bime

        if($payslip->personel->bime == 1)
        {
            $payitem = new Payitem();

            $bime = $payslip->branch->bime * $payslip->day;
            $bime_final =  $payitem->price =   $bime / 100 * 7;


            $payitem->payslip_id = $payslip->id;
            $payitem->item_id = 11;
            $payitem->type = 3;
            $payitem->save();

            $payslip->decrement('sum',$bime_final);

        }


        // Calculate bime Takmili ( Persnel)

        if($payslip->personel->bimeTakmili == 1)
        {
            $payitem = new Payitem();

            $payitem->price =  $setting->takmili;

            $payitem->payslip_id = $payslip->id;
            $payitem->item_id = 5;
            $payitem->type = 3;
            $payitem->save();

            $payslip->decrement('sum',$setting->takmili);

        }

        // Calculate bime Takmili ( Persnel)

        if($payslip->personel->bimeTakmili == 1)
        {
            $payitem = new Payitem();

            $takmili_family = $setting->takmili_family * $payslip->personel->bimeTakmili_count;

            $payitem->price =  $takmili_family;

            $payitem->payslip_id = $payslip->id;
            $payitem->item_id = 6;
            $payitem->type = 3;
            $payitem->save();

            $payslip->decrement('sum',$takmili_family);

        }



        // Calculate farzand ( Persnel)

        if($payslip->personel->farzand == 1)
        {
            $payitem = new Payitem();


            $farzand = $setting->farzand * $payslip->personel->farzand_count;

            $payitem->price =  $farzand;

            $payitem->payslip_id = $payslip->id;
            $payitem->item_id = 12;
            $payitem->type = 1;

            if($payslip->personel->farzand_count > 0)
            {
                $payitem->save();
                $payslip->increment('sum',$farzand);

            }

        }


        // Calculate fogholadeh Shoghl

        if($payslip->personel->fogholade > 0)
        {
            $payitem = new Payitem();



            $payitem->price =  $payslip->personel->fogholade;

            $payitem->payslip_id = $payslip->id;
            $payitem->item_id = 13;
            $payitem->type = 1;

            if($payslip->personel->farzand_count > 0)
            {
                $payitem->save();
                $payslip->increment('sum',$farzand);

            }

        }



    }


}
