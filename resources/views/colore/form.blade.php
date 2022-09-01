<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            <label for="Color" class="form-label">{{ Form::label('Color') }}</label>
            <input type="text" class="form-control" value="{{ isset($colore->Color)?$colore->Color:old('Color') }}" id="Color" name="Color" placeholder="Color">
            <span class="badge text-danger error-color">
        
            </span>
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Aceptar</button>
    </div>
</div>