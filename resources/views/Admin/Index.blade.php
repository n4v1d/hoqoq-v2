@extends('Admin.Master')
@section('title')
    نمای کلی
@endsection
@section('content')


    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Info boxes -->
            <div class="row">
                <div class="col-12 col-sm-6 col-md-2">
                    <div class="info-box">
                        <span class="info-box-icon bg-info elevation-1"><i class="fa fa-user"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">تعداد پرسنل</span>
                            <span class="info-box-number">
                  <b>{{ $personel->where('status',1)->count() }}</b>
                </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-12 col-sm-6 col-md-2">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-danger elevation-1"><i class="fa fa-home"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">شعب</span>
                            <span class="info-box-number">{{ $branch->count() }}</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->

                <!-- fix for small devices only -->
                <div class="clearfix hidden-md-up"></div>

                <div class="col-12 col-sm-6 col-md-2">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-success elevation-1"><i class="fa fa-money"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">تعداد فیش حقوقی</span>
                            <span class="info-box-number">{{ $payslip->count() }}</span>

                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-12 col-sm-6 col-md-2">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-warning elevation-1"><i class="fa fa-group"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">تعداد گروه کاری</span>
                            <span class="info-box-number">{{ $group->count() }}</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->



            <div class="card">
                <div class="card-header border-transparent">
                    <h3 class="card-title">آخرین آمار  ها</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-widget="collapse">
                            <i class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-widget="remove">
                            <i class="fa fa-times"></i>
                        </button>
                    </div>
                </div>





            <!-- /.card -->
        </div>

        </div>
    </section>
    <!-- /.content -->

    <!-- /.content-wrapper -->


@endsection
