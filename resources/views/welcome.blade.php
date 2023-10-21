<h2>resultados</h2>

@forelse($datos as $dato)


    <p> Nombre {{$dato['name']}} </p>
    @empty
    <p>No hay datos para mostrar</p>
    @endforelse


