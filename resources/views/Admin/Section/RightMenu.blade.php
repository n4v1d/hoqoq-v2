<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">

        <div class="brand-text font-weight-light text-center">پنل مدیریت</div>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <div>
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="https://www.gravatar.com/avatar/52f0fbcbedee04a121cba8dad1174462?s=200&d=mm&r=g" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block"><h5 class="text-center">{{ Auth()->user()->name }}</h5></a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="">
                        <a href="/admin" class="nav-link active">
                            <i class="nav-icon fa fa-dashboard"></i>
                            <p>
                                خانه
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                    </li>




                    <li class="nav-header">مدیریت</li>


                    <li class="nav-item has-treeview">
                        <a href="/admin/personel" class="nav-link">
                            <i class="nav-icon fa fa-user"></i>
                            <p>
                                پرسنل
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="/admin/payslip" class="nav-link">
                            <i class="nav-icon fa fa-sliders"></i>
                            <p>
                                فیش های حقوقی
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                    </li>



                    <li class="nav-header">گزارشات</li>
                    <li class="nav-item has-treeview">
                        <a href="/admin/report" class="nav-link">
                            <i class="nav-icon fa fa-calendar"></i>
                            <p>
                                گزارشات
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                    </li>



                    <li class="nav-header">تنظیمات</li>

                    <li class="nav-item has-treeview">
                        <a href="/admin/group" class="nav-link">
                            <i class="nav-icon fa fa-group"></i>
                            <p>
                                 گروه کاری
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                    </li>


                    <li class="nav-item has-treeview">
                        <a href="/admin/branch" class="nav-link">
                            <i class="nav-icon fa fa-window-restore"></i>
                            <p>
                                شعب
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                    </li>


                    <li class="nav-item has-treeview">
                        <a href="/admin/bank" class="nav-link">
                            <i class="nav-icon fa fa-bank"></i>
                            <p>
                                بانک ها
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                    </li>

                    <li class="nav-item has-treeview">
                        <a href="/admin/item" class="nav-link">
                            <i class="nav-icon fa fa-list"></i>
                            <p>
                                آیتم ها
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                    </li>

                    <li class="nav-item has-treeview">
                        <a href="/admin/month" class="nav-link">
                            <i class="nav-icon fa fa-clock-o"></i>
                            <p>
                                 ماه کاری
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                    </li>






                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
    </div>
    <!-- /.sidebar -->
</aside>
