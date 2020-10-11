<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Profile</title>
        
        
    </head>
    <body>
         @guest
            <li><a class="nav-link" href="{{ route('login') }}">{{ __('login') }}</a></li>
         @endguest
        
         @extends('layouts.profile')

         @section('title', 'My プロフィール')

         @section('content')
         
        <h1>My プロフィール</h1>
        
       
         
    </body>
</html>