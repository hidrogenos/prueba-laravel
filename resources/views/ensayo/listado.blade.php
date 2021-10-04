<!DOCTYPE html>
<html>
<style>
table,
td {
    border: 1px solid #333;
}

th{
    background-color: #333;
    color: #fff;
}
.w-5, .h-5{
    display: none;
}
</style>
<body>

<h2>Ensayos</h2>

<form action="{{ action('EnsayoController@index') }}" method="get">
    @csrf
    <label for="filtro">filtrar x nombre</label>
    <input type="text" name="filtro" id="filtro" required>
    <input type="submit" value="filtrar!">
    <br>
</form>
<br>
<form action="{{ route('byDate') }}" method="post">
    @csrf
    <label for="filtro">filtrar x fecha</label>
    <input placeholder="fecha inicial" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="fechai" name="fechai" required/>
    <input placeholder="fecha final" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="fechaf" name="fechaf" required/>
    <input type="submit" value="filtrar!">
    <br>
</form>

<hr>

<table style="width:100%">
  <tr>
    <th>id</th>
    <th>muestra_id</th>
    <th>nombre</th>
    <th>especificacion</th>
    <th>resultado</th>
    <th>created_at</th>
    <th>updated_at</th>
  </tr>
  @foreach($ensayos as $ensayo)
    <tr>
        <td>{{ $ensayo->id }}</td>
        <td>{{ $ensayo->muestra_id }}</td>
        <td>{{ $ensayo->nombre }}</td>
        <td>{{ $ensayo->especificacion }}</td>
        <td>{{ $ensayo->resultado }}</td>
        <td>{{ $ensayo->created_at }}</td>
        <td>{{ $ensayo->updated_at }}</td>
    </tr>
  @endforeach
</table>

{{ $ensayos->links()}}

</body>
</html>
