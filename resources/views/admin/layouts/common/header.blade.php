<meta charset="utf-8" />
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>{{ isset($pageTitle) ? $pageTitle.' | ' : '' }} {{ config('app.name', 'Prescription') }}</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1" name="viewport" />
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="shortcut icon" type="image/png" href="{{ asset('images/favi.png') }}"/>

<!--begin::Web font -->
<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>

<script>
    WebFont.load({
        google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
        active: function() {
            sessionStorage.fonts = true;
        }
    });
</script>

<!--end::Web font -->

<!--begin::Global Theme Styles -->
<link href="{{asset('assets/global/css/vendors.bundle.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/global/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/global/css/custom.css')}}" rel="stylesheet" type="text/css" />
<link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<!--end::Global Theme Styles -->

<!--Custom Css start-->
<link href="{{asset('css/custom.css')}}" rel="stylesheet" type="text/css" />
<!--Custom Css end-->


<script src="{{ asset('assets/global/plugins/jquery.min.js') }}" type="text/javascript"></script>

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>

@stack('style')

