<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            <label for="Tipopersona" class="form-label">{{ Form::label('Tipo de Persona') }}</label>
            <input type="text" class="form-control" value="{{ isset($tipopersona->Tipopersona)?$tipopersona->Tipopersona:old('Tipopersona') }}" id="Tipopersona" name="Tipopersona" placeholder="Tipo de persona">
            <span class="badge text-danger error-tipopersona">
        
            </span>
        </div>

    </div>
    <br>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Aceptar</button>
    </div>
</div>
<script src="{{asset('js/tipopersona.js')}}"></script>
