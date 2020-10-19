<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users</title>
    <style>
        .user__table{
        }
        .user__table td{
            border: 1px solid black;
            padding: 2px;
            border-collapse: collapse;
        }
        .editUser{
            text-decoration: none;
            display: block;
            width: 115px;
            height: 25px;
            background: #4E9CAF;
            padding: 5px;
            text-align: center;
            border-radius: 5px;
            color: white;
            font-weight: bold;
            line-height: 25px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div>
            <table class="user__table">
                <thead>
                    <tr>
                        <td>Id</td>
                        <td>Name</td>
                        <td>Email</td>
                        <td>City</td>
                    </tr>
                </thead>
                <tbody>
                <tr>
                    <td>{{$user->id}} </td>
                    <td>{{$user->name}} </td>
                    <td>{{$user->email}} </td>
                    <td>{{$user->city}} </td>
                </tr>
                </tbody>
            </table>
        </div>
        <a href="{{url('/users/' . $user->id . '/edit')}}" class="editUser">Edit User</a>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>
</html>