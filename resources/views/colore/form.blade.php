<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Color') }}
            {{ Form::text('Color', $colore->Color, ['class' => 'form-control' . ($errors->has('Color') ? ' is-invalid' : ''), 'placeholder' => 'Color']) }}
            {!! $errors->first('Color', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Aceptar</button>
    </div>
</div>