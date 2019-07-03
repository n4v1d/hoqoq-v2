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
                            <input type="text" class="form-control" name="name" value="{{ $personel->name }}" id="exampleInputEmail1"  style="border: 1px solid black" >
                        </div>

                            <div class="row" style="margin-top: 30px">
                                <div class="col-md-3 col-lg-3">
                                    <div class="form-group">
                                        <label>وضعیت پرسنل </label>
                                        <select name="status" class="form-control " >
                                                <option @if ($personel->status == 1)  selected @endif value="1">فعال</option>
                                                <option @if ($personel->status == 2)  selected @endif value="2">غیر فعال</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="col-md-3 col-lg-3">
                                    <div class="form-group">
                                        <label>محل کار</label>
                                        <select name="branch_id" class="form-control " >
                                            @foreach($branchs as $branch)
                                                <option @if ($personel->branch_id == $branch->id)  selected @endif value="{{ $branch->id }}">{{ $branch->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-3 col-lg-3">
                                    <div class="form-group">
                                        <label>گروه کاری</label>
                                        <select name="group_id" class="form-control " >
                                            @foreach($groups as $group)
                                                <option  @if ($personel->group_id == $group->id)  selected @endif   value="{{ $group->id }}">{{ $group->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-3 col-lg-3">
                                    <div class="form-group">
                                        <label>بانک </label>
                                        <select name="bank_id" class="form-control ">
                                            @foreach($banks as $bank)
                                                <option @if ($personel->bank_id == $bank->id)  selected @endif  value="{{ $bank->id }}">{{ $bank->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>


                            <div class="row" style="margin-top: 30px">
                                <div class="col-lg-4 col-md-4">
                                    <label>شماره حساب</label>
                                    <input type="text" value="{{ $personel->account }}"  name="account" class="form-control input-lg" style="border: 1px solid black">
                                </div>

                                <div class="col-lg-4 col-md-4">
                                    <label>شماره کارت</label>
                                    <input type="text" name="card" value="{{ $personel->card }}" class="form-control input-lg" style="border: 1px solid black">
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <label>شماره شبا</label>
                                    <input type="text"  value="{{ $personel->shaba }}" name="shaba" class="form-control input-lg" style="border: 1px solid black">
                                </div>
                            </div>


                        <div class="row" style="margin-top: 30px">
                            <div class="col-lg-6 col-md-6">
                                <label>شماره تماس</label>
                                <input type="text" name="phone"   value="{{ $personel->phone }}"  class="form-control input-lg" style="border: 1px solid black">
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <label>ادرس </label>
                                <input type="text" name="address"  value="{{ $personel->address }}"   class="form-control input-lg" style="border: 1px solid black">
                            </div>

                        </div>



                        <div class="row" style="margin-top: 30px">
                            <div class="col-lg-2 col-md-2">
                                <div class="form-check">
                                    <label for="">بن</label>
                                    <select name="bon" id="" class="form-control input-lg">
                                        <option @if ($personel->bon == 1)  selected @endif   value="1">دارد</option>
                                        <option @if ($personel->bon == 2)  selected @endif  value="2">ندارد</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-2 col-md-2">
                                <div class="form-check">
                                    <label for="">بیمه</label>
                                    <select name="bime" id="" class="form-control input-lg">
                                        <option  @if ($personel->bime == 1)  selected @endif  value="1">دارد</option>
                                        <option  @if ($personel->bime == 2)  selected @endif  value="2">ندارد</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-2 col-md-2">
                                <div class="form-check">
                                    <label for="">بیمه تکمیلی</label>
                                    <select name="bimeTakmili" id="" class="form-control input-lg">
                                        <option  @if ($personel->bimeTakmili == 1)  selected @endif  value="1">دارد</option>
                                        <option  @if ($personel->bimeTakmili == 2)  selected @endif  value="2">ندارد</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-2 col-md-2">
                                <div class="form-check">
                                    <label for="">فرزند</label>
                                    <select name="farzand" id="" class="form-control input-lg">
                                        <option  @if ($personel->farzand == 1)  selected @endif  value="1">دارد</option>
                                        <option @if ($personel->farzand == 2)  selected @endif value="2">ندارد</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-2 col-md-2">
                                <div class="form-check">
                                    <label for="">مسکن</label>
                                    <select name="maskan" id="" class="form-control input-lg">
                                        <option  @if ($personel->maskan == 1)  selected @endif   value="1">دارد</option>
                                        <option @if ($personel->maskan == 2)  selected @endif   value="2">ندارد</option>
                                    </select>
                                </div>
                            </div>


                            <div class="col-lg-2 col-md-2">
                                <div class="form-check">
                                    <label for="">مالیات</label>
                                    <select name="tax" id="" class="form-control input-lg">
                                        <option  @if ($personel->tax == 1)  selected @endif  value="1">دارد</option>
                                        <option  @if ($personel->tax == 2)  selected @endif  value="2">ندارد</option>
                                    </select>
                                </div>
                            </div>

                        </div>




                        <div class="row" style="margin-top: 30px">
                            <div class="col-lg-2">
                                <label>فوق العاده شغل (ریال)</label>
                                <input type="text"  value="{{ $personel->fogholade }}"  name="fogholade" id="" class="form-control input-lg" value="0" >
                            </div>

                            <div class="col-lg-2">
                                <label>  تعداد فرزند</label>
                                <input type="text"  value="{{ $personel->farzand_count }}"  name="farzand_count" id="" class="form-control input-lg" value="0" >
                            </div>
                            <div class="col-lg-2">
                                <label>  تعداد تکفل بیمه تکمیلی</label>
                                <input type="text"  value="{{ $personel->bimeTakmili_count }}"  name="bimeTakmili_count" id="" class="form-control input-lg" value="0" >
                            </div>


                            <div class="col-lg-3">
                                <label>   شماره بیمه</label>
                                <input type="text" name="sso" id="" class="form-control input-lg" value="{{ $personel->sso }}" >
                            </div>


                            <div class="col-lg-3">
                                <label> سمت </label>
                                <input type="text" name="sso_type" id="" class="form-control input-lg"  value="{{ $personel->sso_type }}" >
                            </div>

                        </div>




                        <div class="row" style="margin-top: 30px">
                            <div class="col-lg-2">
                                <label>نام پدر</label>
                                <input type="text" name="father" id="" class="form-control input-lg"  value="{{ $personel->father }}" >
                            </div>

                            <div class="col-lg-2">
                                <label>جنسیت</label>
                                <select name="sex" id="" class="form-control input-lg">
                                    <option  @if ($personel->sex == 1)  selected @endif value="1">آقا</option>
                                    <option  @if ($personel->sex == 2)  selected @endif value="2">خانم</option>
                                </select>
                            </div>


                            <div class="col-lg-2">
                                <label>   سطح تحصیلات </label>
                                <select name="education" id="" class="form-control input-lg">
                                    <option @if ($personel->education == 1)  selected @endif  value="1">کمتر از دیپلم</option>
                                    <option @if ($personel->education == 2)  selected @endif  value="2">کاردانی</option>
                                    <option @if ($personel->education == 3)  selected @endif  value="3">کارشناسی</option>
                                    <option @if ($personel->education == 4)  selected @endif  value="4">کارشناسی ارشد</option>
                                    <option @if ($personel->education == 5)  selected @endif  value="5">دکترا</option>
                                </select>
                            </div>


                            <div class="col-lg-2">
                                <label> کد ملی </label>
                                <input type="text" name="national_id" id="" class="form-control input-lg"  value="{{ $personel->national_id }}">
                            </div>

                            <div class="col-lg-2">
                                <label> تاریخ تولد (1370/01/01)  </label>
                                <input type="text" name="bday" id="" class="form-control input-lg"  value="{{ $personel->bday }}" >
                            </div>
                            <div class="col-lg-2">
                                <label> صادره  </label>
                                <input type="text" name="from" id="" class="form-control input-lg"  value="{{ $personel->from }}" >
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
