<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!--this is font awsome cdn-->
    <script src="https://kit.fontawesome.com/4bc6c1d024.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    
    <link rel="stylesheet" type="text/css" href="{{ asset ('css/style.css') }}">
</head>
<body>

    <!--navigation bar start-->
<div class="container">
  <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light ">
    <div class="container">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#"><i class="material-icons" ></i>
<b>E.M.S</b></a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('home') }}"> <b><i class="fa fa-fw fa-home"></i>Home</b><span class="sr-only">(current)</span></a>
      </li>
 
     
      
                      @guest
                            <li class="nav-item">
                              <a class="nav-link" href="{{ route('login') }}"><b><i class="fa fa-fw fa-user"></i>{{ __('Login') }}</b></a>
                            </li>
                             <li class="nav-item">
                              <a class="nav-link" href="{{ route('about') }}"><b>{{ __('About') }}</b></a>
                            </li>
                            @if (Route::has(''))
                                <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}"><b>{{ __('Register') }}</b></a>
                                </li>
                            @endif
                        @else


                             <li class="nav-item">
                              <a class="nav-link" href="{{ route('employeeprofile',Auth::user()->id) }}"><b>{{ __('Profile') }}</b></a>
                            </li>
                            
                            <li class="nav-item dropdown">
                              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="Search here" aria-label="Recipient's username" aria-describedby="button-addon2">
  <div class="input-group-append">
    <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="fas fa-search"></i>
 </button>
  </div>
    </form>
  </div>
  </div>
</nav>
</div>
<!--navigation bar end-->
  <div class="sidebar">
 
  <a class="active" href="{{ route('make_daily_work_report') }}"><i class='fas fa-diagnoses'></i><b>Make daily work report</b></a>
  <a href="{{ route('show_daily_work_report') }}"><i class='fas fa-diagnoses'></i><b>Show daily work report</b></a>
  <a href="{{ route('make_equipment_cost_report') }}"><i class='far fa-images' ></i><b>Make Equipment cost report</b></a>
  <a href="{{ route('show_equipment_report') }}"><i class='far fa-images' ></i><b>Show Equipment cost report</b></a>
  <a href="{{ route('make_monthly_closing_report') }}"><i class='far fa-envelope' ></i><b>Make monthly closing report</b></a>
  <a href="{{ route('show_monthly_closing_report') }}"><i class='far fa-envelope' ></i><b>Show monthly closing report</b></a>
  <a href="#"><i class="fa fa-file-text"></i><b>Other</b></a>
</div>
 <div class="main">


<div class="container">
    
@yield('content')
  <!--body start here-->
  </div>
    <!--footer start-->
<footer>
<div class="card text-center">
  <div class="card-header">
    Featured
  </div>
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
  <div class="card-footer text-muted">
    2 days ago
  </div>
</div>
</footer>
<!--footer end-->
</div>
</body>
</html>