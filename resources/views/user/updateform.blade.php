<div class="p-1 row padding-1">
    <div class="col-md-12">

        <div class="mb-2 form-group mb20">
            <label for="name"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('Nombre') }}</label>
            <input name="name" type="text" id="name"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                value="{{ old('name', $user?->name) }}" placeholder="name@mail.com" required placeholder="name" />

            {!! $errors->first('name', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="mb-2 form-group mb20">
            <label for="email"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('Email') }}</label>
            <input name="email" type="email" id="email"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('email') is-invalid @enderror"
                value="{{ old('email', $user?->email) }}" placeholder="name@mail.com" required />
            {!! $errors->first('email', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="mb-2 form-group mb20">
            <label for="profile_photo_path" class="form-label">{{ __('Foto de perfil') }}</label>
            <input type="text" name="profile_photo_path"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('profile_photo_path') is-invalid @enderror"
                value="{{ old('profile_photo_path', $user?->profile_photo_path) }}" id="profile_photo_path"
                placeholder="Campo no activado">
            {!! $errors->first(
                'profile_photo_path',
                '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>',
            ) !!}
        </div>
        <div class="mb-2 form-group mb20">
            <label for="viejapass" class="form-label">{{ __('Contraseña anterior') }}</label>
            <input type="text" name="viejapass"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('profile_photo_path') is-invalid @enderror"
                id="viejapass" placeholder="Contraseña antigua">
            {!! $errors->first('viejapass', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="mb-2 form-group mb20">
            <label for="profile_photo_path" class="form-label">{{ __('Foto de perfil') }}</label>
            <input type="text" name="profile_photo_path"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('profile_photo_path') is-invalid @enderror"
                value="{{ old('profile_photo_path', $user?->profile_photo_path) }}" id="profile_photo_path"
                placeholder="Campo no activado">
            {!! $errors->first(
                'profile_photo_path',
                '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>',
            ) !!}
        </div>
        <div class="mb-2 form-group mb20">
            <label for="profile_photo_path" class="form-label">{{ __('Foto de perfil') }}</label>
            <input type="text" name="profile_photo_path"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('profile_photo_path') is-invalid @enderror"
                value="{{ old('profile_photo_path', $user?->profile_photo_path) }}" id="profile_photo_path"
                placeholder="Campo no activado">
            {!! $errors->first(
                'profile_photo_path',
                '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>',
            ) !!}
        </div>

    </div>



    <div class="mt-2 col-md-12 mt20">
        <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">{{ __('Submit') }}</button>
    </div>
</div>
