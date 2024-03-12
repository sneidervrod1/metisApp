<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>S.M.C.I</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        
        @vite('resources/css/app.css')
        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
        </style>
    </head>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            {{-- CODIGO DE MENU DE NAVEGACION--}}
            
            <div class="sm:fixed sm:top-0 sm:left- p-6 text-left z-10">
                <a href="{{ url('/') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500" >Inicio </a>
                <a href="{{ url('/modelo') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"> Modelo </a>
                <a href="#acercadelproyecto" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"> Validación </a>
                <a href="#contribuidores" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"> Contribuidores </a>
            </div>

            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">{{ __('Dashboard') }}</a>
                    @else
                    
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"> {{  __('Login') }}</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"> {{ __('Register') }}</a>
                        @endif
                    @endauth
                </div>
            @endif
            {{-- BODY --}}
            <div class="max-w-7xl mx-auto p-6 lg:p-8">
                
                {{-- PRIMERA VISTA --}}
                <div class="mt-16">
                    <div id="infomodelo" class="">
                        <div class="pt-20 pb-10 mx-auto lg:text-center">
                        
                            <h1 class="mt-2 text-8xl font-extrabold tracking-tight text-white sm:text-4xl">Modelo de competencias lingüísticas.</h1>
                            
                            <p class="mt-6 text-lg leading-8 text-gray-400 text-justify">
                                Para este proyecto, el modelo usado fue el modelo ALTE (Association of Language Testers in Europe),
                                un modelo relacionado con el Marco Común Europeo de Referencia (MCER) usado para la evaluación del rendimiento lingüístico en inglés.
                                ALTE tiene como propósito el estandarizar y determinar de manera progresiva el rendimiento de los usuarios en el idioma inglés.
                                El marco ALTE nace de un trabajo extenso en donde se analiza de manera exhaustiva el contenido de los exámenes existentes, 
                                los tipos de tareas en ellos descritas y los perfiles de los candidatos que los toman.
                                </p>
                            <p class="mt-6 text-lg leading-8 text-gray-400 text-justify">
                                Las declaraciones que se encuentran en el modelo describen las habilidades requeridas para alcanzar los niveles de competencia establecidos; 
                                estos se dividen en 6 niveles que van desde A1 (principiante) hasta C2 (Dominio), cada nivel se ha definido por descriptores
                                específicos que detallan las habilidades que un usuario debe demostrar para alcanzarlo.
                                </p>
                          </div>  
                    </div>
                </div>
                {{--FIN PRIMERA VISTA --}}

            {{--MAPA A1--}}
               
            <div class="col-span-9 text-2xl font-bold mb-4 text-white sm:text-4xl border-solid border-2 border-orange-900 text-center bg-orange-900 hover:bg-orange-800"> A1 </div>
            
                <div class="grid grid-cols-9 gap-1 text-white text-center ">
                    <div class="col-span-3 border-solid border-2 border-orange-900">
                        <div class="border-solid border-1 border-orange-900">Reading</div>
                    </div>
                    
                    <div class="col-span-3 border-solid border-2 border-orange-900">
                        <div class="border-solid border-1 border-orange-900">Speaking-Listening</div>
                        
                    </div>
                    
                    <div class="col-span-3 border-solid border-2 border-orange-900">
                        <div class="border-solid border-1 border-orange-900">Writing</div>
                    </div>
                </div>
                
                <div class="grid grid-cols-9 gap-1 text-white text-center ">
                    <div class="col-span-3 border-solid border-2 border-orange-900">
                        <div class="grid grid-cols-1 gap-5 text-white text-center">
                            <div class="col-span-1">PUEDE comprender avisos, instrucciones o información básica.</div>
                            <div class="col-span-1">PUEDE reconocer palabras, frases cortas, libros, objetos, juguetes, propagandas y lugares conocidos.</div>
                            <div class="col-span-1">PUEDE relacionar ilustraciones con oraciones simples.</div>
                        </div>
                    </div>
                    
                    <div class="col-span-3 border-solid border-2 border-orange-900">
                        <div class="grid grid-cols-1 gap-5 text-white text-center">
                            <div class="col-span-1">PUEDE comprender instrucciones básicas o participar en una conversación objetiva básica sobre un tema predecible.</div>
                            <div class="col-span-1">PUEDE comprender preguntas sobre sí, su familia y entorno.</div>
                            <div class="col-span-1">PUEDE identificar a las personas que participan en una conversación.</div>
                        </div>
                    </div>
                    
                    <div class="col-span-3 border-solid border-2 border-orange-900">
                        <div class="grid grid-cols-1 gap-5 text-white text-center">
                            <div class="col-span-1">PUEDE completar formularios básicos con información personal.</div>
                            <div class="col-span-1">PUEDE responder brevemente preguntas con "qué, quién, cuándo y dónde" si se refieren a su entorno más próximo.</div>
                            <div class="col-span-1">PUEDE escribir notas que incluyan horas, fechas y lugares.</div>
                        </div>
                    </div>
                    
                </div>
                </br>
            </br>

            {{--MAPA A2--}}
               
            <div class="col-span-9 text-2xl font-bold mb-4 text-white sm:text-4xl border-solid border-2 border-orange-900 text-center bg-orange-800 hover:bg-orange-700"> A2 </div>
            
            <div class="grid grid-cols-9 gap-1 text-white text-center ">
                <div class="col-span-3 border-solid border-2 border-orange-800">
                    <div class="border-solid border-1 border-orange-800">Reading</div>
                </div>
                
                <div class="col-span-3 border-solid border-2 border-orange-800">
                    <div class="border-solid border-1 border-orange-800">Speaking-Listening</div>
                    
                </div>
                
                <div class="col-span-3 border-solid border-2 border-orange-800">
                    <div class="border-solid border-1 border-orange-800">Writing</div>
                </div>
            </div>
            
            <div class="grid grid-cols-9 gap-1 text-white text-center ">
                <div class="col-span-3 border-solid border-2 border-orange-800">
                    <div class="col-span-1">PUEDE comprender información sencilla dentro de un área conocida, como productos, carteles y libros de texto sencillos o informes sobre asuntos familiares.</div>
                    <div class="col-span-1">PUEDE ubicar en un texto lugares y momentos en donde suceden determinadas acciones.</div>
                    <div class="col-span-1">PUEDE leer y comprender textos auténticos y sencillos sobre acontecimientos concretos asociados a tradiciones culturales que conoce.</div>
                </div>
                
                <div class="col-span-3 border-solid border-2 border-orange-800">
                    <div class="grid grid-cols-1 gap-5 text-white text-center">
                        <div class="col-span-1">PUEDE entender / expresar opiniones o requisitos simples en un contexto familiar.</div>
                        <div class="col-span-1">PUEDE identificar los nombres de los personajes y los eventos principales de un cuento leído apoyado en imágenes, videos o cualquier tipo de material visual.</div>
                        <div class="col-span-1">PUEDE identificar objetos, personas y acciones que me son conocidas en un texto descriptivo corto.</div>
                    </div>
                </div>
                
                <div class="col-span-3 border-solid border-2 border-orange-800">
                    <div class="grid grid-cols-1 gap-5 text-white text-center">
                        <div class="col-span-1">PUEDE completar formularios y escribir cartas o postales breves y sencillas relacionadas con información personal.</div>
                        <div class="col-span-1">PUEDE enlazar frases y oraciones usando conectores que expresan secuencia y adición.</div>
                        <div class="col-span-1">PUEDE usar adecuadamente estructuras y patrones gramaticales de uso frecuente.</div>
                    </div>
                </div>
                
            </div>
        </br>
        </br>
            {{--MAPA B1--}}
               
            <div class="col-span-9 text-2xl font-bold mb-4 text-white sm:text-4xl border-solid border-2 border-orange-700 text-center bg-orange-700 hover:bg-orange-600"> B1 </div>
            
            <div class="grid grid-cols-9 gap-1 text-white text-center">
                <div class="col-span-3 border-solid border-2 border-orange-700">
                    <div class="border-solid border-1 border-orange-700">Reading</div>
                </div>
                
                <div class="col-span-3 border-solid border-2 border-orange-700">
                    <div class="border-solid border-1 border-orange-700">Speaking-Listening</div>
                    
                </div>
                
                <div class="col-span-3 border-solid border-2 border-orange-700">
                    <div class="border-solid border-1 border-orange-700">Writing</div>
                </div>
            </div>
            
            <div class="grid grid-cols-9 gap-1 text-white text-center ">
                <div class="col-span-3 border-solid border-2 border-orange-700">
                    <div class="grid grid-cols-1 gap-5 text-white text-center">
                        <div class="col-span-1">PUEDE comprender información y artículos de rutina, y el significado general de información no rutinaria dentro de un área familiar.</div>
                        <div class="col-span-1">PUEDE identificar la recurrencia de ideas en un mismo texto.</div>
                        <div class="col-span-1">PUEDE diferenciar la estructura organizativa de textos descriptivos, narrativos y argumentativos.</div>
                    </div>
                </div>
                
                <div class="col-span-3 border-solid border-2 border-orange-700">
                    <div class="grid grid-cols-1 gap-5 text-white text-center">
                        <div class="col-span-1">PUEDE expresar opiniones o requisitos simples en un contexto familiar.</div>
                        <div class="col-span-1">PUEDE identificar ideas geneales específicas en textos orales, si se tiene conocimiento del tema y del vocabulario utilizado.</div>
                        <div class="col-span-1">PUEDE reconocer los elementos del enlace de un texto oral para identificar su secuencia.</div>
                    </div>
                </div>
                
                <div class="col-span-3 border-solid border-2 border-orange-700">
                    <div class="grid grid-cols-1 gap-5 text-white text-center">
                        <div class="col-span-1">PUEDE escribir cartas o tomar notas sobre asuntos familiares o predecibles.</div>
                        <div class="col-span-1">PUEDE organizar párrafos coherentes cortos, teniendo en cuenta elementos formales del lenguaje como ortografía y puntuación.</div>
                        <div class="col-span-1">PUEDE describir experiencias y acontecimientos , sueños, esperanzas y ambiciones además de dar brevemente razones y explicaciones de opiniones y planes.</div>
                    </div>
                </div>
                
            </div>
        </br>
        </br>
            {{--MAPA B2--}}
               
            <div class="col-span-9 text-2xl font-bold mb-4 text-white sm:text-4xl border-solid border-2 border-orange-600 text-center bg-orange-600 hover:bg-orange-500"> B2 </div>
            
            <div class="grid grid-cols-9 gap-1 text-white text-center ">
                <div class="col-span-3 border-solid border-2 border-orange-600">
                    <div class="border-solid border-1 border-orange-600">Reading</div>
                </div>
                
                <div class="col-span-3 border-solid border-2 border-orange-600">
                    <div class="border-solid border-1 border-orange-600">Speaking-Listening</div>
                    
                </div>
                
                <div class="col-span-3 border-solid border-2 border-orange-600">
                    <div class="border-solid border-1 border-orange-600">Writing</div>
                </div>
            </div>
            
            <div class="grid grid-cols-9 gap-1 text-white text-center ">
                <div class="col-span-3 border-solid border-2 border-orange-600">
                    <div class="grid grid-cols-1 gap-5 text-white text-center">
                        <div class="col-span-1">PUEDE analizar textos para extraer información relevante.</div>
                        <div class="col-span-1">PUEDE comprender ideas principales de textos complejos sobre temas concretos y abstractos, incluídas discusiones técnicas en su campo de especialización.</div>
                        <div class="col-span-1">Puede comprender instrucciones o consejos detallados.</div>
                    </div>
                </div>
                
                <div class="col-span-3 border-solid border-2 border-orange-600">
                    <div class="grid grid-cols-1 gap-5 text-white text-center">
                        <div class="col-span-1">PUEDE seguir charlas sobre temas familiares y  mantener una conversación sobre una gama bastante amplia gama de temas.</div>
                        <div class="col-span-1">PUEDE interactuar con cierto grado de fluidez y espontaneidad haciendo posible la interacción con hablantes nativos sin tensión por ninguna de las dos partes.</div>
                        <div class="col-span-1">Puede dar charlas sobre temas conocidos haciéndose entender y comprendiendo las respuestas de la otra parte en la conversación.</div>
                    </div>
                </div>
                
                <div class="col-span-3 border-solid border-2 border-orange-600">
                    <div class="grid grid-cols-1 gap-5 text-white text-center">
                        <div class="col-span-1">PUEDE tomar notas mientras alguien habla o escribir una carta que incluya solicitudes no estándar.</div>
                        <div class="col-span-1">PUEDE producir textos claros y detallados sobre una amplia gama de temas y explicar un punto de vista sobre un tema de actualidad.</div>
                        <div class="col-span-1">PUEDE redactar textos que expresen opiniones sobre una amplia gama de temas presentando sus ventajas y desventajas .</div>
                    </div>
                </div>
                
            </div>
        </br>
        </br>
            {{--MAPA C1--}}
               
            <div class="col-span-9 text-2xl font-bold mb-4 text-white sm:text-4xl border-solid border-2 border-orange-500 text-center bg-orange-500 hover:bg-orange-400"> C1 </div>
            
            <div class="grid grid-cols-9 gap-1 text-white text-center ">
                <div class="col-span-3 border-solid border-2 border-orange-500">
                    <div class="border-solid border-1 border-orange-500">Reading</div>
                </div>
                
                <div class="col-span-3 border-solid border-2 border-orange-500">
                    <div class="border-solid border-1 border-orange-500">Speaking-Listening</div>
                    
                </div>
                
                <div class="col-span-3 border-solid border-2 border-orange-500">
                    <div class="border-solid border-1 border-orange-500">Writing</div>
                </div>
            </div>
            
            <div class="grid grid-cols-9 gap-1 text-white text-center ">
                <div class="col-span-3 border-solid border-2 border-orange-500">
                    <div class="grid grid-cols-1 gap-5 text-white text-center">
                        <div class="col-span-1">PUEDE leer lo suficientemente rápido como para hacer frente a una curso académico, y para leer los medios de comunicación.</div>
                        <div class="col-span-1">PUEDE realizar lecturas en busca de información o comprender correspondencia no estándar.</div>
                        <div class="col-span-1">PUEDE comprender una amplia gama de textos extensos y exigentes, y reconocer sus significados implícitos.</div>
                    </div>
                </div>
                
                <div class="col-span-3 border-solid border-2 border-orange-500">
                    <div class="grid grid-cols-1 gap-5 text-white text-center">
                        <div class="col-span-1">PUEDE contribuir eficazmente a las reuniones y seminarios dentro de su propia área de trabajo.</div>
                        <div class="col-span-1">PUEDE mantener una conversación informal con un buen grado de fluidez, manejando de expresiones abstractas.</div>
                        <div class="col-span-1">PUEDE utilizar el lenguaje de forma flexible y eficaz con fines sociales, académicos y profesionales.</div>
                    </div>
                </div>
                
                <div class="col-span-3 border-solid border-2 border-orange-500">
                    <div class="grid grid-cols-1 gap-5 text-white text-center">
                        <div class="col-span-1">PUEDE preparar/redactar correspondencia profesional y tomar notas razonablemente precisas en reuniones.</div>
                        <div class="col-span-1">PUEDE producir textos claros, bien estructurados y detallados sobre temas complejos, mostrando el uso controlado de patrones organizaivos, conectores y dispositivos de cohesión.</div>
                        <div class="col-span-1">PUEDE escribir un ensayo que demuestre su capacidad para comunicar.</div>
                    </div>
                </div>
                
            </div>
        </br>
        </br>
            {{--MAPA C2--}}
               
            <div class="col-span-9 text-2xl font-bold mb-4 text-white sm:text-4xl border-solid border-2 border-orange-400 text-center bg-orange-400 hover:bg-orange-300"> C2 </div>
            
            <div class="grid grid-cols-9 gap-1 text-white text-center ">
                <div class="col-span-3 border-solid border-2 border-orange-400">
                    <div class="border-solid border-1 border-orange-400">Reading</div>
                </div>
                
                <div class="col-span-3 border-solid border-2 border-orange-400">
                    <div class="border-solid border-1 border-orange-400">Speaking-Listening</div>
                    
                </div>
                
                <div class="col-span-3 border-solid border-2 border-orange-400">
                    <div class="border-solid border-1 border-orange-400">Writing</div>
                </div>
            </div>
            
            <div class="grid grid-cols-9 gap-1 text-white text-center ">
                <div class="col-span-3 border-solid border-2 border-orange-400">
                    <div class="grid grid-cols-1 gap-5 text-white text-center">
                        <div class="col-span-1">PUEDE entender documentos, correspondencia e informes, incluídos los detalles más finos de textos complejos.</div>
                        <div class="col-span-1">PUEDE comprender prácticamente todo lo que lee.</div>
                        <div class="col-span-1">PUEDE resumir información de fuentes escritas, reconstruyento argumentos y relatos en una presentación coherente.</div>
                    </div>
                </div>
                
                <div class="col-span-3 border-solid border-2 border-orange-400">
                    <div class="grid grid-cols-1 gap-5 text-white text-center">
                        <div class="col-span-1">PUEDE asesorar o hablar sobre temas complejos o temas delicados, comprender referencias coloquiales y abordar con confianza preguntas hostiles.</div>
                        <div class="col-span-1">PUEDE expresarse de maneraa espontánea, muy fluída y precisa, diferenciando matices más finos de significado, inclusoen las situaciones más complejas.</div>
                        <div class="col-span-1">PUEDE comprender prácticamente todo lo que oye.</div>
                    </div>
                </div>
                
                <div class="col-span-3 border-solid border-2 border-orange-400">
                    <div class="grid grid-cols-1 gap-5 text-white text-center">
                        <div class="col-span-1">PUEDE escribir cartas sobre cualquier tema y notas completas de reuniones o seminarios con buena expresión y precisión.</div>
                        <div class="col-span-1">PUEDE resumir información de fuentes escritas, reconstruyento argumentos y relatos en una presentación coherente.</div>
                        <div class="col-span-1">PUEDE redactar informes con coherencia usando elementos literarios complejos.</div>
                    </div>
                </div>
                
            </div>
        </br>
        </br>
                
                {{--Button--}}
                <div class="container py-10 px-10 mx-0 min-w-full flex flex-col items-center">
                    <h2 class="text-5xl mb-3 text-white">Marco ALTE</h2>
                    <a href="https://www.cambridgeenglish.org/images/28906-alte-can-do-document.pdf" target="_blank">
                      <button class="bg-red-900 text-white hover:bg-red-400 font-bold py-2 px-4 mt-3 border-double border-4 border-red-500">Ver más</button>
                    </a>
                  </div>
                  
                {{--Button--}}

                {{--extras --}}
                <div class="flex justify-center mt-16 px-0 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 dark:text-gray-400 sm:text-left">
                        <div class="flex items-center gap-4">
                            <a href="https://github.com/sponsors/taylorotwell" class="group inline-flex items-center hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="-mt-px mr-1 w-5 h-5 stroke-gray-400 dark:stroke-gray-600 group-hover:stroke-gray-600 dark:group-hover:stroke-gray-400">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                </svg>
                                Sponsor
                            </a>
                        </div>
                    </div>

                    <div class="ml-4 text-center text-sm text-gray-500 dark:text-gray-400 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>