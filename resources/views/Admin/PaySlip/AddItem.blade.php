@extends('Admin.Master')
@section('title')
مدیریت ایتم ها
@endsection
@section('content')


    <!-- Main content -->
    <form action="" method="post">

        <section class="content">
            <div class="container-fluid">




                <div class="card" style="padding: 10px">
                    <div class="card-header border-transparent">
                        <h3 class="card-title"><h4> مدیریت ایتم های {{ $payslip->personel->name }} در {{ $payslip->month->name }}</h4></h3>

                    </div>
                    <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row" style="margin-bottom: 30px">
                                <div class="col-lg-4">
                                    <label for="">عنوان</label>
                                    <select name="item_id"  class="form-control">
                                        @foreach($items as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>


                                <div class="col-lg-4">
                                    <label for="">میزان</label>
                                    <input type="text" name="price" class="form-control input-lg">

                                </div>


                                <div class="col-lg-4">
                                    <label for=""></label>


                                    <button type="submit" class="btn btn-info" style="margin-bottom: 0px; margin-top: 30px" >ثبت</button>
                                    {{ @csrf_field() }}


                                </div>

                            </div>

                            <h4 style="margin-bottom: 30px">آیتم ها</h4>
                            <div class="row">
                                <table class="table m-0 text-center">
                                    <thead>
                                        <td><b>عنوان</b></td>
                                        <td><b>میزان</b></td>
                                        <td><b>نوع</b></td>
                                        <td><b>مدیریت</b></td>
                                    </thead>

                                        <tbody>
                                          @foreach($payslip->payitem->sortBy('type') as $item)
                                              <tr>
                                                  <td><b>{{ $item->item->name }}</b></td>
                                                  <td><b>{{ number_format( $item->price ) }}</b></td>
                                                  <td>
                                                      @if ($item->type == 1)
                                                          <a href="#" class="badge badge-success"> اضافه نقدی</a> </td>
                                                  @endif

                                                  @if ($item->type == 2)
                                                      <a href="#" class="badge badge-info"> اضافه بن</a> </td>
                                                  @endif

                                                  @if ($item->type == 3)
                                                      <a href="#" class="badge badge-danger"> کسر نقدی</a> </td>
                                                  @endif
                                                  @if ($item->type == 4)
                                                      <a href="#" class="badge badge-warning"> کسر بن</a> </td>
                                                  @endif

                                                  <td>
                                                      <a href="/admin/payslip/item/delete/{{$item->id}}" class="badge badge-danger">  حذف</a> </td>

                                                  </td>
                                              </tr>
                                          @endforeach
                                        </tbody>
                                </table>

                            </div>
                        </div>

                    </div>


                </div>



            </div>

            </div>


        </section>

    </form>
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'body' );
    </script>
@endsection
