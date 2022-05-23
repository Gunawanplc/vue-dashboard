<!DOCTYPE html>

<html lang="en">

<head>
    @include('template.head')
    <title>Laravel | VueJs</title>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper" id="app">
        @include('template.navbar')
        @include('template.left-sidebar')


        <div class="content-wrapper">

            <!-- main content -->
            <div class="content">
                {{-- <div class="container-fluid"> --}}
                    {{-- <example-component></example-component> --}}
                    <router-view></router-view>
                    {{--
                </div> --}}
            </div>

        </div>


        <!-- footer -->
        @include('template.footer')
        <!-- /.footer -->
    </div>

    <!-- scriptjs -->
    @include('template.script')
    <!-- /.scriptjs -->
</body>

</html>