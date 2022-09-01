<div class="box box-info padding-1">
    <div class="box-body">
        <div class="form-group">
            {{ Form::label('Tipo de Persona') }}
            {{ Form::select('idTipopersona', $tipopersona, $persona->idTipopersona, ['class' => 'form-control' . ($errors->has('idTipopersona') ? ' is-invalid' : ''), 'placeholder' => 'Tipo de Persona']) }}
            {!! $errors->first('idTipopersona', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            <label for="Cedula" class="form-label">{{ Form::label('Cedula') }}</label>
            <input type="text" class="form-control" value="{{ isset($persona->Cedula)?$persona->Cedula:old('Cedula') }}" id="Cedula" name="Cedula" placeholder="Cedula">
            <span class="badge text-danger error-cedula">
        
            </span>
        </div>
        <div class="form-group">
            <label for="Primernombre" class="form-label">{{ Form::label('Primer Nombre') }}</label>
            <input type="text" class="form-control" value="{{ isset($persona->Primernombre)?$persona->Primernombre:old('Primernombre') }}" id="Primernombre" name="Primernombre" placeholder="Primer nombre">
            <span class="badge text-danger error-primernombre">
        
            </span>
        </div>
        <div class="form-group">
            <label for="Segundonombre" class="form-label">{{ Form::label('Segundo Nombre') }}</label>
            <input type="text" class="form-control" value="{{ isset($persona->Segundonombre)?$persona->Segundonombre:old('Segundonombre') }}" id="Segundonombre" name="Segundonombre" placeholder="Segundo nombre">
            <span class="badge text-danger error-segundonombre">
        
            </span>
        </div>
        <div class="form-group">
            <label for="Apellidos" class="form-label">{{ Form::label('Apellidos') }}</label>
            <input type="text" class="form-control" value="{{ isset($persona->Apellidos)?$persona->Apellidos:old('Apellidos') }}" id="Apellidos" name="Apellidos" placeholder="Apellidos">
            <span class="badge text-danger error-apellidos">
        
            </span>
        </div>
        <div class="form-group">
            <label for="Direccion" class="form-label">{{ Form::label('Direccion') }}</label>
            <input type="text" class="form-control" value="{{ isset($persona->Direccion)?$persona->Direccion:old('Direccion') }}" id="Direccion" name="Direccion" placeholder="Direccion">
            <span class="badge text-danger error-direccion">
        
            </span>
        </div>
        <div class="form-group">
            <label for="Telefono" class="form-label">{{ Form::label('Telefono') }}</label>
            <input type="text" class="form-control" value="{{ isset($persona->Telefono)?$persona->Telefono:old('Telefono') }}" id="Telefono" name="Telefono" placeholder="Telefono">
            <span class="badge text-danger error-telefono">
        
            </span>
        </div>
        <div class="form-group">
            <label for="Ciudad" class="form-label">{{ Form::label('Ciudad') }}</label>
            <input type="text" class="form-control" value="{{ isset($persona->Ciudad)?$persona->Ciudad:old('Ciudad') }}" id="Ciudad" name="Ciudad" placeholder="Ciudad">
            <span class="badge text-danger error-ciudad">
        
            </span>
        </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Aceptar</button>
    </div>
</div>