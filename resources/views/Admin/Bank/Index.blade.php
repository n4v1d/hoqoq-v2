@extends('Admin.Master')
@section('title')
     لیست بانکها
@endsection
@section('content')


    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <div class="card">
                <div class="card-header border-transparent">
                    <h3 class="card-title">لیست بانکها</h3>

                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <form action="" method="post">

                        <div class="row container" style="margin-bottom: 30px">
                            <div class="col-lg-3">
                                <label for="">نام بانک</label>
                                <input type="text" name="name" class="form-control input-lg" id="" style="border: 1px solid black">
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
                                <th> نام بانک</th>
                                <th> ویرایش</th>


                            </tr>
                            @foreach($banks as $bank)
                                <tr>
                                    <th>{{ $bank->name }}</th>

                                    <td>
                                        <a href="/admin/bank/edit/{{$bank->id}}" class="badge badge-info"> ویرایش</a>
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
