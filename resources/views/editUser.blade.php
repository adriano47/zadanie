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
            width: fit-content;
            width: -moz-fit-content;
            padding: 0 5px;
        }
    </style>
</head>
<body>
    <form class="form" action="/userEdited" method="post">
        {{csrf_field()}}
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
        <button class="form_button">Cancel</button>
    </form>
</body>
</html>