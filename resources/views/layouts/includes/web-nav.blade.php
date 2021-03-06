<nav class="navbar navbar-default">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="{{ Route::currentRouteName() == 'home' ? 'active' : '' }}"><a href="{{ Route('home') }}">Home</a></li>
        <li class="{{ Route::currentRouteName() == 'about' ? 'active' : '' }}"><a href="{{ Route('about') }}">About Us</a></li>
        <li class="{{ Route::currentRouteName() == 'contact' ? 'active' : '' }}"><a href="{{ Route('contact') }}">Contact Us</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="{{ Route::currentRouteName() == 'login' ? 'active' : '' }}"><a href="{{ route('login') }}">Login</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
