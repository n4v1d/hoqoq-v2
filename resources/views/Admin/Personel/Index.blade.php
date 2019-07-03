@extends('Admin.Master')
@section('title')
    لیست پرسنل
@endsection
@section('content')


    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <div class="card">
                <div class="card-header border-transparent">
                    <h3 class="card-title">لیست پرسنل</h3>

                    <div class="card-tools">
                         <a href="/admin/personel/new" class="btn btn-sm btn-info"><span style="margin: 10px"> پرسنل جدید </span></a>
                        
                        </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <div class="container-fluid" style="margin-bottom: 30px">
                            <form action="" method="get">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <label>نام پرسنل</label>
                                        <input type="text" name="name" class="form-control input-group input-lg">
                                    </div>

                                    <div class="col-lg-2">
                                        <label>شعبه</label>
                                        <select name="branch_id" class="form-control input-lg">
                                            <option value="0">همه شعب</option>
                                            @foreach($branchs as $branch)
                                                <option @if ($request->get('branch_id') == $branch->id)  selected @endif  value="{{ $branch->id }}">{{ $branch->name }}</option>
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
                                        <label>وضعیت  </label>
                                        <select name="status" class="form-control input-lg">
                                            <option value="0">همه وضعیت ها</option>
                                                <option @if ($request->get('status') == 1)  selected @endif value="1" >فعال</option>
                                                <option @if ($request->get('status') == 2)  selected @endif value="2" >غیر فعال</option>
                                        </select>
                                    </div>


                                    <div class="col-lg-2">
                                        <label> جستوجو </label>
                                        <input type="submit" class="btn btn-primary form-control " value="جستوجو" >
                                    </div>



                                </div>
                                {{ csrf_field() }}
                            </form>


                        </div>

                        <table class="table m-0 text-center  " >
                            <thead>
                            <tr>
                                <th> پرسنلی</th>
                                <th>نام</th>
                                <th>شعبه</th>
                                <th>گروه کاری</th>
                                <th>وضعیت</th>

                                <th>صدور فیش</th>
                                <th>لیست فیش ها</th>

                                <th>مدیریت</th>
                            </tr>
                            @foreach($personels as $personel)
                                <tr>
                                    <th>{{ $personel->id }}</th>
                                    <th>{{ $personel->name }}</th>
                                    <th>{{ $personel->branch->name}}</th>
                                    <th>{{ $personel->group->name }}</th>
                                        <td>
                                        @if ($personel->status == 1)
                                            <span class="badge badge-success">فعال</span>

                                        @endif

                                        @if ($personel->status == 2)
                                            <span class="badge badge-danger">غیر فعال</span>

                                        @endif
                                    </td>

                                    <td>
                                        <a href="/admin/payslip/new/{{$personel->id}}" class="badge badge-primary"> صدور فیش جدید</a>

                                    </td>


                                    <td>
                                        <a href="/admin/personel/view/{{$personel->id}}/episode/{{$personel->id}}" class="badge badge-info"> لیست فیش ها</a>
                                    </td>


                                    <td>
                                        <a href="/admin/personel/edit/{{$personel->id}}" class="badge badge-info"> ویرایش</a>
                                        <a href="/admin/personel/delete/{{$personel->id}}" class="badge badge-danger"> حذف</a>
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
