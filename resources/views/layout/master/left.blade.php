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
        {!! Form::menu_item('Menu chính',
                                [],
                                [],
                                ICON_MENU_SPEED_DIAL,
                                0
                            ) !!}

        {!! Form::menu_item('Trang chủ',
                                [],
                                [],
                                ICON_MENU_DASHBOARD,
                                1,
                                url('admin')
                            ) !!}

        @yield('custom-menu')

        {!! Form::menu_item('Tìm kiếm',
                                ['Bản thảo', 'Tác giả', 'Nhà phản biện', 'Biên tập viên', 'Bình luận viên chuyên trách', 'Tạp chí'],
                                ['#', '#', '#', '#', '#', '#'],
                                ICON_MENU_SEARCH,
                                1
                            ) !!}

        {!! Form::menu_item('Thống kê',
                                ['Bản thảo', 'Tác giả', 'Tạp chí'],
                                ['#', '#', '#'],
                                ICON_MENU_CHART,
                                1
                            ) !!}

        {!! Form::menu_item('Thông tin hỗ trợ',
                                ['Hướng dẫn sử dụng', 'Cấu hình kỹ thuật', 'Chính sách tạp chí'],
                                ['#', '#', '#'],
                                ICON_MENU_BOOK,
                                1
                            ) !!}                    
    </section>
</aside>
            