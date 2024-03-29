<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <style>
        body{
            font-family: 'Ubuntu', sans-serif;
            margin:0;
            padding:0;
        }

        a, .link{
            text-decoration: none;
            color:#429DFF;
        }

        a:hover{
            text-decoration: underline;
        }

        button{
            background:#007BFF;;
            color:#fff;
            padding:5px 15px;
            font-size:18px;
            outline:none;
            border:none;
            border-radius:4px;
        }

        button:hover{
            opacity:0.7;
            cursor:pointer;
        }

        #banner,#footer{
            background:#007BFF;
            padding:1rem;
        }

        .highlight{
            color:#007BFF;
        }

        .content{
            width:100%;
            max-width:650px;
            margin:auto;
        }

        #banner .content #banner_logo{
            color: #fff;
        }

        #footer{
            color:#fff;
        }

        #footer #footer_preferences{
            color: #fff;
        }

        #footer #footer_preferences a, #footer #footer_preferences .link{
            color: #A3CFFF;
        }

        .small{
            font-size:12px;
        }

        #footer #social{
            text-align: center;
        }

        #footer #social .fa{
            font-size:28px;
            margin:5px;
        }

        #main .content{
            padding:2rem;
            background: #f7f7f7;
            border-left:1px solid #f4f4f4;
            border-right:1px solid #f4f4f4;
        }

        table{
            width:100%;
        }

        table thead tr{
            background: #007BFF;
            color: #fff;
        }

        table thead tr th{
            text-align: left;
            padding: 5px 15px;
        }

        table tbody tr td{
            padding: 5px 15px;
        }

        .blue{
            color:#007BFF;
        }

    </style>
    @yield('styling')
</head>
<body>
<div>
    <div id="email">
        @include('email.layout.banner')
        <div id="main">
            @yield('content')
        </div>
        @include('email.layout.footer')
    </div>
</div>
</body>
</html>