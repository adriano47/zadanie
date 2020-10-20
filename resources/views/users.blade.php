@extends('layout.app')

@section('users_content')
    <style>
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
                @foreach($users as $user)
                    <tr>
                        <td>{{$user->id}} </td>
                        <td>{{$user->name}} </td>
                        <td>{{$user->email}} </td>
                        <td>{{$user->city}} </td>
                        <td><a href="{{url('/users/' . $user->id . '/edit')}}" class="editUser">Edit User</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
