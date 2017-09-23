@include('backEnd.admin.include.topheader')
@yield('title')

<div id="wrapper">

<!-- Navigation -->
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
<div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand text-success" href="{{url('/dashboard')}}">Personal Portfolio </a>
</div>
<!-- /.navbar-header -->

@include('backEnd.admin.include.topmenu')
<!-- /.navbar-top-links -->

@include('backEnd.admin.include.sidebar')
<!-- /.navbar-static-side -->
</nav>

<div id="page-wrapper">

@yield('mainContent')

@include('backEnd.admin.include.footer')