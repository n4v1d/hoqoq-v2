@extends('Admin.Master')
@section('title')
    لیست پرسنل
@endsection
@section('content')


    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <div class="card">
                <div class="card-header border-transparent">
                    <h3 class="card-title">جستوجوی پرسنل</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">

                    <div class="table-responsive">
                        <div class="container">
                            <form action="" method="post">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <label>نام پرسنل</label>
                                        <input type="text" name="name" class="form-control input-group input-lg">
                                    </div>

                                    <div class="col-lg-3">
                                        <label>شعبه</label>
                                        <select name="branch_id" class="form-control input-lg">
                                            <option value="0">همه شعب</option>
                                            @foreach($branchs as $branch)
                                                <option value="{{ $branch->id }}">{{ $branch->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-lg-3">
                                        <label>گروه کاری </label>
                                        <select name="group_id" class="form-control input-lg">
                                            <option value="0">همه گروه ها</option>
                                            @foreach($groups as $group)
                                                <option value="{{ $group->id }}" >{{ $group->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>




                                    <div class="col-lg-3">
                                        <label> جستوجو </label>
                                        <input type="submit" class="btn btn-primary form-control " value="جستوجو" >
                                    </div>



                                </div>
                                {{ csrf_field() }}
                            </form>
                            <br>
                        </div>
                    </div>
                </div>
            </div>


        </div>

        </div>
    </section>
    <!-- /.content -->

    <!-- /.content-wrapper -->


@endsection
