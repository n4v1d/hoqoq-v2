@extends('Admin.Master')
@section('title')
    لیست گروه های کاری
@endsection
@section('content')


    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <div class="card">
                <div class="card-header border-transparent">
                    <h3 class="card-title">لیست گروه های کاری</h3>

                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <form action="" method="post">

                        <div class="row container" style="margin-bottom: 30px">
                                <div class="col-lg-3">
                                    <label for="">نام شعبه</label>
                                    <input type="text" name="name" class="form-control input-lg" id="" style="border: 1px solid black">
                                </div>

                                <div class="col-lg-3">
                                    <label for="">  بیمه روزانه</label>
                                    <input type="text" name="bime" class="form-control input-lg" id="" style="border: 1px solid black">
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
                                <th> نام شعبه</th>
                                <th> بیمه روزانه</th>
                                <th> تعداد پرسنل</th>
                                <th> ویرایش</th>


                            </tr>
                            @foreach($branchs as $branch)
                                <tr>
                                    <th>{{ $branch->name }}</th>
                                    <th>{{ $branch->bime}}</th>
                                    <th>{{ $branch->personel->count() }}</th>

                                    <td>
                                        <a href="/admin/branch/edit/{{$branch->id}}" class="badge badge-info"> ویرایش</a>
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
