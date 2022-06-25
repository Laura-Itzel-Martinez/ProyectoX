@extends('layouts.app')
@section('content')
<br><br><br>
  <div class="container-fuid">
    <div class="row">
      <div class="col">
        <div class="card">
          <div class="card-body">
            <span style="font-family: 'Cormorant Garamond', serif;"><h1 class="text-center">En CyberNahualt encontraras cursos para toda la famila acerca 
              del idioma Nahualt
            </h1></span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fuid">
    <div class="row">
      <div class="col">
        <div class="card bg-dark ">
          <img class="card-img" src="{{asset('img/fondo10.png')}}" alt="">
          <div class="card-img-overlay">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid:100% mt-5">
    <div class="row">
      <div class="col">
        <center><h2 class="display-4" style="font-family: 'Teko', sans-serif;">¿Porque hablar Nahualt?</h2></center>
         <hr>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="card-deck">
      <div class="card">
        <img class="card-img-top" src="{{asset('img/foto4.png')}}" height="230" alt="">
        <div class="card-body">
          <p class="card-text"><h5 class="text-justify">
              En el náhuatl, en la lengua y en la cosmovisión, el ser humano no es el 
              centro, sino que es parte de un todo, como son los animales, las plantas, todos los seres vivos.
            Entonces cuando alguien aprende náhuatl, encuentra una oportunidad para resignificar su mundo y 
            su propia persona”</h5>
          </p>
          <p class="card-text"><small class="text-muted">Sergio Sevilla</small></p>
        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="{{asset('img/foto.jpg')}}" alt="">
        <div class="card-body">
          <p class="card-text"><h5 class="text-justify">
              Preservar las lenguas es indispensable ya que actualmente, al menos el 43% 
              de las 6000 lenguas que se estima que se hablan en el mundo están en  peligro de extinción y se
              calcula  que cada dos semanas desaparece una lengua que se lleva consigo todo un patrimonio 
              cultural e intelectual.</h5>
          </p>
          <p class="card-text"><small class="text-muted">ONU</small></p>
        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="{{asset('img/foto3.jpg')}}" alt="">
        <div class="card-body">
          <p class="card-text"><h5 class="text-justify">
                  Por el interes en aprender náhuatl porque cree que es muy importante que 
                  en México las personas puedan tener un acercamiento con las lenguas indígenas que dice, 
                  deben ser motivo de orgullo.</h5>
          </p>
          <p class="card-text"><small class="text-muted">Flor es estudiante de Letras Hispánicas</small></p>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fuid mt-2">
    <div class="row">
      <div class="col">
        <div class="jumbotron">
          <h1 class="display-4">Acercate a nosotros te mostraremos el mundo màgico del CyberNahualt!</h1><br>
          <p class="lead">
            Es importante mantener nuestra lengua materna que nos identifique de donde son nuestras raices
            mexicanas 
          </p>
          <hr class="my-4">
            <div class="row">
              <div class="col-sm-6">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">En nuestros cursos aprenderas cosas interesantes que no te arrepentiras </h5>
                    <p class="card-text"></p>
                    <img class="card-img" src="{{asset('img/comunicacion.jpg')}}" height="400" alt="">
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Conoceras el mundo de nuestros antepasados en la forma de comunicacion que tenian entre ellos</h5>
                    <p class="card-text"></p>
                    <img class="card-img" src="{{asset('img/indigenas.png')}}" height="400" alt="">
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fuid mt-2">
    <div class="row">
      <div class="col">
      <div class="card text-white bg-dark text-center" >
          <div class="card-body">
            <h4 class="card-title">Aprender Nahualt te hara viajar al pasado</h4>
            <p class="card-text"><h5>CyberNahualt esta comprometido que tendras una experiencia inovidable.</h5></p>
            <a href="{{ route('register') }}" class="btn btn-primary">Registrate ahora!!!!</a>
          </div>
          <div class="card-footer text-muted">
            <p><h5>© Copyright 2022 CyberNahualt - Todos los Derechos Reservados</h5></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  
@endsection