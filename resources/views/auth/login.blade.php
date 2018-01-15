@extends('layouts.app')

@section('content')
<!-- Masthead -->
    <header class="masthead text-white text-center">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <h1 class="mb-5">Debes ingresar para ver estas opciones <br> 
            <small>pero para que sea mas facil ingresa directo con tu correo.</small> </h1>
          </div>
          <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
            <form>
              <div class="form-row">

                <div class="col-12 col-md-12">
                 <a href="{{ url('/auth/google') }}" class="btn btn-block btn-lg btn-primary"> Ingresar con <b>Google</b></a>
                  
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </header>
@endsection
