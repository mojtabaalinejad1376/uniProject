<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{ route('admin.index') }}" class="brand-link">
        <img src="{{ asset('adminAssets/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
             class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">پنل مدیریت</span>
    </a>
    <div class="sidebar" style="direction: ltr">
        <div style="direction: rtl">
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="https://www.gravatar.com/avatar/52f0fbcbedee04a121cba8dad1174462?s=200&d=mm&r=g"
                         class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">مجتبی علینژاد</a>
                </div>
            </div>

            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <li class="nav-item">
                        <a href="{{ route('admin.index') }}" class="nav-link active ">
                            <i class="nav-icon fa fa-dashboard"></i>
                            <p>
                                داشبورد
                            </p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-th"></i>
                            <p>
                                مدیریت اپلیکشین
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('admin.indexApp') }}" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>لیست اپلیکیشن</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.createApp') }}" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>ایجاد اپلیکیشن</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-list"></i>
                            <p>
                                مدیریت دسته بندی
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('admin.indexCategory') }}" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>لیست دسته بندی</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.createCategory') }}" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>افزودن دسته بندی</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-comment"></i>
                            <p>
                                مدیریت نظرات
                                <i class="fa fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('admin.indexComment') }}" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>لیست نظرات</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-money"></i>
                            <p>
                                مدیریت تراکنش
                                <i class="fa fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('admin.indexPayment') }}" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>لیست تراکنش</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-users"></i>
                            <p>
                                مدیریت کاربران
                                <i class="fa fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('admin.indexUser') }}" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>لیست کاربران</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('adminLogout') }}" class="nav-link">
                            <i class="nav-icon fa fa-power-off"></i>
                            <p>
                                خروج
                            </p>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</aside>
