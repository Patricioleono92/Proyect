<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
  <div class="bg-no-repeat bg-cover bg-center relative" style="background-image: url('{{ asset('images/fondoMantencion.jpeg') }}' ) ">
    <div class="absolute bg-gradient-to-b from-blue-200 to-white-400 opacity-75 inset-0 z-0"></div>
    <div class="min-h-screen sm:flex sm:flex-row mx-0 justify-center me-145">
      <div class="flex-col flex self-center p-10 sm:max-w-5xl xl:max-w-2xl z-10">
      </div>
      <div class="flex justify-center self-center z-10 opacity-95">
        <div class="p-12 bg-white mx-auto rounded-2xl w-100 ">
          <div class="mb-4">
            <h3 class="font-semibold text-2xl text-gray-800">Iniciar Session</h3>
            <p class="text-gray-500">Si no tiene cuenta comuniquese con su administrador de sistemas</p>
          </div>
          <div class="space-y-5">
            <div class="space-y-2">
              <label class="text-sm font-medium text-gray-700 tracking-wide">Usuario</label>
              <input class=" w-full text-base px-4 py-2 border  border-gray-300 rounded-lg focus:outline-none focus:border-green-400" type="" placeholder="patricio.leon">
            </div>
            <div class="space-y-2">
              <label class="mb-5 text-sm font-medium text-gray-700 tracking-wide">
                Contraseña
              </label>
              <input class="w-full content-center text-base px-4 py-2 border  border-gray-300 rounded-lg focus:outline-none focus:border-green-400" type="" placeholder="Ingresa tu contraseña aqui">
            </div>
            <div>
              <button type="submit" class="w-full flex justify-center bg-blue-100  hover:bg-blue-500 text-gray-100 p-3  rounded-full tracking-wide font-semibold  shadow-lg cursor-pointer transition ease-in duration-500">
                Ingresar
              </button>
            </div>
          </div>
          <div class="pt-5 text-center text-gray-400 text-xs">
            <span>
              Creado Por Patricio Leon - TI NHLOR
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>