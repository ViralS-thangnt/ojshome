<!-- left-bar -->
<aside class="left-side sidebar-offcanvas" style="min-height: 3190px;">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar" id="left-menu">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                @yield('avatar-user') 
                <!-- <img src="img/avatar3.png" class="img-circle" alt="User Image"> -->
            </div>
            <div class="pull-left info">
                @yield('user-welcome')
            </div>
        </div>
        
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li>
                <a>
                    <i class="fa fa-th"></i> <span>Menu chính</span>
                </a>
            </li>

            <li class="active">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Trang chủ</span>
                </a>
            </li>
        </ul>

        @yield('custom-menu')

        <ul class="sidebar-menu">
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-search"></i>
                    <span>Tìm kiếm</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#" style="margin-left: 10px;"><i class="fa fa-angle-double-right"></i> Bản thảo</a></li>
                    <li><a href="#" style="margin-left: 10px;"><i class="fa fa-angle-double-right"></i> Tác giả</a></li>
                    <li><a href="#" style="margin-left: 10px;"><i class="fa fa-angle-double-right"></i> Nhà phản biện</a></li>
                    <li><a href="#" style="margin-left: 10px;"><i class="fa fa-angle-double-right"></i> Biên tập viên</a></li>
                    <li><a href="#" style="margin-left: 10px;"><i class="fa fa-angle-double-right"></i> Bình luận viên chuyên trách</a></li>
                    <li><a href="#" style="margin-left: 10px;"><i class="fa fa-angle-double-right"></i> Tạp chí</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-bar-chart-o"></i>
                    <span>Thống kê</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#" style="margin-left: 10px;"><i class="fa fa-angle-double-right"></i> Bản thảo</a></li>
                    <li><a href="#" style="margin-left: 10px;"><i class="fa fa-angle-double-right"></i> Tác giả</a></li>
                    <li><a href="#" style="margin-left: 10px;"><i class="fa fa-angle-double-right"></i> Tạp chí</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-book"></i>
                    <span>Thông tin hỗ trợ</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#" style="margin-left: 10px;"><i class="fa fa-angle-double-right"></i> Hướng dẫn sử dụng </a></li>
                    <li><a href="#" style="margin-left: 10px;"><i class="fa fa-angle-double-right"></i> Cấu hình kỹ thuật</a></li>
                    <li><a href="#" style="margin-left: 10px;"><i class="fa fa-angle-double-right"></i> Chính sách tạp chí</a></li>
                </ul>
            </li>
        </ul>
    </section>
</aside>
            