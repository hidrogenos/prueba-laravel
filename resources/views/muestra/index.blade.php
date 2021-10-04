<h1>CRUD Muestras</h1>
<h3><a href="{{ action('MuestraController@create') }}">Create Muestra</a></h3>

@if(session('status'))
    <p style="background-color: #0ef40e; color:white">
        <strong>
            {{session('status')}}
        </strong>
    </p>
@endif

<ul>
    @foreach($muestras as $muestra)
    <li>
        <p><a href="{{ action('MuestraController@detail', ['id' => $muestra->id]) }}">{{ $muestra->cliente }}</a></p>
        <p>&nbsp; producto: <strong>{{ $muestra->producto->nombre}}</strong></p>
        <p>&nbsp; tipo_producto: <strong>{{ $muestra->producto->tipo_producto->nombre}}</strong></p>
        <p>&nbsp; ENSAYOS:</p>
        
        @foreach($muestra->ensayos as $ensayo)
            <p>&nbsp;&nbsp; <strong>{{ $ensayo->nombre }}</strong></p>
        @endforeach
        
    </li>
    @endforeach
</ul>