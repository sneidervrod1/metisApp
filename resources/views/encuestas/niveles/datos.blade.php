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
                    <table class="w-full text-sm text-left rtl:text-right text-gray-800 dark:text-gray-400">

                        @foreach ($niveles as $item)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 ">
                                <th class="px-4 py-2 text-white ">NIVEL : {{ $item->name }}</th>
                                <th class="px-4 py-2 text-center text-red-600"> <a
                                        href="{{ route('encuesta.pesoCategoria', ['nivel' => $item->id]) }}">EDITAR</a>
                                </th>
                            </tr>
                            <tr>
                                <td class="" id="nested">
                                    @foreach ($item->categories as $cat)
                                        <span
                                            class="border border-solid border-red-200 text-center inline-block bg-white border-b dark:bg-gray-800 dark:border-gray-700 px-2 py-1">
                                            {{ $cat->name }} ({{ $cat->pivot->weight_category }})
                                        </span>
                                    @endforeach
                                </td>
                            </tr>
                        @endforeach
                    </table>

                </div>
                
                @if (session('sucess'))
                    <div class="alert alert-danger">
                        {{ session('sucess') }}
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
