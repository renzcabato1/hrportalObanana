<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>{{ config('app.name', 'Laravel') }}</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="{{ asset('/images/icon.png')}}"/>
        <link rel="stylesheet" type="text/css" href="{{ asset('/loginCss/vendor/bootstrap/css/bootstrap.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('/loginCss/css/util.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('/loginCss/css/main.css')}}">
        <style>
            input[type=number]::-webkit-inner-spin-button, 
            input[type=number]::-webkit-outer-spin-button { 
                -webkit-appearance: none; 
                margin: 0; 
            }
            .loader {
                position: fixed;
                left: 0px;
                top: 0px;
                width: 100%;
                height: 100%;
                z-index: 9999;
                background: url("{{ asset('/images/3.gif')}}") 50% 50% no-repeat rgb(249,249,249) ;
                opacity: .8;
                background-size:50px 50px;
            }
        </style>
    </head>
<body>
    <div id = "myDiv" style="display:none;" class="loader">
	</div>
	@yield('content')
	<div id="dropDownSelect1"></div>
	<script type = "text/javascript">
		function show() {
			document.getElementById("myDiv").style.display="block";
		}
        // show();
	</script>
	<script src="{{ asset('/loginCss/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
	<script src="{{ asset('/loginCss/js/main.js')}}"></script>
</body>
</html>
