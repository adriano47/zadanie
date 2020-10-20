<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <title>Document</title>
    <style>
        .wrapper{
            display: flex;

        }
        .container{

        }
    </style>
</head>
<body class="wrapper">
    <div class="sidebar">
        @yield('sidebar_content')
    </div>
    <div class="container">
        @yield('welcome_content')
        @yield('users_content')
        @yield('userEdited_content')
    </div>
</body>
</html>