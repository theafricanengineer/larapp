<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<title>Dogs DB</title>
	<link rel="stylesheet" href="{{asset('bootstrap.min.css')}}">
  </head>
  <body>
    <div class="container">
      <div class="page-header">
      	@yield('header')
      </div>
      @if(Session::has('message'))
        <div class="alert alert-success">
          {{Session::get('message')}}
        </div>
      @endif
    @yield('content')
    </div>
  </body>
</html>