
<div><h2 class="text-center">{{ $Modo=='crear' ? 'Crear - Nuevo Usuario':'Modificar Usuario'}}</h2></div>

<div class="row">
  <div class="col-md-4">
  <label for="Usuario" class="control-label">Usuario</label>
<input type="text" class="form-control {{$errors->has('Usuario')?'is-invalid':''}}" name="Usuario" id="Usuario" 
value="{{ isset($empleado->Usuario)?$empleado->Usuario:old('Usuario') }}">
{!! $errors->first('Usuario','<div class="invalid-feedback">:message</div>') !!}


  </div>
  <div class="col-md-4">
<label for="Nombre">Nombre</label>
<input class="form-control {{$errors->has('Nombre')?'is-invalid':''}}" type="text" name="Nombre"
value="{{ isset($empleado->Nombre)?$empleado->Nombre:old('Nombre') }}">
{!! $errors->first('Nombre','<div class="invalid-feedback">:message</div>') !!}
  </div>
  <div class="col-md-4">
<label for="Apellido">Apellido</label>
<input class="form-control {{$errors->has('Apellido')?'is-invalid':''}}" type="text" name="Apellido"
value="{{ isset($empleado->Apellido)?$empleado->Apellido:old('Apellido') }}">
{!! $errors->first('Apellido','<div class="invalid-feedback">:message</div>') !!}
  </div>
</div>
<div class="row">
  <div class="col-md-4">
  <label for="TipoIdentificacion">Tipo Identificacion</label>
<input class="form-control {{$errors->has('TipoIdentificacion')?'is-invalid':''}}" type="text" name="TipoIdentificacion"
value="{{ isset($empleado->TipoIdentificacion)?$empleado->TipoIdentificacion:old('TipoIdentificacion') }}">
{!! $errors->first('TipoIdentificacion','<div class="invalid-feedback">:message</div>') !!}
  </div>
  <div class="col-md-4">
  <label for="Identificacion">Identificacion</label>
<input class="form-control {{$errors->has('Identificacion')?'is-invalid':''}}" type="text" name="Identificacion"
value="{{ isset($empleado->Identificacion)?$empleado->Identificacion:old('Identificacion') }}">
{!! $errors->first('Identificacion','<div class="invalid-feedback">:message</div>') !!}
  </div>
  <div class="col-md-4">
<label for="Fecha">Fecha de Nacimiento</label>
<input class="form-control" type="date" name="Fecha"
value="{{ isset($empleado->Fecha)?$empleado->Fecha:old('Fecha') }}">
  </div>
</div>
<div class="row">
  <div class="col-md-4">
  <label for="contrasena">Contraseña</label>
<input class="form-control {{$errors->has('contrasena')?'is-invalid':''}}" type="password" name="contrasena"
value="{{ isset($empleado->contrasena)?$empleado->contrasena:old('contrasena') }}">
{!! $errors->first('contrasena','<div class="invalid-feedback">:message</div>') !!}
  </div>
  
</div>
</br>
<div class="row">
<div class="col-md-4">
<input type="submit" class="btn btn-success" value="{{ $Modo=='crear' ? 'Crear':'Modificar'}}">
<a class="btn btn-primary" href="{{ url('empleados')}}">Retornar</a>
</div>
</div>

