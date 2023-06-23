<section>
    <header>
        <!-- <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Proceso de formalización') }}
        </h2> -->

        <p class="p-6 text-gray-900 dark:text-gray-100">
            {{ __("A continuación podrás encontrar la información para el proceso de formalización de tu empresa. Selecciona tu comunidad y tu rubro, y se presentarán los pasos a seguir.") }}
        </p>
    </header>

    <div class="grid grid-cols-1 md:grid-cols-2">

        <!-- Form con selects -->
        <div class="p-6">
            <form action="{{ route('proceso.requisitos') }}" method="get">

                <!-- Comuna select -->
                <div clas="ml-12">
                    <!-- <label for="comuna">Selecciona una comuna:</label> -->
                    <x-input-label for="comuna" :value="__('Selecciona tu comuna')" />
                    <select name="comuna_id" class="w-full" id="comuna" required>
                        <option value="">Seleccionar</option>
                        @foreach ($comunasList as $comuna)
                            <option value="{{ $comuna->id }}" {{ $comuna->id == $comunaSelectedId ? 'selected' : '' }}> {{ $comuna->name }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Rubnro select -->
                <div class="mt-4">
                    <x-input-label for="rubro" :value="__('Seleccion tu rubro')" />
                    <select name="rubro_id" class="w-full" id="rubro">
                        <option value="">Seleccionar</option>
                        @foreach ($rubrosList as $rubro)
                            <option value="{{ $rubro->id }}" {{ $rubro->id == $rubroSelectedId ? 'selected' : '' }}> {{ $rubro->name }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Boton submit -->
                <div class="w-full mt-4">
                    <x-primary-button>
                        {{ __('Consultar') }}
                    </x-primary-button>
                </div>
                <!-- <button type="submit">Consultar</button> -->
            </form>
        </div>

        <!-- Pasos para formalizar -->
        @if (count($documentsReturnList) > 0)
        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
            <div class="text-gray-900 dark:text-gray-100">
                <h2>Pasos a seguir:</h2>

                <ul class="steps">
                    @foreach ($pasosFormalizar as $paso)
                        <li class="py-2"> 
                            <strong>{{ $paso->name }}.</strong>
                            <span> {{ $paso->description }} </span>
                            <!-- TODO: crear un archivo para los documentos y agregar un include -->
                            @if ($paso->url) 
                                <a href="{{ $paso->url }}" target="_blank"> {{ $paso->url }} </a> 
                            @else
                                <ul class="pt-2">
                                    @foreach ($documentsReturnList as $dato)
                                        <li>{{ $dato->name }}</li>
                                    @endforeach
                                </ul>
                            @endif
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        @else 
            @if ($inputsMissing)
                <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                    <div class="text-gray-900 dark:text-gray-100">
                        <p>Se deben ingresar los datos de comuna y rubro.</p>
                    </div>        
                </div>
            @else
                <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                    <div class="text-gray-900 dark:text-gray-100">
                        <p>No se encontraron datos.</p>
                    </div>        
                </div>
            @endif
        @endif
    </div>

</section>