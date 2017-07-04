<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>JZW International</title>

    <!-- Fonts -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


</head>
<style>

    div.relative {
        position:relative;
        max-width:3000px;
        height:120px;
    }

    div.absolute {
        position:absolute;
        top:0px;
        right:0px;
        width:500px;
        height:140px;
        text-align:right;
        /*border-left-style:solid;*/
        /*border-left:1px solid gray;*/
    }
    nav1 {
        max-width:260px;
        margin:10px;
        padding:1em;
    }
    nav1 ul{
        list-style-type:none;
        padding:0;
    }

    nav1 ul a{
        text-decoration:none;
    }
</style>
<body>
    <div class="container relative" style="top:10px">
        <a href="{{ url('/') }}">
            <img src="{{asset('/images/JZW_stacked_full_color.jpg')}}" class="img-rounded" width="180px">
        </a>
        <div class="container absolute">
            <nav1>
                <ul style="line-height:25px">
                    <li>JZW International Development, LLC</li>
                    <li>4245 S.143rd Circle</li>
                    <li>Suite #5</li>
                    <li>Omaha, Nebraska 68137</li>
                    <li>(402) 933-8876</li>
                </ul>
            </nav1>
        </div>
    </div>
    <br>
    <br>


    <div class="container">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                {{--<div class="navbar-header">--}}
                    {{--<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">--}}
                        {{--<span class="sr-only">Toggle navigation</span>--}}
                        {{--<span class="icon-bar"></span>--}}
                        {{--<span class="icon-bar"></span>--}}
                        {{--<span class="icon-bar"></span>--}}
                    {{--</button>--}}
                {{--</div>--}}
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                    <ul class="nav navbar-nav">
                        <li class="active"><a href="{{ url('/home') }}">Home <span class="sr-only">(current)</span></a></li>
                        <li><a href="#">Service</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Products <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Roofing Nails</a></li>
                                <li><a href="#">Plastic Nails</a></li>
                                <li><a href="#">Staples</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">T-Shirts</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Services</a></li>
                            </ul>
                        </li>
                        <li><a href="#">About Us</a></li>

                            <form class="navbar-form navbar-right">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Purchase Order Number">
                                </div>
                                <button type="submit" class="btn btn-default">Track an Order</button>
                            </form>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Administrator</a></li>
                            <li><a href="{{ url('/register') }}">Register</a></li>
                        @else
                            <li><a href="{{ action('OrderController@index') }}">Orders</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

    </div>
    @yield('content')

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
