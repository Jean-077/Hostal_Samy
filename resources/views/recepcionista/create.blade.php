@extends('layouts.plantillabase')

@section('contenido')
<h2>Crear recepcionista</h2>
<form action="/recepcionista" method="POST">
    @csrf
    <div class="mb-3">
        <label for=""class="form-label">Código</label>
        <input id="codigo"name="codigo"type="text"class="form-control"tabindex="1">
    </div>
    <div class="mb-3">
        <label for=""class="form-label">Nombre</label>
        <input id="nombre"name="nombre"type="text"class="form-control"tabindex="2">
    </div>
    <div class="mb-3">
        <label for=""class="form-label">Apellido</label>
        <input id="apellido"name="apellido"type="text"class="form-control"tabindex="3">
    </div>
    <div class="mb-3">
        <label for=""class="form-label">DNI</label>
        <input id="DNI"name="DNI"type="text"class="form-control"tabindex="4">
    </div>
    <a href="/recepcionista" class="btn btn-secondary" tabindex="5"> Cancelar </a>
    <button type="submit"class="btn btn-primary"tabindex="4">Guardar</button>
</form>
@endsection