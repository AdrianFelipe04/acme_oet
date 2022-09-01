<div class="box box-info padding-1">
    <div class="box-body">
        
    <div class="box-body">

        <div class="form-group">
            <label for="Tipovehiculo" class="form-label">{{ Form::label('Tipo de Vehiculo') }}</label>
            <input type="text" class="form-control" value="{{ isset($tipovehiculo->Tipovehiculo)?$tipovehiculo->Tipovehiculo:old('Tipovehiculo') }}" id="Tipovehiculo" name="Tipovehiculo" placeholder="Tipo de vehiculo">
            <span class="badge text-danger error-tipovehiculo">
        
            </span>
        </div>

</div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Aceptar</button>
    </div>
</div>