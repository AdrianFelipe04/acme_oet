<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Tipo de vehiculo') }}
            {{ Form::text('Tipovehiculo', $tipovehiculo->Tipovehiculo, ['class' => 'form-control' . ($errors->has('Tipovehiculo') ? ' is-invalid' : ''), 'placeholder' => 'Tipo de vehiculo']) }}
            {!! $errors->first('Tipovehiculo', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Aceptar</button>
    </div>
</div>