@extends("layouts/plantilla")

@section("title", "Crear publicacion")

@section("content")
    <h1>NUEVA PUBLICACION</h1>
    <form action="{{route("publications.add")}}" method="POST">
        @csrf
        <label>
            Titulo:
            <input type="text" name="titulo">
        </label><br>
        <label>
            Extracto:
            <input type="tel" name="extracto">
        </label><br>
        <label>
            Contenido:
            <input type="email" name="contenido">
        </label><br>
        <button type="submit">Registrar publicacion</button>
    </form>
@endsection
