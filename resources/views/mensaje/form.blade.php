<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="emisor_id" class="form-label">{{ __('Emisor Id') }}</label>
            <input type="text" name="emisor_id" class="form-control @error('emisor_id') is-invalid @enderror" value="{{ old('emisor_id', $mensaje?->emisor_id) }}" id="emisor_id" placeholder="Emisor Id">
            {!! $errors->first('emisor_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="receptor_id" class="form-label">{{ __('Receptor Id') }}</label>
            <input type="text" name="receptor_id" class="form-control @error('receptor_id') is-invalid @enderror" value="{{ old('receptor_id', $mensaje?->receptor_id) }}" id="receptor_id" placeholder="Receptor Id">
            {!! $errors->first('receptor_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="propiedad_id" class="form-label">{{ __('Propiedad Id') }}</label>
            <input type="text" name="propiedad_id" class="form-control @error('propiedad_id') is-invalid @enderror" value="{{ old('propiedad_id', $mensaje?->propiedad_id) }}" id="propiedad_id" placeholder="Propiedad Id">
            {!! $errors->first('propiedad_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="contenido" class="form-label">{{ __('Contenido') }}</label>
            <input type="text" name="contenido" class="form-control @error('contenido') is-invalid @enderror" value="{{ old('contenido', $mensaje?->contenido) }}" id="contenido" placeholder="Contenido">
            {!! $errors->first('contenido', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="leido" class="form-label">{{ __('Leido') }}</label>
            <input type="text" name="leido" class="form-control @error('leido') is-invalid @enderror" value="{{ old('leido', $mensaje?->leido) }}" id="leido" placeholder="Leido">
            {!! $errors->first('leido', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fecha_enviado" class="form-label">{{ __('Fecha Enviado') }}</label>
            <input type="text" name="fecha_enviado" class="form-control @error('fecha_enviado') is-invalid @enderror" value="{{ old('fecha_enviado', $mensaje?->fecha_enviado) }}" id="fecha_enviado" placeholder="Fecha Enviado">
            {!! $errors->first('fecha_enviado', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>