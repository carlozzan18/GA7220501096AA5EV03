@extends('layouts.app')

@section('titulo','Listado de Generos')

@section('contenido')

<h3 class="text-center m-5">Listado de Generos</h3>

    @foreach ($gener as $genet )
    <div class="d-flex justify-content-center w-50 mx-auto">
        <div class="col-md-8">

          <table class="table table-dark table-sm table-striped" id="tablaGeneros">
            <thead>
              <tr>
                <th style="width: 20%;">{{$genet->nombre_genero}}</th>
                <th class="text-start" style="width: 80%;">{{$genet->descripcion}}</th>
              </tr>
            </thead>
            <tbody></tbody>
          </table>
        </div>
      </div>


@endforeach


@endsection
