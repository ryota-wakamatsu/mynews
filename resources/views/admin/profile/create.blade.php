<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Profile-@yield('title')</title>
        
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
         </style>
        
        
    </head>
    <body>
        
         @extends('layouts.profile')

         @section('title', 'My プロフィール')

         @section('content')
         
        <h1>My プロフィール</h1>
        
       
         
    </body>
</html>