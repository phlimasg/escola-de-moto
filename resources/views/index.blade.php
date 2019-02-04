@extends('layouts.site')
@section('content')


<!--Início do Slide-->    
<div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>          
        </ol>
    
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
    
          <div class="item active">
          <img src="{{asset('img/banner-1.jpg')}}" alt="Los Angeles" style="width:100%;">
            <div class="carousel-caption">
              <h3>Aulas 100% Práticas</h3>
              <p>Faça uma aula gratuita!</p>
              <button class="btn btn-quero">Tenho interesse!</button>
            </div>
          </div>
    
          <div class="item">
            <img src="{{asset('img/banner-2.jpg')}}" alt="Chicago" style="width:100%;">
            <div class="carousel-caption">
                <h3>Aulas 100% Práticas</h3>
                <p>Faça uma aula gratuita!</p>
                <button class="btn btn-quero">Tenho interesse!</button>
            </div>
          </div>
      
        </div>
    
        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div> 
<!--Fim do Slide-->   
<!--Cursos-->   
<div class="container-fluid">
  <h3><span class="glyphicon glyphicon-education"></span> Nossos Cursos</h3>
<div class="container">
    <div class="row">
        <div class="col-md-4">
          <div class="thumbnail">
            
              <img src="{{asset('/img/lights.jpg')}}" alt="Lights" style="width:100%">
              <div class="caption">
                <h3>Módulo 1</h3>
                <p>Lorem ipsum donec id elit non mi porta gravida at eget metus. <a href="">Saiba Mais!</a>  </p>
                <button class="btn btn-danger">Possuo Interesse</button>
              </div>
            
          </div>
        </div>
        <div class="col-md-4">
          <div class="thumbnail">
              <img src="{{asset('/img/fjords.jpg')}}" alt="Lights" style="width:100%">
              <div class="caption">
                <h3>Módulo 2</h3>
                <p>Lorem ipsum donec id elit non mi porta gravida at eget metus. <a href="">Saiba Mais!</a>  </p>
                <button class="btn btn-danger">Possuo Interesse</button>
              </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="thumbnail">
              <img src="{{asset('/img/nature.jpg')}}" alt="Lights" style="width:100%">
              <div class="caption">
                <h3>Módulo 3</h3>
                <p>Lorem ipsum donec id elit non mi porta gravida at eget metus. <a href="">Saiba Mais!</a>  </p>
                <button class="btn btn-danger">Possuo Interesse</button>
              </div>
          </div>
        </div>
      </div>
</div>
</div>
<!--Fim Cursos--> 

<!--Contato-->   
<div class="container-fluid">
  <h3><span class="glyphicon glyphicon-earphone"></span>  Contato</h3>
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <label for="name">Nome:</label>
        <input type="text" class="form-control">
          <div class="row">
            <div class="col-sm-7">
                <label for="mail">E-mail:</label>
                <input type="mail" class="form-control">
            </div>        
            <div class="col-sm-5">
                <label for="tel">Telefone</label>
                <input type="tel" class="form-control">
            </div>
            <div class="col-sm-12">
                <label for="contato">Descreva seu contato:</label>
                <textarea name="contato" id=""  rows="10" class="form-control"></textarea>
                <hr>
                <button class="btn btn-danger btn-lg">Enviar contato</button>
              </div>            
          </div>
      </div>
      <div class="col-sm-6">
        <h3>Telefones:</h3>
        <h3>(21) 99714-9715 - Elis</h3>
        <h3>(21) 97931-1400 - Mauricio</h3>
        <h3>(21) 3587-4364</h3>
        <a href="https://wa.me/5521985846784?text=Oi,%20Tenho%20interesse%20no%20curso%20de%20Mecânica%20de%20Motos." class="btn btn-success btn-lg"><img src="http://i0.wp.com/redballoon.com.br/wp-content/uploads/2016/06/whatsapp-logo-icone.png" alt="" width="25px">
        Contato pelo Whatsapp</a>
      </div>
    </div>
  </div>
</div>
<!--Fim Contato-->   

<!--Maps-->   
<div class="" name="map">
  <div class="container-fluid">
    <h3><span class="glyphicon glyphicon-map-marker"></span> Onde Estamos</h3>
  </div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3675.6837003072587!2d-43.12153078563515!3d-22.88813988502132!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9983c084313dd1%3A0xa50b27d8ce6abe9e!2sR.+Visc.+de+Sepetiba%2C+105+-+Centro%2C+Niter%C3%B3i+-+RJ%2C+24020-206!5e0!3m2!1spt-BR!2sbr!4v1543606787363" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
<!--Fim Maps--> 


@endsection
