<!-- Header -->

<header class="header">
    <a href="index.html" class="logo">
        <!-- Add the class icon to your logo image or logo icon to add the margining -->
        Admin Page
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </a>

        <span class="title-admin">
            @yield('title-page-admin')
            <!-- Hệ thống gửi bài và phản biện trực tuyến -->
            <!-- Journal Open Source -->
        </span>

        

        <div class="navbar-right">
            <ul class="nav navbar-nav">

            	<li>
	            	<span class="search-bar-admin">
			        	<form class="search-form" action="#" method="get" >
							<div class="input-group">
							<input type="text" name="search" class="form-control" placeholder="Search">
							<div class="input-group-btn">
							     <button type="submit" name="submit" class="btn btn-primary">
							          <i class="fa fa-search"></i>         
							     </button>                          
							</div>
			                               
							</div><!-- /.input-group -->        
						</form>
			        </span>
                </li>

                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="glyphicon glyphicon-user"></i>

                        <span> @yield('username') <i class="caret"></i></span>
                    </a>

                    <ul class="dropdown-menu">

                        <!-- User image -->
                        <li class="user-header bg-light-blue">
                            <!-- <img src="img/avatar3.png" class="img-circle" alt="User Image"> -->
                            @yield('user-avatar-header')
                            <p>
                                @yield('username-info')
                                <small>@yield('username-extra-info')</small>

                            </p>
                        </li><!-- end User Image -->

                        <!-- Menu Body -->
                        <li class="user-body">
                            <div class="col-xs-12 text-center">
                                <a href="#">Change Password</a>
                            </div>
                        </li><!-- end User body -->

                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="#" class="btn btn-default btn-flat">Profile</a>
                            </div>
                            <div class="pull-right">
                                <a href="#" class="btn btn-default btn-flat">Log out</a>
                            </div>
                        </li><!-- end Footer -->

                    </ul><!-- end dropdown-menu -->
                </li><!-- end dropdown user user-menu -->
            </ul><!-- end nav navbar-nav -->

        </div><!-- end navbar-right -->

    </nav><!-- end navbar navbar-static-top -->
</header>