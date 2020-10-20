<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit User</title>
    <style>
        .form{
            display: flex;
            flex-flow: column nowrap;
        }
        .field{
            width: 200px;
        }
        .form_button{
            cursor: pointer;
            margin: 5px 0;
            padding: 5px;
            text-decoration: none;
            width: -moz-fit-content;
            width: fit-content;
            background: #4E9CAF;
            text-align: center;
            border-radius: 5px;
            border: none;
            color: white;
            font-weight: bold;
        }
        .back_button{
            cursor: pointer;
            margin: 5px 0;
            padding: 5px;
            display: inline-block;
            text-decoration: none;
            width: -moz-fit-content;
            width: fit-content;
            background: #4E9CAF;
            text-align: center;
            border-radius: 5px;
            color: white;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <form class="form" action='/userEdited' method="post">
        {{csrf_field()}}
        <input class="field" type="text" name="id" value="{{$user->id}}" hidden>
        <label>Name </label>
        <input class="field" type="text" name="name">
        <label>Email </label>
        <input class="field" type="email" name="email">
        <label>City </label>
        <input class="field" type="text" name="city">
        <div>
            <input class="form_button" type="submit" value="Accept">
            <input class="form_button" type="reset" value="Reset">
        </div>
        <a class="back_button" href="/users">Cancel</a>
    </form>
</body>
</html>