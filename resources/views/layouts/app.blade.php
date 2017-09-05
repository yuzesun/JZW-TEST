<!DOCTYPE html>
<html lang="en">
<head>
    <title>JZW International</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>--}}
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    {{--<link rel="stylesheet" href="animate.min.css">--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css"
          integrity="sha384-OHBBOqpYHNsIqQy8hL1U+8OXf9hH6QRxi0+EODezv82DfnZoV7qoHAZDwMwEJvSw"
          crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Allan' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Didact Gothic' rel='stylesheet'>
</head>

<style>

    .w3-bar  {
        padding: 4px;
    }

    p1 {
        font-family:"Didact Gothic";
        font-size:115%;
    }
    p10 {
        font-family:"Didact Gothic";
        font-size:20px;
    }
    h5 {
        font-family:"Didact Gothic";
        font-size:190%;
    }
    .button2 {
        padding:12px 20px;
    }
    h6 {
        font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif;
        font-size: 30px;
    }

    h7 {
        font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif;
        font-size: 28px;
    }

    p8 {
        font-family: 'Allan';
        font-size: 30px;
    }

    p9 {
        font-family: 'Allan';
        font-size: 28px;
    }

</style>

<body>

<div class="w3-top">
    <div class="w3-bar w3-white w3-card-2" id="myNavbar">
        @if (Auth::guest())
            <a href="{{ url('/') }}" style="padding: 16px;">
                <img src={{asset('/images/JZW_full_color.jpg')}} width="230" height="55">
            </a>
        @else
            <a href="{{ url('/') }}" style="padding: 16px;">
                <img src={{asset('/images/JZW_full_color.jpg')}} width="230" height="55">
            </a>
        @endif
        <!-- Right-sided navbar links -->
        <div class="w3-right w3-hide-small w3-padding">

            <div class="search-bar" style="float: left">
                {{ Form::open(['method'=> 'GET', 'action' => 'OrderController@searchGeneralOrder']) }}
                {{Form::input('text','q', null, ['placeholder' => 'Purchase order number...','class'=>'w3-bar-item w3-input w3-border form-control', 'autocomplete'=>'off'])}}
                <button type="submit" href="#" class="w3-bar-item w3-button"><i class="fa fa-search"></i></button>
                {{ Form::close() }}
            </div>
            <a href="/jzw_international/public/#products" class="w3-bar-item w3-button"><i class="fa fa-th"></i> Products</a>
            <a href="/jzw_international/public/#services" class="w3-bar-item w3-button"><i class="fa fa-truck"></i> Services</a>
            <a href="/jzw_international/public/#contact" class="w3-bar-item w3-button"><i class="fa fa-fax"></i> Contact</a>
            <a href="/jzw_international/public/#about" class="w3-bar-item w3-button"><i class="fa fa-book"></i> About</a>
            @if (Auth::guest())
                <a href="{{ url('/login') }}" class="w3-bar-item w3-button"><i class="fa fa-user"></i> Administrator</a>
            @else
                <a href="{{ action('OrderController@index') }}" class="w3-bar-item w3-button"><i class="fa fa-user"></i> Administrator</a>
                <a href="{{ url('/logout') }}" class="w3-bar-item w3-button"><i class="fa fa-sign-out"></i>Logout</a>
            @endif

        </div>
        <!-- Hide right-floated links on small screens and replace them with a menu icon -->

        <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
            <i class="fa fa-bars"></i>
        </a>
    </div>
</div>


<!-- Navbar on small screens -->
<nav1 class="w3-bar-block w3-white w3-top w3-hide-large w3-hide-medium"
     style="display:none;margin-top:58px;" id="navDemo">
    <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-center w3-padding-16"><i class="fa fa-close"></i> Close</a>
    <a href="/jzw_international/public/#track_order" onclick="w3_close()" class="w3-bar-item w3-button w3-center w3-padding-16"><i class="fa fa-search"></i> Track an Order</a>
    <a href="/jzw_international/public/#products" onclick="w3_close()" class="w3-bar-item w3-button w3-center w3-padding-16"><i class="fa fa-th"></i> Products</a>
    <a href="/jzw_international/public/#services" onclick="w3_close()" class="w3-bar-item w3-button w3-center w3-padding-16"><i class="fa fa-truck"></i> Services</a>
    <a href="/jzw_international/public/#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-center w3-padding-16"><i class="fa fa-fax"></i> Contact</a>
    <a href="/jzw_international/public/#about" onclick="w3_close()" class="w3-bar-item w3-button w3-center w3-padding-16"><i class="fa fa-book"></i> About</a>
</nav1>

<!-- Header -->
@yield('content')

<script>

    function w3_open() {
        document.getElementById("navDemo").style.display = "block";
    }

    function w3_close() {
        document.getElementById("navDemo").style.display = "none";
    }


</script>

</body>
</html>

