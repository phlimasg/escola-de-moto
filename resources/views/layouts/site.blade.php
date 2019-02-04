<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>  
  <title>{{env('APP_NAME')}}</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span> 
            </button>
            <a class="navbar-brand" href="#"><img src="https://upload.wikimedia.org/wikipedia/commons/a/ab/Logo_TV_2015.png" class="logo" alt="" ></a>
          </div>
          <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#">Início</a></li>
              <li><a href="#">Cursos</a></li>
              <li><a href="#">Manuais Técnicos</a></li> 
              <li><a href="#">Contato</a></li> 
              <li><a href="#">Onde estamos</a></li> 
              <li><a href="#">Sobre a Escola</a></li>
            </ul>
            <!--<ul class="nav navbar-nav navbar-right">              
              <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>-->
          </div>
        </div>
    </nav>
    @yield('content')
    <div class="footer">
        <div align="center">
            <br><br><br>
          <span>
              Mj Soares Cursos Profissionalizantes
          </span>          
          <br><br><br><br>
            
        </div>
      </div>
</body>
</html>