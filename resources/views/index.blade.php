<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablas Horizontales</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        td button {
            margin-right: 5px;
        }
    </style>
</head>
<body>
<h1>Datos Cargados</h1>
<form method="get" action="{{ route('generateData') }}">

    @csrf
    <button type="submit">Generar 10 Registros</button>
</form>
<form method="post" action="{{route('destroyAll')}}">
    @csrf
    @method('DELETE')
    <div>     <input type="submit" value="Borrar Registros"></div>

</form>

<table>
    <thead>
    <tr>
        <th>Nombre</th>

        <th>Acciones</th>
    </tr>
    </thead>
    <tbody>
    @forelse ($users as $user)
        <tr>
            <td>{{ $user['name'] }}</td>

            <td>
               <a> <a href="{{route('edit',$user)}}"> Actualizar |</a>
                <a>
                    <form method="post" action="{{route('destroy',['user'=>$user])}}">
                        @csrf
                        @method('DELETE')
                        <div>     <input type="submit" value="borrar"></div>

                    </form>
                </a>

                <a href="{{route('show',['user'=>$user])}}">Mostrar</a>
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="4">No hay datos cargados.</td>
        </tr>
    @endforelse
    </tbody>
</table>


</body>
</html>
