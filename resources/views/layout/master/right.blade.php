<!-- right.blade.php -->
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            @yield('title')
            <small> @yield('title-extra') </small>
        </h1>

        @yield('navigation-link')
    </section>

    <!-- Main content -->
    <section class="content">

         @yield('content')

    </section>
   
</aside>

