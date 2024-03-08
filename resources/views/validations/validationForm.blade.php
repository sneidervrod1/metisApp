    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-center text-gray-800 dark:text-gray-200 leading-tight">
                Formulario de Validación TAM
            </h2>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        
                            <form action=" {{ route('validation.recibir') }}" method="POST">

                                {{ csrf_field() }}
                                <h3 class="mb-4 text-center font-bold">Factores que influyen en la percepción de usabilidad</h3>
                                <label for="pregunta1" class="block mt-5 mb-2 text-sm font-medium text-gray-900 dark:text-white">1. ¿Considera usted que la aplicación es intuitiva, de fácil uso y comprensión?</label>
                                    <select required id="pregunta1" name="pregunta1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    
                                        <option value="0">Totalmente en desacuerdo</option>
                                        <option value="25">En desacuerdo</option>
                                        <option value="50">Ni de acuerdo ni en desacuerdo </option>
                                        <option value="75">De acuerdo </option>
                                        <option value="100">Totalmente de acuerdo</option>
                                    </select>
                                
                                <label for="pregunta2" class=" block mt-5 mb-2 text-sm font-medium text-gray-900 dark:text-white">2.	¿Considera usted que para el propósito de la aplicación las instrucciones son claras y concisas?</label>
                                    <select id="pregunta2" name="pregunta2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                      
                                        <option value="0">Totalmente en desacuerdo</option>
                                        <option value="25">En desacuerdo</option>
                                        <option value="50">Ni de acuerdo ni en desacuerdo </option>
                                        <option value="75">De acuerdo </option>
                                        <option value="100">Totalmente de acuerdo</option>
                                    </select>
                                
                                <label for="pregunta3" class="block mb-2 mt-5 text-sm font-medium text-gray-900 dark:text-white">3.	¿Considera que la aplicación es fácil de usar, incluso si no tiene experiencia con aplicaciones educativas en línea?</label>
                                    <select id="pregunta3" name="pregunta3" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option value="0">Totalmente en desacuerdo</option>
                                        <option value="25">En desacuerdo</option>
                                        <option value="50">Ni de acuerdo ni en desacuerdo </option>
                                        <option value="75">De acuerdo </option>
                                        <option value="100">Totalmente de acuerdo</option>
                                    </select>
                             
                                <h3 class="mb-4 text-center font-bold mt-5">De acuerdo con el Modelo de competencias lingüísticas en inglés</h3>

                                <label for="pregunta4" class="block mb-2 mt-5 text-sm font-medium text-gray-900 dark:text-white">4.	Me será de fácil entendimiento. </label>
                                    <select id="pregunta4" name="pregunta4" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option value="0">Totalmente en desacuerdo</option>
                                        <option value="25">En desacuerdo</option>
                                        <option value="50">Ni de acuerdo ni en desacuerdo </option>
                                        <option value="75">De acuerdo </option>
                                        <option value="100">Totalmente de acuerdo</option>
                                    </select>

                                <label for="pregunta5" class="block mb-2 mt-5 text-sm font-medium text-gray-900 dark:text-white"> 5.	Necesitaré ayuda para entenderlo</label>
                                    <select id="pregunta5" name="pregunta5" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option value="0">Totalmente en desacuerdo</option>
                                        <option value="25">En desacuerdo</option>
                                        <option value="50">Ni de acuerdo ni en desacuerdo </option>
                                        <option value="75">De acuerdo </option>
                                        <option option value="100">Totalmente de acuerdo</option>
                                    </select>
                                
                                    <label for="pregunta6" class="block mb-2 mt-5 text-sm font-medium text-gray-900 dark:text-white"> 6. Me adaptaré fácilmente a su uso</label>
                                    <select id="pregunta6" name="pregunta6" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option value="0">Totalmente en desacuerdo</option>
                                        <option value="25">En desacuerdo</option>
                                        <option value="50">Ni de acuerdo ni en desacuerdo </option>
                                        <option value="75">De acuerdo </option>
                                        <option option value="100">Totalmente de acuerdo</option>
                                    </select>
                                    <h3 class="mb-4 mt-5 text-center font-bold">Factores que influyen en la percepción de utilidad  </h3>

                                    <label for="pregunta7" class="block mb-2  mt-5 text-sm font-medium text-gray-900 dark:text-white"> 7.	¿Considera usted que el modelo de competencias de inglés sería útil para medir su nivel en las competencias del idioma?</label>
                                    <select id="pregunta7" name="pregunta7" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option value="0">Totalmente en desacuerdo</option>
                                        <option value="25">En desacuerdo</option>
                                        <option value="50">Ni de acuerdo ni en desacuerdo </option>
                                        <option value="75">De acuerdo </option>
                                        <option option value="100">Totalmente de acuerdo</option>
                                    </select>
                                    <label for="pregunta8" class="block mb-2 mt-5 text-sm font-medium text-gray-900 dark:text-white"> 8.	¿Cree que el modelo de competencias lingüísticas de inglés mejoraría su eficiencia en la tarea de conocer su nivel del idioma?</label>
                                    <select id="pregunta8" name="pregunta8" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option value="0">Totalmente en desacuerdo</option>
                                        <option value="25">En desacuerdo</option>
                                        <option value="50">Ni de acuerdo ni en desacuerdo </option>
                                        <option value="75">De acuerdo </option>
                                        <option option value="100">Totalmente de acuerdo</option>
                                    </select>
                                    <label for="pregunta9" class="block mb-2 mt-5 text-sm font-medium text-gray-900 dark:text-white"> 9.	¿En qué grado se considera usted de acuerdo con el uso del examen basado en el modelo de competencias de inglés para reemplazar los exámenes de medición comerciales como Cambridge o IELTS?</label>
                                    <select id="pregunta9" name="pregunta9" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option value="0">Totalmente en desacuerdo</option>
                                        <option value="25">En desacuerdo</option>
                                        <option value="50">Ni de acuerdo ni en desacuerdo </option>
                                        <option value="75">De acuerdo </option>
                                        <option option value="100">Totalmente de acuerdo</option>
                                    </select>
                                    <label for="pregunta10" class="block mb-2 mt-5 text-sm font-medium text-gray-900 dark:text-white"> 10.	¿En qué grado estaría usted de acuerdo con realizar exámenes de inglés utilizando el modelo de competencias mostrado en el proyecto?</label>
                                    <select id="pregunta10" name="pregunta10" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option value="0">Totalmente en desacuerdo</option>
                                        <option value="25">En desacuerdo</option>
                                        <option value="50">Ni de acuerdo ni en desacuerdo </option>
                                        <option value="75">De acuerdo </option>
                                        <option option value="100">Totalmente de acuerdo</option>
                                    </select>
                                    <label for="pregunta11" class="block mb-2 mt-5 text-sm font-medium text-gray-900 dark:text-white"> 11. ¿En qué grado se considera usted de acuerdo con que la implementación del Modelo de competencias de ingles represente una mejoría en el aprendizaje y dominio del idioma inglés?</label>
                                    <select id="pregunta11" name="pregunta11" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option value="0">Totalmente en desacuerdo</option>
                                        <option value="25">En desacuerdo</option>
                                        <option value="50">Ni de acuerdo ni en desacuerdo </option>
                                        <option value="75">De acuerdo </option>
                                        <option option value="100">Totalmente de acuerdo</option>
                                    </select>

                                    <h3 class="mb-4 mt-5 text-center font-bold">Preguntas de satisfacción  </h3>

                                    <label for="pregunta12" class="block mb-2 mt-5 text-sm font-medium text-gray-900 dark:text-white"> 12. ¿Cree usted que la aplicación es estimulante e interesante de usar?</label>
                                    <select id="pregunta12" name="pregunta12" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option value="0">Totalmente en desacuerdo</option>
                                        <option value="25">En desacuerdo</option>
                                        <option value="50">Ni de acuerdo ni en desacuerdo </option>
                                        <option value="75">De acuerdo </option>
                                        <option option value="100">Totalmente de acuerdo</option>
                                    </select>
                                    <label for="pregunta13" class="block mb-2 mt-5 text-sm font-medium text-gray-900 dark:text-white"> 13. Después de haber usado la aplicación, ¿cree que la usaría con frecuencia con el fin de evaluar nuevamente las competencias lingüísticas en inglés?</label>
                                    <select id="pregunta13" name="pregunta13" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option value="0">Totalmente en desacuerdo</option>
                                        <option value="25">En desacuerdo</option>
                                        <option value="50">Ni de acuerdo ni en desacuerdo </option>
                                        <option value="75">De acuerdo </option>
                                        <option option value="100">Totalmente de acuerdo</option>
                                    </select>
                                    <label for="pregunta14" class="block mb-2 mt-5 text-sm font-medium text-gray-900 dark:text-white">14. En general, ¿recomendaría esta aplicación a otros?</label>
                                    <select id="pregunta14" name="pregunta14" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option value="0">Totalmente en desacuerdo</option>
                                        <option value="25">En desacuerdo</option>
                                        <option value="50">Ni de acuerdo ni en desacuerdo </option>
                                        <option value="75">De acuerdo </option>
                                        <option option value="100">Totalmente de acuerdo</option>
                                    </select>
                                    <label for="pregunta15" class="block mb-2 mt-5 text-sm font-medium text-gray-900 dark:text-white"> 15. ¿considera que la aplicación proporciona una retroalimentación útil para mejorar en las competencias lingüísticas en inglés?</label>
                                    <select id="pregunta15" name="pregunta15" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option value="0">Totalmente en desacuerdo</option>
                                        <option value="25">En desacuerdo</option>
                                        <option value="50">Ni de acuerdo ni en desacuerdo </option>
                                        <option value="75">De acuerdo </option>
                                        <option option value="100">Totalmente de acuerdo</option>
                                    </select>

                                <input class="mt-5 bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded" type="submit" value="Enviar"/>
                            </form>          
                    </div>
                </div>  
            </div>
        </div>
    </x-app-layout>