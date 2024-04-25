<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="user_id" class="form-label">{{ __('User Id') }}</label>
            <input type="text" name="user_id" class="form-control @error('user_id') is-invalid @enderror" value="{{ old('user_id', $bid?->user_id) }}" id="user_id" placeholder="User Id">
            {!! $errors->first('user_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="propiedad_id" class="form-label">{{ __('Propiedad Id') }}</label>
            <input type="text" name="propiedad_id" class="form-control @error('propiedad_id') is-invalid @enderror" value="{{ old('propiedad_id', $bid?->propiedad_id) }}" id="propiedad_id" placeholder="Propiedad Id">
            {!! $errors->first('propiedad_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="apuesta" class="form-label">{{ __('Apuesta') }}</label>
            <input type="text" name="apuesta" class="form-control @error('apuesta') is-invalid @enderror" value="{{ old('apuesta', $bid?->apuesta) }}" id="apuesta" placeholder="Apuesta">
            {!! $errors->first('apuesta', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>