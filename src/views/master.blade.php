<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>
    <!-- compiled styles -->

    <link href="{{asset("packages\serverfireteam\panel\css\styles.css")}}" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>

</head>

<body class="@yield('bodyClass')">
    @yield('body')
    <!-- /#wrapper -->

    <!-- jQuery Version 1.11.0 -->
    <script src="{{asset("packages\serverfireteam\panel\js\jquery-1.11.0.js")}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset("packages\serverfireteam\panel\js/bootstrap.min.js")}}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{asset("packages\serverfireteam\panel\js/plugins/metisMenu/metisMenu.min.js")}}"></script>

 

    <!-- Custom Theme JavaScript -->
    <script src="{{asset("packages\serverfireteam\panel\js/sb-admin-2.js")}}"></script>

</body>

</html>

<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

