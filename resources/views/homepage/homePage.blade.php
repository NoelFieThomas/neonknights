<html lang="en">
<head>
  <style>
    .topnav {
      background-color: #276;
      overflow: hidden;
    }
    .topnav a {
      float: left;
      color: #f2f2f2;
      text-align: center;
      padding: 17px 17px;
      text-decoration: none;
      font-size: 17px;
      font-family: 'Tahoma New', monospace;
      vertical-align:bottom ;
    }


    .logo {
  float: left;
}
/* ~~ Top Navigation Bar ~~ */

#navigation-container {
  width: 1200px;
  margin: 0 auto;
  height: 70px;
}

.navigation-bar {
  background-color: #352d2f;
  height: 70px;
  width: 100%;
}

.navigation-bar ul {
  padding: 0px;
  margin: 0px;
  text-align: center;
}

.navigation-bar li {
  list-style-type: none;
  padding: 0px;
  height: 24px;
  margin-top: 4px;
  margin-bottom: 4px;
  display: inline;
}

.navigation-bar li a {
  color: black;
  font-size: 16px;
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  text-decoration: none;
  line-height: 70px;
  padding: 5px 15px;
  opacity: 0.7;
}

#menu {
  float: right;
}

  .footer {
    left: 0;
    bottom: 0;
    width: 100%;
    background-color: rgb(10, 21, 43);
    color: white;
    text-align: center;
    position:static;
   bottom:0;
   height:60px;   /* Height of the footer */
  }

  body {
    display: block;
    margin: 0px;
}

img {
  width: 29%;
  /* object-fit: scale-down; */
}
  </style>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>



    <div class="navigation-bar">


      <div id="navigation-container">
  
        <img src="http://neonknightsrpg.com/assets/images/logo-neon-knights-header.png">
  
        <div class="topnav">
          <a href="/">Home</a>
          <a href="">Game manual</a>
          <a href="" style="float: right;">Login In/ SIGN UP</a>
        </div>

      </div>
       <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
  <br>
  <br>
  <br>
  <p>jflkajf;kjaklsdjf;kl</p>

  <div class="footer">
    <p>PRIVACY POLICY</p>
  </div>
</body>
</html>

   
    
