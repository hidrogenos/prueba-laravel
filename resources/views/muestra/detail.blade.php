<h3>{{$muestra->cliente}}</h3>

<a href="{{ action('MuestraController@delete', ['id' => $muestra->id]) }}">Delete</a>
<br>
<a href="{{ action('MuestraController@update', ['id' => $muestra->id]) }}">Update</a>