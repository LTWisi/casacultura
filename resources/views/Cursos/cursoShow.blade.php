<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/cursoSettings.css') }}">
    <title>Información de curso</title>
</head>

<body>

    @include('Layout.menu')

    <div class="hero">
        <div class="form-box">

            @if ( $errors->any() )
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="row align-items-center">
                <div class="col text-center text-uppercase">
                    <small>Información de curso:</small>
                    <h2>{{$curso->nombre}}</h2>
                </div>
            </div>
            <div class="form-group row">
                <label for="nombreCurso" class="col-sm-2 col-form-label">Nombre:</label>
                <div class="col-sm-10">
                    <input type="text" for="nombre" name="nombre" value="{{ $curso->nombre }}" class="form-control" id="inputNombre" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="fechaCurso" class="col-sm-2 col-form-label">Fecha de creación:</label>
                <div class="col-sm-10">
                    <input type="date" for="fechaPublicacion" name="fechaPublicacion" value="{{ $curso->fechaPublicacion }}" class="form-control" id="fechaCurso" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="costoCurso" class="col-sm-2 col-form-label">Costo:</label>
                <div class="col-sm-10">
                    <input type="number" for="costo" name="costo" value="{{ $curso->costo }}" class="form-control" id="costoCurso" step=".1" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="descripcionCurso" class="col-sm-2 col-form-label">Descripción:</label>
                <div class="col-sm-10">
                    <textarea id="descripcionCurso" for="descripcion" name="descripcion" class="form-control" rows="5" cols="50" readonly> {{ $curso->descripcion }} </textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="idiomaCurso" class="col-sm-2 col-form-label">Idioma:</label>
                <div class="col-sm-10">
                    <input type="text" for="idioma" name="idioma" value="{{ $curso->idioma }}" class="form-control" id="idiomaCurso" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="aprendizajeCurso" class="col-sm-2 col-form-label">Aprendizaje:</label>
                <div class="col-sm-10">
                    <textarea id="aprendizajeCurso" for="aprendizajes" name="aprendizajes" class="form-control" rows="5" cols="50" readonly> {{ $curso->aprendizajes }} </textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="requisitosCurso" class="col-sm-2 col-form-label">Requisitos:</label>
                <div class="col-sm-10">
                    <textarea id="requisitosCurso" for="requisitos" name="requisitos" class="form-control" rows="5" cols="50" readonly> {{ $curso->requisitos }} </textarea>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                    <a href="{{ route('curso.edit', [$curso]) }}"> <button type="submit" class="btn btn-info">Administración del curso</button> </a>
                </div>
            </div>
        </div>

        @include('Layout.footer');

    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>
