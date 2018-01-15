@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
            <form>
              <div class="form-row">
                <div class="col-12 col-md-9 mb-2 mb-md-0">
                  <input type="text" class="form-control form-control-lg" placeholder="Nombre del colegio">
                  <input type="text" class="form-control form-control-lg" placeholder="comuna">
                  <input type="text" class="form-control form-control-lg" placeholder="direccion">
                  <input type="text" class="form-control form-control-lg" placeholder="representante">
                </div>
                <div class="col-12 col-md-3">
                  <button type="submit" class="btn btn-block btn-lg btn-primary">Buscar!</button>
                </div>
              </div>
            </form>

            </div>
        </div>
    </div>
</div>
@endsection
