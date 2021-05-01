<!DOCTYPE html>
<html>
<head>
    <title>laravel</title>
    <link rel="stylesheet" href="{{asset("css/bootstrap.min.css")}}">
        <style>
            body{
                text-align: right
            }
        th , tr {
            text-align: right;
        }
    </style>
</head>
<body dir="rtl">

    <div class="container">

        @yield('content')

    </div>

</body>
</html>
