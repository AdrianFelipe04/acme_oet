<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Tipo de Persona') }}
            {{ Form::text('Tipopersona', $tipopersona->Tipopersona, ['class' => 'form-control' . ($errors->has('Tipopersona') ? ' is-invalid' : ''), 'placeholder' => 'Tipo de Persona']) }}
            {!! $errors->first('Tipopersona', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <br>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Aceptar</button>
    </div>
</div>