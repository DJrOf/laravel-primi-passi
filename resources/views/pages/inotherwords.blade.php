<?php

$author= 'Daniel';


?>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            header {
                height: 100px;
                background-color: black;
                color: white;
                display: flex;
                justify-content: center;
            }

            a {
                color: white;
                margin-top: 30px;
                text-decoration: none;
            }
            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
            <header> 
            <a href="http://127.0.0.1:8002/">Home</a>
            </header>
    

        <div class="flex-center position-ref full-height">
           <h1>I like to press keys.</h1> <br>
           
        </div>
    </body>
</html>