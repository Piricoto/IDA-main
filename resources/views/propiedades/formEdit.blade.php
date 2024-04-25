<div class="p-1 row padding-1">

    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="pb-12 border-b border-gray-900/10 ">

            <div class="grid grid-cols-1 mt-10 gap-x-6 gap-y-8 sm:grid-cols-6">

                <div class="sm:col-span-4">
                    <label for="titulo"
                        class="block text-sm font-medium leading-6 text-gray-900 form-label">{{ __('Titulo') }}</label>
                    <div class="mt-2">
                        <div
                            class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                            <input type="text" name="titulo"
                                class="form-control block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                value="{{ old('titulo', $data['propiedad']['titulo']) }}" id="titulo"
                                placeholder="Titulo">
                        </div>
                    </div>
                </div>

                <div class="sm:col-span-3">
                    <label for="descripcion" class="form-label">{{ __('Descripcion') }}</label>
                    <div class="mt-2">
                        <input type="text" name="descripcion" rows="3"
                            class="form-control block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                            value="{{ old('descripcion', $data['propiedad']['descripcion']) }}" id="descripcion"
                            placeholder="Descripcion">
                        {!! $errors->first('descripcion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                    </div>
                </div>


                <div class="sm:col-span-3">
                    <label for="precio"
                        class="block text-sm font-medium leading-6 text-gray-900 form-label">{{ __('Precio') }}</label>
                    <div class="mt-2">
                        <input type="text" name="precio"
                            class="form-control block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                            value="{{ old('precio', $data['propiedad']['precio']) }}" id="precio"
                            placeholder="Precio">
                    </div>
                </div>

                <div class="sm:col-span-3">
                    <label for="direccion"
                        class="block text-sm font-medium leading-6 text-gray-900 form-label">{{ __('Direccion') }}</label>
                    <div class="mt-2">
                        <input type="text" name="direccion"
                            class="form-control block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                            value="{{ old('direccion', $data['propiedad']['direccion']) }}" id="direccion"
                            placeholder="Direccion">
                    </div>
                </div>
                <div class="sm:col-span-3">
                    <label for="habitaciones"
                        class="block text-sm font-medium leading-6 text-gray-900 form-label">{{ __('Nº Habitaciones') }}</label>
                    <div class="mt-2">
                        <input type="text" name="habitaciones"
                            class="form-control block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                            value="{{ old('habitaciones', $data['propiedad']['habitaciones']) }}" id="habitaciones"
                            placeholder="habitaciones">

                    </div>
                </div>
                <div class="sm:col-span-3">
                    <label for="WC"
                        class="block text-sm font-medium leading-6 text-gray-900 form-label">{{ __('Baños') }}</label>
                    <div class="mt-2">
                        <input type="text" name="WC"
                            class="form-control block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                            value="{{ old('WC', $data['propiedad']['WC']) }}" id="WC">

                    </div>
                </div>
                <div class="sm:col-span-3">
                    <label for="plantas"
                        class="block text-sm font-medium leading-6 text-gray-900 form-label">{{ __('Nº de plantas') }}</label>
                    <div class="mt-2">
                        <input type="text" name="plantas"
                            class="form-control block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                            value="{{ old('plantas', $data['propiedad']['plantas']) }}" id="plantas"
                            placeholder="plantas">

                    </div>
                </div>
                <div class="sm:col-span-3">
                    <label for="tipo"
                        class="block text-sm font-medium leading-6 text-gray-900 form-label">{{ __('Tipo (casa, piso, etc)') }}</label>
                    <div class="mt-2">
                        <input type="text" name="tipo"
                            class="form-control block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                            value="{{ old('tipo', $data['propiedad']['tipo']) }}" id="tipo" placeholder="tipo">

                    </div>
                </div>
                <div class="sm:col-span-3">
                    <label for="size"
                        class="block text-sm font-medium leading-6 text-gray-900 form-label">{{ __('Tamaño (metros cuadrados)') }}</label>
                    <div class="mt-2">
                        <input type="text" name="size"
                            class="form-control block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                            value="{{ old('size', $data['propiedad']['size']) }}" id="size" placeholder="size">

                    </div>

                </div>

            </div>

            <div class="flex items-center justify-end mt-6 gap-x-6">
                <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
                <button type="submit"
                    class="px-3 py-2 text-sm font-semibold text-white bg-indigo-600 rounded-md shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">{{ __('Submit') }}</button>
            </div>


        </div>
