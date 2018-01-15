@extends('layouts.app')

@section('content')

<header class="masthead text-white text-center">
       
      <h1 class="my-4">Felicidades, ya eres parte de nuestra comunidad.<br>
        <small>Ahora podra ver publicaciones de otros usuarios o realizar tus propias publicaciones, <b>Tu eliges!</b></small>
      </h1>
      <p></p>
      
        <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
             <a href="{{ url('/publicaciones') }}" class="btn btn-block btn-lg btn-success"> <b>Ver</b> publicaciones</a>
             <a href="#" class="btn btn-block btn-lg btn-success"> <b>Mis</b> publicaciones</a>
          </div>
</header>
@endsection
