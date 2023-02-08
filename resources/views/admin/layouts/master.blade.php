@include('admin.layouts.head')
<body>
@include('admin.layouts.aside')

<div id="right-panel" class="right-panel">
    @include('admin.layouts.right-header')

    @yield('breadcrumbs')

    <div class="content">
        <div class="animated fadeIn">
            <div class="row">
                @yield('content')
            </div>
        </div>
    </div>


    <div class="clearfix"></div>

</div><!-- /#right-panel -->

<!-- Right Panel -->

@include('admin.layouts.footer')


</body>
</html>
