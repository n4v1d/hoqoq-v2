@extends('Admin.Master')
@section('title')
    لیست ماه های کاری
@endsection
@section('content')


    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <div class="card">
                <div class="card-header border-transparent">
                    <h3 class="card-title">لیست ماه های کاری</h3>

                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <form action="" method="post">

                        <div class="row container" style="margin-bottom: 30px">
                            <div class="col-lg-3">
                                <label for="">نام ماه</label>
                                <input type="text" name="name" class="form-control input-lg" id="" style="border: 1px solid black">
                            </div>
                            <div class="col-lg-3">
                                <label for=""> ماه</label>
                                <select name="month" id="" class="form-control input-lg">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                </select>
                            </div>
                            <div class="col-lg-3">
                                <label for=""> سال</label>
                                <select name="year" id="" class="form-control input-lg">
                                    <option>1398</option>
                                    <option>1399</option>
                                    <option>1400</option>

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
                                <th> نام ماه</th>
                                <th> ماه</th>
                                <th> سال</th>
                                <th> ویرایش</th>


                            </tr>
                            @foreach($months as $month)
                                <tr>
                                    <th>{{ $month->name }}</th>
                                    <th>{{ $month->month }}</th>
                                    <th>{{ $month->year }}</th>
                                    <td>
                                        <a href="/admin/branch/edit/{{$month->id}}" class="badge badge-info"> ویرایش</a>
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
