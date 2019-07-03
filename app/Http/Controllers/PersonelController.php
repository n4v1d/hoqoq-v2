<?php

namespace App\Http\Controllers;

use App\Bank;
use App\Branch;
use App\Group;
use App\Payslip;
use App\personel;
use Illuminate\Http\Request;

class PersonelController extends Controller
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


        if($request->has('name'))
        {
            $personels = personel::where('name', 'like' , '%'. $request->get('name') . '%');

            if($request->get('branch_id') != 0)
            {
                $personels->where('branch_id', '=' ,$request->get('branch_id'));
            }


            if($request->get('group_id') != 0)
            {
                $personels->where('group_id', '=' , $request->get('group_id'));
            }


            if($request->get('status') != 0)
            {
                $personels->where('status', '=' , $request->get('status'));
            }



           $personels =  $personels->OrderBy('id','desc')->get();

        }
        else
        {
            $personels = personel::OrderBy('id','desc')->paginate(15);

        }
        return view('Admin.Personel.Index' , compact('personels' , 'branchs','groups' , 'request'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $branchs = Branch::all();
        $groups = Group::all();
        $banks = Bank::all();

        return view('Admin.Personel.New' , compact('banks', 'branchs', 'groups'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $personel = new personel();

            $personel->name = $request->get('name');
            $personel->status = $request->get('status');
            $personel->branch_id = $request->get('branch_id');
            $personel->group_id = $request->get('group_id');
            $personel->bank_id = $request->get('bank_id');
            $personel->account = $request->get('account');
            $personel->card = $request->get('card');
            $personel->shaba = $request->get('shaba');
            $personel->phone = $request->get('phone');
            $personel->address = $request->get('address');
            $personel->bon = $request->get('bon');
            $personel->bime = $request->get('bime');
            $personel->farzand = $request->get('farzand');
            $personel->maskan = $request->get('maskan');
            $personel->tax = $request->get('tax');
            $personel->fogholade = $request->get('fogholade');
            $personel->farzand_count = $request->get('farzand_count');
            $personel->sso = $request->get('sso');
            $personel->sso_type = $request->get('sso_type');
            $personel->father = $request->get('father');
            $personel->bday = $request->get('bday');
            $personel->sex = $request->get('sex');
            $personel->from = $request->get('from');
            $personel->education = $request->get('education');
            $personel->national_id = $request->get('national_id');
            $personel->bimeTakmili = $request->get('bimeTakmili');
            $personel->bimeTakmili_count = $request->get('bimeTakmili_count');



            $personel->save();

        return redirect('/admin/personel');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\personel  $personel
     * @return \Illuminate\Http\Response
     */
    public function show(personel $personel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\personel  $personel
     * @return \Illuminate\Http\Response
     */
    public function edit(personel $personel)
    {
        //

        $branchs = Branch::all();
        $groups = Group::all();
        $banks = Bank::all();

        return view('Admin.Personel.Edit' , compact('banks', 'branchs', 'groups', 'personel'));    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\personel  $personel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, personel $personel)
    {
        //

            $personel->name = $request->get('name');
            $personel->status = $request->get('status');
            $personel->branch_id = $request->get('branch_id');
            $personel->group_id = $request->get('group_id');
            $personel->bank_id = $request->get('bank_id');
            $personel->account = $request->get('account');
            $personel->card = $request->get('card');
            $personel->shaba = $request->get('shaba');
            $personel->phone = $request->get('phone');
            $personel->address = $request->get('address');
            $personel->bon = $request->get('bon');
            $personel->bime = $request->get('bime');
            $personel->farzand = $request->get('farzand');
            $personel->maskan = $request->get('maskan');
            $personel->tax = $request->get('tax');
            $personel->fogholade = $request->get('fogholade');
            $personel->farzand_count = $request->get('farzand_count');
            $personel->sso = $request->get('sso');
            $personel->sso_type = $request->get('sso_type');
            $personel->father = $request->get('father');
            $personel->bday = $request->get('bday');
            $personel->sex = $request->get('sex');
            $personel->from = $request->get('from');
            $personel->education = $request->get('education');
            $personel->national_id = $request->get('national_id');

            $personel->bimeTakmili = $request->get('bimeTakmili');
            $personel->bimeTakmili_count = $request->get('bimeTakmili_count');

        $personel->save();

        return redirect('/admin/personel');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\personel  $personel
     * @return \Illuminate\Http\Response
     */
    public function destroy(personel $personel)
    {
        //

        $paySlip = Payslip::where('personel_id',$personel->id)->delete();

        $personel->delete();


        return redirect()->back();
    }

    public function Search()
    {
        $branchs = Branch::all();
        $groups = Group::all();

        return view('Admin.Personel.Search',compact('branchs','groups'));
    }
}
