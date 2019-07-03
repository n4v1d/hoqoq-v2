@extends('Admin.Master')
@section('title')
پرسنل جدید
@endsection
@section('content')


    <!-- Main content -->
    <form action="" method="post">

        <section class="content">
            <div class="container-fluid">




                <div class="card" style="padding: 10px">
                    <div class="card-header border-transparent">
                        <h3 class="card-title"> پرسنل جدید</h3>


                    </div>
                    <!-- /.card-header -->
                    <div class="card-body ">
                        <div class="form-group">
                            <label for="exampleInputEmail1"> نام پرسنل</label>
                            <input type="text" class="form-control" name="name" id="exampleInputEmail1"  style="border: 1px solid black" >
                        </div>

                            <div class="row" style="margin-top: 30px">
                                <div class="col-md-3 col-lg-3">
                                    <div class="form-group">
                                        <label>وضعیت پرسنل </label>
                                        <select name="status" class="form-control " >
                                                <option value="1">فعال</option>
                                                <option value="2">غیر فعال</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="col-md-3 col-lg-3">
                                    <div class="form-group">
                                        <label>محل کار</label>
                                        <select name="branch_id" class="form-control " >
                                            @foreach($branchs as $branch)
                                                <option value="{{ $branch->id }}">{{ $branch->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-3 col-lg-3">
                                    <div class="form-group">
                                        <label>گروه کاری</label>
                                        <select name="group_id" class="form-control " >
                                            @foreach($groups as $group)
                                                <option value="{{ $group->id }}">{{ $group->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-3 col-lg-3">
                                    <div class="form-group">
                                        <label>بانک </label>
                                        <select name="bank_id" class="form-control ">
                                            @foreach($banks as $bank)
                                                <option value="{{ $bank->id }}">{{ $bank->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>


                            <div class="row" style="margin-top: 30px">
                                <div class="col-lg-4 col-md-4">
                                    <label>شماره حساب</label>
                                    <input type="text" name="account" class="form-control input-lg" style="border: 1px solid black">
                                </div>

                                <div class="col-lg-4 col-md-4">
                                    <label>شماره کارت</label>
                                    <input type="text" name="card" class="form-control input-lg" style="border: 1px solid black">
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <label>شماره شبا</label>
                                    <input type="text" name="shaba" class="form-control input-lg" style="border: 1px solid black">
                                </div>
                            </div>

                        <div class="row" style="margin-top: 30px">
                            <div class="col-lg-6 col-md-6">
                                <label>شماره تماس</label>
                                <input type="text" name="phone" class="form-control input-lg" style="border: 1px solid black">
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <label>ادرس </label>
                                <input type="text" name="address" class="form-control input-lg" style="border: 1px solid black">
                            </div>

                        </div>



                        <div class="row" style="margin-top: 30px">
                            <div class="col-lg-2 col-md-2">
                                <div class="form-check">
                                    <label for="">بن</label>
                                    <select name="bon" id="" class="form-control input-lg">
                                        <option value="1">دارد</option>
                                        <option value="2">ندارد</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-2 col-md-2">
                                <div class="form-check">
                                    <label for="">بیمه</label>
                                    <select name="bime" id="" class="form-control input-lg">
                                        <option value="1">دارد</option>
                                        <option value="2">ندارد</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-2 col-md-2">
                                <div class="form-check">
                                    <label for="">فرزند</label>
                                    <select name="farzand" id="" class="form-control input-lg">
                                        <option value="1">دارد</option>
                                        <option value="2">ندارد</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-2 col-md-2">
                                <div class="form-check">
                                    <label for="">مسکن</label>
                                    <select name="maskan" id="" class="form-control input-lg">
                                        <option value="1">دارد</option>
                                        <option value="2">ندارد</option>
                                    </select>
                                </div>
                            </div>


                            <div class="col-lg-2 col-md-2">
                                <div class="form-check">
                                    <label for="">مالیات</label>
                                    <select name="tax" id="" class="form-control input-lg">
                                        <option value="1">دارد</option>
                                        <option value="2">ندارد</option>
                                    </select>
                                </div>
                            </div>

                        </div>




                        <div class="row" style="margin-top: 30px">
                            <div class="col-lg-3">
                                <label>فوق العاده شغل (ریال)</label>
                                <input type="text" name="fogholade" id="" class="form-control input-lg" value="0" >
                            </div>

                            <div class="col-lg-3">
                                <label>  تعداد فرزند</label>
                                <input type="text" name="farzand_count" id="" class="form-control input-lg" value="0" >
                            </div>

                        </div>



                        <div class="col-md-12">
                            {{ @csrf_field() }}
                            <input name="image" value="0" type="hidden"></div>

                    </div>

                    <button type="submit" class="btn btn-info" style="margin-bottom: 0px; margin-top: 30px" >ثبت پرسنل جدید</button>


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
