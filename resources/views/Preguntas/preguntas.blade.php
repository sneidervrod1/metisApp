<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-center text-gray-800 dark:text-gray-200 leading-tight">
            CREAR PREGUNTAS
        </h2>
    </x-slot>
    </br>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <form action="" method="post" enctype="multipart/form-data">
                <!--Contenedor principal ID-->
                <div>
                    <div class="flex justify-center text-2xl font-semibold mb-4 text-white"> 
                        <div >
                            <div class="grid justify-items-end">
                            <label class="justify-items-end" for="id">ID: {{}}</label>
                            </div>
                        </div>
                    </div>
                     <br>
                    <!--Contenedor principal de separadores-->
                    <div class="flex justify-center text-2xl font-semibold mb-1 text-white col-span-2  flex space-x-20">
                        <!--Contenedor Izquierdo-->
                        <div class="col-span-1">
                            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg" >
                                <label for="enunciadoPregunta" id="enunciadoPregunta" name="enunciadoPregunta">Escriba el enunciado de la pregunta (opcional).</label>
                                <br>
                                <input class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="text" id="texto_pregunta" name="texto_pregunta" placeholder="Escriba la pregunta">
                            </div>
                            
                            <div class="col-span-1 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                                <label for="imagen_pregunta">Imagen Pregunta:</label>
                                <br>
                                <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="file" id="imagen_pregunta" name="imagen_pregunta">
                            </div>
                        </div>
                    <!--Contenedor Derecho-->
                    <div class="col-span-1">
                        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                            <label for="cantidad_opciones">Cantidad de Opciones:</label>
                            <br>
                            <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="number" id="cantidad_opciones" name="cantidad_opciones">
                        </div>
                        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">  
                            <label for="peso_pregunta">Peso Pregunta (Obligatorio):</label>
                            <br>
                            <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="number" id="peso_pregunta" name="peso_pregunta" required>
                        </div>
                        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg" >
                        <div >
                            <label for="respuesta_correcta">Respuesta Correcta:</label>
                            <br>
                            <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="text" id="respuesta_correcta" name="respuesta_correcta">
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
            <button class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">Agregar Pregunta</button>
        </div>
    </div>
</x-app-layout>