@extends('Admin.Master')
@section('title')
    فیش حقوقی جدید
@endsection
@section('content')


    <!-- Main content -->
    <form action="" method="post">

        <section class="content">
            <div class="container-fluid">




                <div class="card" style="padding: 10px">
                    <div class="card-header border-transparent">
                        <h3 class="card-title"> فیش حقوقی جدید</h3>

                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">

                            <div class="col-lg-3" style="margin-bottom: 30px">
                                <label>نام پرسنل</label>
                                <input class="form-control input-lg" type="text" name="name" disabled="disabled" value="{{ $personel->name }}">
                            </div>

                            <div class="col-lg-3">
                                <label>گروه کاری</label>
                                <input class="form-control input-lg" type="text" name="name" disabled="disabled" value="{{ $personel->group->name }}">
                            </div>

                            <div class="col-lg-3">
                                <label> شعبه</label>
                                <input class="form-control input-lg" type="text" name="name" disabled="disabled" value="{{ $personel->branch->name }}">
                            </div>


                            <div class="col-lg-3">
                                <label>ماه کاری</label>
                                <select class="form-control" name="month_id">
                                    @foreach($months as $month)
                                        <option value="{{ $month->id }}">{{ $month->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                        </div>



                        <div class="row" style="margin-bottom: 30px">

                            <div class="col-lg-3">
                                <label>روز کاری </label>
                                <input class="form-control input-lg" type="text" name="day"  >
                            </div>

                            <div class="col-lg-3">
                                <label> ساعت اضافه کاری</label>
                                <input class="form-control input-lg" type="text" name="hour" >
                            </div>

                            <div class="col-lg-3">
                                <label> دقیقه اضافه کاری</label>
                                <input class="form-control input-lg" type="text" name="min">
                            </div>


                        </div>

                    </div>
                    {{ @csrf_field() }}

                    <button type="submit" class="btn btn-info" style="margin-bottom: 0px; margin-top: 30px" >ثبت فیش جدید</button>


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
