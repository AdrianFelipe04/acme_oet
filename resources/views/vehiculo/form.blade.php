<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Placa') }}
            {{ Form::text('Placa', $vehiculo->Placa, ['class' => 'form-control' . ($errors->has('Placa') ? ' is-invalid' : ''), 'placeholder' => 'Placa']) }}
            {!! $errors->first('Placa', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Color') }}
            {{ Form::select('idColor', $color, $vehiculo->idColor, ['class' => 'form-control' . ($errors->has('idColor') ? ' is-invalid' : ''), 'placeholder' => 'Color']) }}
            {!! $errors->first('idColor', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Marca') }}
            {{ Form::select('idMarca', $marca, $vehiculo->idMarca, ['class' => 'form-control' . ($errors->has('idMarca') ? ' is-invalid' : ''), 'placeholder' => 'Marca']) }}
            {!! $errors->first('idMarca', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Tipo de Vehiculo') }}
            {{ Form::select('idTipovehiculo', $tipovehiculo, $vehiculo->idTipovehiculo, ['class' => 'form-control' . ($errors->has('idTipovehiculo') ? ' is-invalid' : ''), 'placeholder' => 'Tipo de Vehiculo']) }}
            {!! $errors->first('idTipovehiculo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Conductor') }}
            {{ Form::select('idConductor', $persona, $vehiculo->idConductor, ['class' => 'form-control' . ($errors->has('idConductor') ? ' is-invalid' : ''), 'placeholder' => 'Conductor']) }}
            {!! $errors->first('idConductor', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Propietario') }}
            {{ Form::select('idPropietario',$persona, $vehiculo->idPropietario, ['class' => 'form-control' . ($errors->has('idPropietario') ? ' is-invalid' : ''), 'placeholder' => 'Propietario']) }}
            {!! $errors->first('idPropietario', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Aceptar</button>
    </div>
</div>