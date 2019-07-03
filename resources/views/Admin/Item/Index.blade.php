@extends('Admin.Master')
@section('title')
    ایتم های فیش حوقوی
@endsection
@section('content')


    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <div class="card">
                <div class="card-header border-transparent">
                    <h3 class="card-title">    ایتم های فیش حقوقی</h3>

                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <form action="" method="post">

                        <div class="row container" style="margin-bottom: 30px">
                            <div class="col-lg-3">
                                <label for="">نام ایتم</label>
                                <input type="text" name="name" class="form-control input-lg" id="" style="border: 1px solid black">
                            </div>
                            <div class="col-lg-3">
                                <label for="">نوع ایتم</label>
                                <select name="type" id="" class="form-control input-lg">
                                    <option value="1">اضافات - نقدی</option>
                                    <option value="2">اضافات - بن</option>
                                    <option value="3">کسورات - نقدی</option>
                                    <option value="4">کسورات - بن</option>
                                </select>
                            </div>


                                <div class="col-lg-3">
                                    <label for="">ثبت </label>
                                    <input type="submit"  value="ثبت" class="form-control input-lg btn  btn-info" id="" style="border: 1px solid black">
                                </div>
                            {{ csrf_field() }}
                            </div>
                        </form>

                        <table class="table m-0" >
                            <thead>
                            <tr>
                                <th> نام ایتم</th>
                                <th> نوع ایتم</th>
                                <th> ویرایش</th>


                            </tr>
                            @foreach($items as $item)
                                <tr>
                                    <th>{{ $item->name }}</th>
                                    <th>
                                        @if ($item->type == 1)
                                            اضافات - نقدی
                                        @endif

                                            @if ($item->type == 2)
                                                اضافات - بن
                                            @endif

                                            @if ($item->type == 3)
                                                کسورات - نقدی
                                            @endif


                                            @if ($item->type == 4)
                                                کسورات - بن
                                            @endif

                                    </th>
                                    <td>
                                        <a href="/admin/item/edit/{{$item->id}}" class="badge badge-info"> ویرایش</a>
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
