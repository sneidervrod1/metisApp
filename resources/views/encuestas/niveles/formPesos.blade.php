<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-center text-gray-800 dark:text-gray-200 leading-tight">
            MODIFICAR PESOS CATEGORIAS
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('encuesta.actualizar', $nivel->id) }}" method="post">
                        @method('PUT')
                        @csrf
                        {{-- <h3>  {{$nivel->id}} </h3> --}}
                        @foreach ($nivel->categories as $categoria)
                            <p> {{ $categoria->name }}</p>
                            <input required class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"type="number" min="1" name="{{ $categoria->id }}" placeholder="{{ $categoria->pivot->weight_category }}">
                        @endforeach

                        <input class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded"  type="submit" value="Enviar">
                    </form>
                    
                    
                </div>
                @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                @endif
                <div class="mx-6 mb-4">
                    <button
                        class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                        <a href=" {{ route('encuesta.index') }}"> VOLVER </a>
                    </button>
                </div>

            </div>

        </div>
    </div>
</x-app-layout>
