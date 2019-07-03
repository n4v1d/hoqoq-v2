@extends('Admin.Master')
@section('title')
    فیش های حقوقی
@endsection
@section('content')


    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <div class="card">
                <div class="card-header border-transparent">
                    <h3 class="card-title">فیش های حقوقی</h3>

                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <div class="table-responsive">

                        <div class="container-fluid" style="margin-bottom: 30px">
                            <form action="" method="get">
                                <div class="row text-center" style="margin-bottom: 30px">


                                    <div class="col-lg-2">
                                        <label>شعبه</label>
                                        <select name="branch_id" class="form-control input-lg">
                                            @foreach($branchs as $branch)
                                                <option @if ($request->get('branch_id') == $branch->id)  selected @endif  value="{{ $branch->id }}">{{ $branch->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-lg-2">
                                        <label>ماه</label>
                                        <select name="month_id" class="form-control input-lg">
                                            <option value="0">همه ماه ها</option>
                                            @foreach($months as $month)
                                                <option @if ($request->get('month_id') == $month->id)  selected @endif  value="{{ $month->id }}">{{ $month->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-lg-2">
                                        <label>گروه کاری </label>
                                        <select name="group_id" class="form-control input-lg">
                                            <option value="0">همه گروه ها</option>
                                            @foreach($groups as $group)
                                                <option @if ($request->get('group_id') == $group->id)  selected @endif value="{{ $group->id }}" >{{ $group->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>





                                    <div class="col-lg-2">
                                        <label> جستوجو </label>
                                        <input type="submit" class="btn btn-primary form-control " value="جستوجو" >
                                    </div>

                                    <div class="col-lg-1">
                                        <label>  اکسل </label>
                                        <a href="/admin/report/excel?month={{$request->month_id}}&branch={{$request->branch_id}}&group={{$request->group_id}}"> <input type="button" class="btn btn-outline-success form-control " value=" اکسل" ></a>
                                    </div>

                                    <div class="col-lg-1">
                                        <label>  بانک </label>
                                        <a href="/admin/report/bank?month={{$request->month_id}}&branch={{$request->branch_id}}&group={{$request->group_id}}"> <input type="button" class="btn btn-outline-primary form-control " value=" بانک" ></a>
                                    </div>
                                    <div class="col-lg-1">
                                        <label>  مالیات </label>
                                        <a href="/admin/report/tax?month={{$request->month_id}}&branch={{$request->branch_id}}&group={{$request->group_id}}"> <input type="button" class="btn btn-outline-info form-control " value=" مالیات" ></a>
                                    </div>
                                    <div class="col-lg-1">
                                        <label>  تامین اجتماعی </label>
                                        <a href="/admin/report/sso?month={{$request->month_id}}&branch={{$request->branch_id}}&group={{$request->group_id}}"> <input type="button" class="btn btn-outline-dark form-control " value=" تامین اجتماعی" ></a>
                                    </div>



                                </div>
                                {{ csrf_field() }}
                            </form>


                            <table class="table m-0 text-center " >
                                <thead>
                                <tr>
                                    <th> نام </th>
                                    <th> شعبه </th>
                                    <th>  گروه کاری</th>
                                    <th>  ماه کاری</th>
                                    <th>دریافتی نقدی</th>
                                    <th>دریافتی بن</th>
                                    <th> کسورات / اضافات</th>
                                    <th> ویرایش</th>


                                </tr>
                                @foreach($payslips as $payslip)
                                    <tr>
                                        <th>{{ $payslip->personel->name }}</th>
                                        <th>{{ $payslip->branch->name }}</th>
                                        <th>{{ $payslip->month->name }}</th>
                                        <th>{{ $payslip->group->name }}</th>
                                        <th>{{ number_format($payslip->sum )}}</th>
                                        <th>{{ number_format($payslip->bon) }}</th>

                                        <td>
                                            <a href="/admin/payslip/item/{{$payslip->id}}" class="badge badge-success"> مشاهده</a>
                                        </td>

                                        <td>
                                            <a href="/admin/payslip/edit/{{$payslip->id}}" class="badge badge-info"> ویرایش</a>
                                            <a href="/admin/payslip/delete/{{$payslip->id}}" class="badge badge-danger"> حذف</a>
                                        </td>


                                    </tr>
                                @endforeach

                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                </div>


            </div>

        </div>
    </section>
    <!-- /.content -->

    <!-- /.content-wrapper -->


@endsection
