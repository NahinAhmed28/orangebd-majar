<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <link rel="shortcut icon" href="{{asset('assets/icon/fismall.png')}}" />

    @include('admin.layouts.common.header')
    @stack('styles')

    <style>
        .dropdown-menu.show{
            min-width: auto !important;
        }
    </style>


</head>
<body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">

<div class="m-grid m-grid--hor m-grid--root m-page">

@include('admin.layouts.common.topbar')

<!-- begin::Body -->
    <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">

        <!-- BEGIN: Left Aside -->
        @include('admin.layouts.common.sidebar')

        <div class="m-grid__item m-grid__item--fluid m-wrapper">

            <div class="m-content">

                @yield('content')

            </div>
        </div>
    </div>

    <!-- end:: Body -->

    @include('admin.layouts.common.footer')

</div>

<!-- begin::Scroll Top -->
<div id="m_scroll_top" class="m-scroll-top">
    <i class="la la-arrow-up"></i>
</div>

<!-- end::Scroll Top -->

<!--begin::Global Theme Bundle -->
<script src="{{asset('assets/global/scripts/vendors.bundle.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/scripts/scripts.bundle.js')}}" type="text/javascript"></script>

<script src="{{ asset('assets/global/scripts/custom.js') }}" type="text/javascript"></script>

<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js" type="text/javascript"></script>

<!--end::Global Theme Bundle -->

<script>
    var baseUrl = '{!! url('/') !!}/';
    $(".summernote").on("summernote.change", function (e) {
        $('.note-editing-area table').css({'border': '1px solid rgb(148 147 151)', 'border-spacing':'0'});
        $('.note-editing-area table td').css({'border': '1px solid rgb(148 147 151)', 'border-spacing':'0'});
    });

</script>

@stack('scripts')

<script>

    $(".m_selectpicker").selectpicker();

    jQuery.validator.addMethod("email_not_required", function(value, element) {

        if (value.length > 0){
            if (/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(value)) {
                return true;
            } else {
                return false;
            }
        }else{
            return true;
        }

    }, "Please enter a valid Email.");


    jQuery.validator.addMethod("noSpace", function(value, element) {
        return value.indexOf(" ") < 0 && value != "";
    }, "No space please and don't leave it empty");

    toastr.options = {
        "closeButton": false,
        "debug": false,
        "newestOnTop": true,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "3000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }

    @if(Session::has('success'))
        Command: toastr["success"]("{{ Session::get('success') }}", "Success");
    @endif
            @if(Session::has('error'))
        Command: toastr["error"]("{{ Session::get('error') }}", "Error!");
    @endif
</script>



</body>
</html>
