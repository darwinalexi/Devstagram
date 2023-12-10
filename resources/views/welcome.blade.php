<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body class="bg-red-500">
    <header class="w-100 bg-orange-300">
        <h1 class="flex justify-center">TABLA</h1>
    </header>
    <div class="pl-12 pr-12 w-14">
        <table class="bg-sky-200 w-100">
            <tr>
                <th class="border-solid border-2 border-black pl-12 pr-12">ID</th>
                <th class="border-solid border-2 border-black pl-12 pr-12">Nombre</th>
                <th class="border-solid border-2 border-black pl-12 pr-12">Correo</th>
                <th class="border-solid border-2 border-black pl-12 pr-12">Clave</th>
            </tr>
            @foreach ($datos as $item)
                <tr>
                    <td class="border-2 border-black pl-12 pr-12" >{{$item->IDENTIFICACION}}</td>
                    <td class="border-2 border-black pl-12 pr-12">{{$item->nombre}}</td>
                    <td class="border-2 border-black pl-12 pr-12">{{$item->correo}}</td>
                    <td class="border-2 border-black pl-12 pr-12">{{$item->clave}} </td>
                </tr>
            @endforeach

            <div class="w-80">
                <form method="post">
                    <label>ingrese </label>
                </form>
            </div>
        </table>
    </div>
</body>
</html>
