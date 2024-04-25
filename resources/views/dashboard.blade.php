<x-app-layout>
    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @section('content')

                <div>
    
                  @foreach ($propiedades as $propiedad)
                  <main class="py-6 px-4 sm:p-6 md:py-10 md:px-8">
                      <div class="max-w-4xl mx-auto grid grid-cols-1 lg:max-w-5xl lg:gap-x-20 lg:grid-cols-2">
                        <div class="relative p-3 col-start-1 row-start-1 flex flex-col-reverse rounded-lg bg-gradient-to-t from-black/75 via-black/0 sm:bg-none sm:row-start-2 sm:p-0 lg:row-start-1">
                          <h1 class="mt-1 text-lg font-semibold text-white sm:text-slate-900 md:text-2xl">{{ $propiedad->titulo }}</h1>
                          <p class="text-sm leading-4 font-medium text-white sm:text-slate-500">Entire house</p>
                        </div>
                        <div class="grid gap-4 col-start-1 col-end-3 row-start-1 sm:mb-6 sm:grid-cols-4 lg:gap-6 lg:col-start-2 lg:row-end-6 lg:row-span-6 lg:mb-0">
                          <img src="{{ $propiedad->imagen }}" alt="" class="w-full h-60 object-cover rounded-lg sm:h-52 sm:col-span-2 lg:col-span-full" loading="lazy">
                        </div>
                        <dl class="mt-4 text-xs font-medium flex items-center row-start-2 sm:mt-1 sm:row-start-3 md:mt-2.5 lg:row-start-2">
                          <dt class="sr-only">Reviews</dt>
                          <dd class="text-indigo-600 flex items-center">
                            <svg width="24" height="24" fill="none" aria-hidden="true" class="mr-1 stroke-current">
                              <path d="m12 5 2 5h5l-4 4 2.103 5L12 16l-5.103 3L9 14l-4-4h5l2-5Z"  stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <span>4.89 <span class="text-slate-400 font-normal">(128)</span></span>
                          </dd>
                          <dt class="sr-only">Location</dt>
                          <dd class="flex items-center">
                            <svg width="2" height="2" aria-hidden="true" fill="currentColor" class="mx-3 text-slate-300">
                              <circle cx="1" cy="1" r="1" />
                            </svg>
                            <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-1 text-slate-400" aria-hidden="true">
                              <path d="M18 11.034C18 14.897 12 19 12 19s-6-4.103-6-7.966C6 7.655 8.819 5 12 5s6 2.655 6 6.034Z" />
                              <path d="M14 11a2 2 0 1 1-4 0 2 2 0 0 1 4 0Z" />
                            </svg>
                            Collingwood, Ontario
                          </dd>
                        </dl>
                        <div class="mt-4 col-start-1 row-start-3 self-center sm:mt-0 sm:col-start-2 sm:row-start-2 sm:row-span-2 lg:mt-6 lg:col-start-1 lg:row-start-3 lg:row-end-4">
                          <button type="button" class="bg-red-600 text-white text-sm leading-6 font-medium py-2 px-3 rounded-lg">Reserva</button>
                        </div>
                        <p class="mt-4 text-sm leading-6 col-start-1 sm:col-span-2 lg:mt-6 lg:row-start-4 lg:col-span-1">
                          {{ $propiedad->descripcion }}         </p>
                      </div>
                  </main>
                      @endforeach
                      <div class="max-w-4xl mx-auto grid grid-cols-1 lg:max-w-5xl lg:gap-x-20 lg:grid-cols-2">  
                    {{ $propiedades->links('pagination::simple-bootstrap-4') }} <!-- Agrega los controles de paginación aquí -->
                      </div>
              </div>

                <div class="sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                        
                        <div class=" mx-auto sm:px-6 lg:px-8">
                            
                            <div class="bg-white">
                                <div class="relative isolate px-6 lg:px-8">
                                  <div class="absolute inset-x-0 -top-20 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-40" aria-hidden="true">
                                    <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
                                  </div>
                                  <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
                                    <div class="hidden sm:mb-8 sm:flex sm:justify-center">
                                      <div class="relative rounded-full px-3 py-1 text-sm leading-6 text-gray-600 ring-1 ring-gray-900/10 hover:ring-gray-900/20">
                                        Lee sobre nosotros. <a href="#" class="font-semibold text-indigo-600"><span class="absolute inset-0" aria-hidden="true"></span>Read more <span aria-hidden="true">&rarr;</span></a>
                                      </div>
                                    </div>
                                    <div class="text-center">
                                      <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">Data to enrich your online business</h1>
                                      <p class="mt-6 text-lg leading-8 text-gray-600">Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat fugiat aliqua.</p>
                                      <div class="mt-10 flex items-center justify-center gap-x-6">
                                        <div class="row">
                                        @role('admin')
                                        <a href="{{ route('propiedades.index')}}" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Get started</a>
                                        @endrole
                                        @role('cliente')
                                        <a href="{{ route('welcome')}}" class="text-sm font-semibold leading-6 text-gray-900">Learn more <span aria-hidden="true">→</span></a>
                                        @endrole
                                        <div class="flex py-7">
                                          
                                            <a class="max-w30px" href="https://www.twitter.com/"><img src="{{ asset('images/twitterx.png') }}" alt="Descripción de la imagen"></a>
                                            <a class="max-w30px" href="https://www.facebook.com/"><img src="{{ asset('images/facebook.png') }}" alt="Descripción de la imagen"></a>
                                            <a class="max-w30px" href="https://www.tiktok.com/"><img src="{{ asset('images/tik-tok.png') }}" alt="Descripción de la imagen"></a>
                                            <a class="max-w30px" href="https://www.instagram.com/"><img src="{{ asset('images/instagram.png') }}" alt="Descripción de la imagen"></a>
                                            
                                        </div>
                                    </div>    
                                      </div>
                                    </div>
                                  </div>
                                  <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]" aria-hidden="true">
                                    <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
                                  </div>
                                </div>
                              </div>
                              
                        </div>
                       
                    </div>
                </div>

            </div>
            </div>
            
            

                @endsection
            </div>
        </div>
    </div>
    
  
</x-app-layout>
