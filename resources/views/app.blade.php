<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>JZW International</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

</head>
<body>
<div class="container">
    <a href="{{ action('OrderController@index') }}">Orders</a>
</div>
<hr>
<div class="container">
    @yield('content')
</div>
</body>
</html>
