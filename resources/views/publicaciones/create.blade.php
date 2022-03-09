@extends('diseños.publico')

@section('contenido')

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-4">
                <form action="{{ route('publicaciones.store')}}" method="post">
                    <div class="form-group">
                        <label>Titulo</label><br>
                        <input class="form-control" type="text" name="titulo">
                        <div class="form-group">
                            <label>Articulo</label><br>
                            <textarea class="form-control"name="articulo"  cols="30" rows="10"></textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary btn-lg">Crear</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection