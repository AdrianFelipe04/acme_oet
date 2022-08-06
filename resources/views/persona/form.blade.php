<div class="box box-info padding-1">
    <div class="box-body">
        
        <!-- <div class="form-group">
            {{ Form::label('idTipopersona') }}
            {{ Form::text('idTipopersona', $persona->idTipopersona, ['class' => 'form-control' . ($errors->has('idTipopersona') ? ' is-invalid' : ''), 'placeholder' => 'Idtipopersona']) }}
            {!! $errors->first('idTipopersona', '<div class="invalid-feedback">:message</div>') !!}
        </div> -->
        <div class="form-group">
            {{ Form::label('Tipo de Persona') }}
            {{ Form::select('idTipopersona', $tipopersona, $persona->idTipopersona, ['class' => 'form-control' . ($errors->has('idTipopersona') ? ' is-invalid' : ''), 'placeholder' => 'Tipo de Persona']) }}
            {!! $errors->first('idTipopersona', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Cedula') }}
            {{ Form::text('Cedula', $persona->Cedula, ['class' => 'form-control' . ($errors->has('Cedula') ? ' is-invalid' : ''), 'placeholder' => 'Cedula']) }}
            {!! $errors->first('Cedula', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Primer nombre') }}
            {{ Form::text('Primernombre', $persona->Primernombre, ['class' => 'form-control' . ($errors->has('Primernombre') ? ' is-invalid' : ''), 'placeholder' => 'Primer nombre']) }}
            {!! $errors->first('Primernombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Segundo nombre') }}
            {{ Form::text('Segundonombre', $persona->Segundonombre, ['class' => 'form-control' . ($errors->has('Segundonombre') ? ' is-invalid' : ''), 'placeholder' => 'Segundo nombre']) }}
            {!! $errors->first('Segundonombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Apellidos') }}
            {{ Form::text('Apellidos', $persona->Apellidos, ['class' => 'form-control' . ($errors->has('Apellidos') ? ' is-invalid' : ''), 'placeholder' => 'Apellidos']) }}
            {!! $errors->first('Apellidos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Direccion') }}
            {{ Form::text('Direccion', $persona->Direccion, ['class' => 'form-control' . ($errors->has('Direccion') ? ' is-invalid' : ''), 'placeholder' => 'Direccion']) }}
            {!! $errors->first('Direccion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Telefono') }}
            {{ Form::text('Telefono', $persona->Telefono, ['class' => 'form-control' . ($errors->has('Telefono') ? ' is-invalid' : ''), 'placeholder' => 'Telefono']) }}
            {!! $errors->first('Telefono', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Ciudad') }}
            {{ Form::text('Ciudad', $persona->Ciudad, ['class' => 'form-control' . ($errors->has('Ciudad') ? ' is-invalid' : ''), 'placeholder' => 'Ciudad']) }}
            {!! $errors->first('Ciudad', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Aceptar</button>
    </div>
</div>