@extends('layouts.app')

@section('content')

<div class="container">

@if(Session::has('Mensaje'))

<div class="alert alert-success" role="alert">
{{
    Session::get('Mensaje')
}}
</div>

@endif
</br>
<a href="{{ url('empleados/create')}}" class="btn btn-success">Crear - Nuevo Usuario</a>

</br></br>
<table class="table table-hover">
  <thead class="thead-dark">
        <tr>
            <th>#</th>
            <th>Usuario</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Tipo de Documento</th>
            <th>N. de Indentificacion </th>  
            <th>Fecha de nacimiento</th>           
            <th>Edicion & Eliminar</th>
        </tr>
    </thead>
    <tbody>
    @foreach($empleados as $empleado)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{ $empleado->Usuario}}</td>
            <td>{{ $empleado->Nombre}}</td>
            <td>{{ $empleado->Apellido}}</td>
            <td>{{ $empleado->TipoIdentificacion}}</td>
            <td>{{ $empleado->Identificacion}}</td>
            <td>{{ $empleado->Fecha}}</td>
            <td>
            
            <a class="btn btn-warning" href="{{ url('/empleados/'.$empleado->id.'/edit/')}}">
            Editar
            </a>
              |
               
            <form method="post" action="{{ url('/empleados/'.$empleado->id)}}" style="display:inline" >
            {{csrf_field()}}
            {{ method_field('DELETE')}}
            <button class="btn btn-danger" type="submit" onclick="return confirm('¿Borrar?')"> Eliminar</button>
            </form>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>
{{ $empleados->links() }}

</div>
@endsection
