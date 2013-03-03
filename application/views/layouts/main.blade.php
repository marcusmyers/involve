<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Project X</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="iPads Signout Web App to see how many are available for the building">
    <meta name="author" content="Technology Department">

    <!-- Le styles -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/default.css">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>
<body>
    <div class="container-narrow">

      <div class="masthead">
        <ul class="nav nav-pills pull-right">
          <li><a href="/">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Contact</a></li>
          @if (Auth::user())
            <li><a href="/users/logout">Log Out</a></li>
            <li class="logged-in"><a href="/users/profile">Hi {{Auth::user()->fname}}!</a></li>
          @else
            <li><a href="/users/login">Log In</a></li>
          @endif
        </ul>
        <h3 class="muted">Guardian</h3>
      </div>

      <hr>
      
      @yield('content')

      <hr>
      <div class="footer">
        <p>&copy; Guardian 2013</p>
      </div>

    </div> <!-- /container -->
    @yield('modals')
    

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/js/jquery-1.9.0.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>

</body>

</html>