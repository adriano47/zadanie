@extends('layout.app')
@section('userEdit_content')
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
    <p>Make changes (or leave actual if necessary):</p>
    <form class="form" action='/userEdited' method="post">
        {{csrf_field()}}
        <input class="field" type="text" name="id" value="{{$user->id}}" hidden>
        <label>Name </label>
        <input class="field" type="text" name="name" value="{{$user->name}}">
        <label>Email </label>
        <input class="field" type="email" name="email" value="{{$user->email}}">
        <label>City </label>
        <input class="field" type="text" name="city" value="{{$user->city}}">
        <div>
            <input class="form_button" type="submit" value="Accept">
            <input class="form_button" type="reset" value="Reset">
        </div>
        <a class="back_button" href="/users">Cancel</a>
    </form>