<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-center text-gray-800 dark:text-gray-200 leading-tight">
            AÑADIR ENUNCIADO (ARREGLAR)
        </h2>
    </x-slot>
    </br>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white text-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            
            <form action="" method="post" enctype="multipart/form-data">
                <div>
                    <div class="flex justify-center text-2xl font-semibold mb-1 text-white col-span-2  flex space-x-20">
                        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg" >
                            <label for="texto_enunciado" id="texto_enunciado" name="texto_enunciado">Escriba el enunciado (opcional).</label>
                            <br>
                            <input class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="text" id="texto_enunciado" name="texto_enunciado" placeholder="Ingrese el texto del enunciado">
                        </div>
                        
                        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                            <label for="imagen_enunciado">Imagen Enunciado:</label>
                            <br>
                            <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="file" id="imagen_enunciado" name="imagen_enunciado">
                        </div>
                    </div>
                </div>
                <br>
            </form>
        </div>
    </div>
    <br>
    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <!--Contenedor Botón-->
        <div class="flex justify-center text-2xl font-bold mb-4 text-white">
            <button class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">GUARDAR</button>
        </div>
    </div>
</x-app-layout>