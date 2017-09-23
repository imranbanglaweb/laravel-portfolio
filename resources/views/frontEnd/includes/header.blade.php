<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>@yield('title')</title>
      <!-- google fonts -->
      <link href='https://fonts.googleapis.com/css?family=Gentium+Basic:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
      <link href='https://fonts.googleapis.com/css?family=Yeseva+One' rel='stylesheet' type='text/css'>
      <!--        <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">-->
      <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
      <link rel="stylesheet" href="{{asset('public/frontEnd/css/font-awesome.min.css')}}">
      <link rel="stylesheet" href="{{asset('public/frontEnd/css/bootstrap.min.css')}}">
       <link rel="stylesheet" href="{{ asset('public/frontEnd/css/prettyPhoto.css')}}" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />
      <link href="{{asset('public/frontEnd/style.css')}}" rel="stylesheet">
      <link href="{{asset('public/frontEnd/css/responsive.css')}}" rel="stylesheet">
      <link href="{{asset('public/frontEnd/css/normalize.css')}}" rel="stylesheet">
      <link href="{{asset('public/frontEnd/css/main.css')}}" rel="stylesheet">

      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
      @include('frontEnd.includes.favicon')
      <link href="{{asset('public/frontEnd/css/uikit.min.css')}}" rel="stylesheet">
       <link href="{{asset('public/frontEnd/style.css')}}" rel="stylesheet">
   </head>