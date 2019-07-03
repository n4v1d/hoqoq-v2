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
                                    <label for="">نام گروه</label>
                                    <input type="text" name="name" class="form-control input-lg" id="" style="border: 1px solid black">
                                </div>

                                <div class="col-lg-3">
                                    <label for=""> دستمزد روزانه</label>
                                    <input type="text" name="dayPrice" class="form-control input-lg" id="" style="border: 1px solid black">
                                </div>


                                <div class="col-lg-3">
                                    <label for=""> دقیقه اضافه کاری</label>
                                    <input type="text" name="minPrice" class="form-control input-lg" id="" style="border: 1px solid black">
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
                                <th> نام گروه</th>
                                <th>حقوق روزانه</th>
                                <th>اضافه کاری</th>
                                <th> تعداد پرسنل</th>
                                <th> ویرایش</th>
                                <th>حذف</th>


                            </tr>
                            @foreach($groups as $group)
                                <tr>
                                    <th>{{ $group->name }}</th>
                                    <th>{{ $group->dayPrice}}</th>
                                    <th>{{ $group->minPrice }}</th>
                                    <th>{{ $group->personel->count() }}</th>



                                    <td>
                                        <a href="/admin/personel/view/{{$group->id}}/episode/{{$group->id}}" class="badge badge-danger"> لیست فیش ها</a>
                                    </td>


                                    <td>
                                        <a href="/admin/personel/edit/{{$group->id}}" class="badge badge-info"> ویرایش</a>
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
