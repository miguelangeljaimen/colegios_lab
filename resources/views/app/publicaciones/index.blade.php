@extends('layouts.app')

@section('estilos')
<link href="{{ asset('componentes/tienda/css/shop-homepage.css')}}" rel="stylesheet">
@endsection
@section('content')
<header class="tienda text-white text-center">
        <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
            <form>
              <div class="form-row">
                <div class="col-12 col-md-9 mb-2 mb-md-0">
                  <input type="text" class="form-control form-control-lg" placeholder="Ingresa tu colegio">
                </div>
                <div class="col-12 col-md-3">
                  <button type="submit" class="btn btn-block btn-lg btn-primary">Buscar!</button>
                </div>
              </div>
            </form>
            

            
<span class="sr-only">Loading...</span>

          </div>
</header>
<div class="container">

      <div class="row">

        <div class="col-lg-12">
  




          <div class="row">
 @foreach($productos as $producto)
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">{{$producto->titulo}}</a>
                  </h4>
                  <h5>${{$producto->valor}}</h5>
                  <p class="card-text">{{$producto->descripcion}} </p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>
@endforeach


          </div>
          <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
@endsection
