<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            <label for="Marca" class="form-label">{{ Form::label('Marca') }}</label>
            <input type="text" class="form-control" value="{{ isset($marca->Marca)?$marca->Marca:old('Marca') }}" id="Marca" name="Marca" placeholder="Marca">
            <span class="badge text-danger error-marca">
        
            </span>
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Aceptar</button>
    </div>
</div>
