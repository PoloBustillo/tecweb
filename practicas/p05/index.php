<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Registro al Concurso</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style type="text/css">
        ol,
        ul {
            list-style-type: none;
        }
    </style>
</head>

<body>
    <div class="m-10">
        <section>
            <h1 class="text-4xl font-extrabold text-black">Registro al Concurso &ldquo;Chidos mis Tenis&rdquo;</h1>

            <p class="mt-4 text-justify">¿Quieres cambiar tus viejos tenis por un par personalizado de Tenis
                Mike&#174;?<br><br>Justifica el por qué tus tenis se <em>tienen que</em> ir y tú puedes ser uno de los
                diez
                afortunados ganadores.</p>

        </section>
        <form class="mx-auto" action="http://52.43.117.247/neo/classroom/tw/concurso.php" method="POST">
            <section class="p-8 mx-10 max-w-[100%]">
                <div class="my-4">
                    <p class="mt-4 text-2xl font-extrabold">Información del Participante</p>
                </div>
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Nombre</label>
                <input type="text" name="name" id="name"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg w-full p-2.5" />
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                <input type="email" name="email" id="email"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg w-full p-2.5" />
                <label for="phone" class="block mb-2 text-sm font-medium text-gray-900">Telefono</label>
                <input type="text" name="phone" id="phone"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg w-full p-2.5" />
                <div class="mt-4">
                    <label for="story" class="block mb-2 text-sm font-medium text-gray-900">Mis tennis son feos
                        porque...</label>
                    <textarea rows="4" cols="60" id="story" name="story"
                        placeholder="No más de 300 caracteres de longitud"
                        class="h-[300px] bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg w-full p-2.5"></textarea>
                </div>


            </section>
            <section class="px-8 mt-4 mx-10 max-w-[100%]">
                <div class="my-4">
                    <h2 class="mt-4 text-2xl font-extrabold">Diseña tus Mike personalizados:</h2>
                    <p>Diseño personalizado del Tenis</p>
                </div>
                <div>
                    <div class="p-4">
                        <fieldset>
                            <legend>
                                <p>Color <em>(escoge uno)</em>:</p>
                            </legend>
                            <div>
                                <input type="radio" name="color" value="rojo" id="rojo" />
                                <label for="rojo">Rojo</label>
                            </div>
                            <div>
                                <input type="radio" name="color" value="azul" id="azul" />
                                <label for="azul">Azul</label>
                            </div>
                            <div>
                                <input type="radio" name="color" value="negro" id="negro" />
                                <label for="negro">Negro</label>
                            </div>
                            <div>
                                <input type="radio" name="color" value="plateado" id="plateado" />
                                <label for="plateado">Plateado</label>
                            </div>
                        </fieldset>
                    </div>
                    <div class="p-4">
                        <fieldset>
                            <legend>Características <em>(escoge tantas como quieras)</em>:</legend>
                            <ul>
                                <li>
                                    <input type="checkbox" name="features[]" value="Cordones brillantes"
                                        id="cordones" />
                                    <label for="cordones">Cordones brillantes</label>
                                </li>
                                <li>
                                    <input type="checkbox" name="features[]" value="Logo metálico" id="logo" checked />
                                    <label for="logo">Logo metálico</label>
                                </li>
                                <li>
                                    <input type="checkbox" name="features[]" value="Suela luminosa" id="suela" />
                                    <label for="suela">Suela luminosa</label>
                                </li>
                                <li>
                                    <input type="checkbox" name="features[]" value="WiFi integrado" id="wifi" />
                                    <label for="wifi">WiFi integrado</label>
                                </li>
                            </ul>
                        </fieldset>
                    </div>
                    <div class="p-4">
                        <fieldset>
                            <legend>Talla</legend>
                            <p>Las medidas reflejan el estándar masculino:</p>
                            <select name="size" id="size"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg w-full p-2.5">
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                            </select>
                        </fieldset>
                    </div>
                </div>
            </section>
            <div class="flex flex-row w-full p-8 mx-10 max-w-[100%]">
                <div class="grid grid-cols-2 gap-4 text-center">
                    <button type="submit"
                        class="flex float-end my-6 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5">Chidos
                        mis Tennis!!</button>
                    <button type="reset"
                        class="flex float-end my-6 text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5">Limpiar</button>
                </div>
            </div>
        </form>
</body>

</html>