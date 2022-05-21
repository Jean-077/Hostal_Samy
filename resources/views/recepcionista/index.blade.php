@extends('layouts.plantillabase')

@section('css')
<link href="https://cdn.datatables.net/1.12.0/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@endsection

@section('contenido')
<a href="recepcionista/create" class="btn btn-primary"> CREAR </a>

<table id="recepcionistas" class="table table-striped table-bordered shadow-lg mt-4" style="width=100%">
    <thead class="bg-primary text-white">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">codigo</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">DNI</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($recepcionistas as $recepcionista)
        <tr>
            <td>{{$recepcionista->id}}</td>
            <td>{{$recepcionista->codRecepcionista}}</td>
            <td>{{$recepcionista->nombre}}</td>
            <td>{{$recepcionista->apellido}}</td>
            <td>{{$recepcionista->DNI}}</td>
            <td>
                <form action="{{route ('recepcionista.destroy', $recepcionista->id)}}" method="POST">
                <a href="/recepcionista/{{$recepcionista->id}}/edit" class="btn btn-info">Editar</a>
                @csrf
                @method('DELETE')
                <button type="submit" class=" btn btn-danger ">Borrar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.0/js/dataTables.bootstrap5.min.js"></script>

<script>
$(document).ready(function() {
    $('#recepcionista').DataTable();
});

</script>

@endsection

@endsection