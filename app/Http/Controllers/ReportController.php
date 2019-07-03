<?php

namespace App\Http\Controllers;

use App\Branch;
use App\Group;
use App\Item;
use App\Month;
use App\Payslip;
use App\personel;
use App\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Maatwebsite\Excel\Facades\Excel;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

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


        return view('Admin.Report.Index',compact('payslips' , 'branchs','months','groups', 'request'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function show(Report $report)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function edit(Report $report)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Report $report)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function destroy(Report $report)
    {
        //
    }


    public function excel(Request $request)
    {


        $payslips = new Payslip();

        if ($request->get('branch_id') != 0) {
            $payslips = Payslip::where('branch_id', 'like', '%' . $request->get('branch') . '%');

        }


        if ($request->get('month') != 0) {
            $payslips->where('month_id', '=', $request->get('month'));
        }


        if ($request->get('group') != 0) {
            $payslips->where('group_id', '=', $request->get('group'));
        }


        if ($request->get('status') != 0) {
            $payslips->where('status', '=', $request->get('status'));
        }


        $payslips = $payslips->OrderBy('id', 'desc')->get();

        return view('Admin.report.Excel',compact('payslips'));
    }



    public function bank(Request $request)
    {


        $payslips = new Payslip();

        if ($request->get('branch') != 0) {
            $payslips = Payslip::where('branch_id', 'like', '%' . $request->get('branch') . '%');

        }


        if ($request->get('month') != 0) {
            $payslips->where('month_id', '=', $request->get('month'));
        }


        if ($request->get('group') != 0) {
            $payslips->where('group_id', '=', $request->get('group'));
        }


        if ($request->get('status') != 0) {
            $payslips->where('status', '=', $request->get('status'));
        }


        $payslips = $payslips->OrderBy('id', 'desc')->get();


        $logs = $payslips;
        $content = "\n";
        $id = 1;
        foreach ($logs as $log) {
            $content .=  $log->sum.','.$log->personel->account .','.$id.','.$log->personel->name;
            $content .=  "\r\n";
            $id = $id + 1;
        }

        // file name that will be used in the download
        $fileName = "payslip.txt";

        // use headers in order to generate the download
        $headers = [
            'Content-type' => 'text/plain',
            'Content-Disposition' => sprintf('attachment; filename="%s"', $fileName),

        ];

        // make a response, with the content, a 200 response code and the headers
        return Response::make($content, 200, $headers);

    }






    public function tax(Request $request)
    {


        $payslips = new Payslip();

        $items = Item::all();
        if ($request->get('branch_id') != 0) {
            $payslips = Payslip::where('branch_id', 'like', '%' . $request->get('branch') . '%');

        }


        if ($request->get('month') != 0) {
            $payslips->where('month_id', '=', $request->get('month'));
        }


        if ($request->get('group') != 0) {
            $payslips->where('group_id', '=', $request->get('group'));
        }


        if ($request->get('status') != 0) {
            $payslips->where('status', '=', $request->get('status'));
        }


        $payslips = $payslips->OrderBy('id', 'desc')->with('payitem')->get();

        return view('Admin.Report.Tax',compact('payslips','items'));
    }

}
