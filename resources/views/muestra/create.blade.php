<form action="{{ isset($muestra) ? action('MuestraController@doUpdate') : action('MuestraController@save') }}" method="post">
    @csrf

    @if(isset($muestra) && is_object($muestra))
    <input type="hidden" name="id" id="id" value="{{ $muestra->id }}">
    @endif

    <label for="lote">Lote</label>
    <input type="text" name="lote" id="lote" value="{{ $muestra->lote ?? '' }}">
    <br>
    <label for="cliente">Cliente</label>
    <input type="text" name="cliente" id="cliente" value="{{ $muestra->cliente ?? ''}}">
    <br>
    <label for="producto_id">producto_id</label>
    <input type="text" name="producto_id" id="producto_id" value="{{ $muestra->producto_id ?? ''}}">
    <br>
    <label for="fecha_llegada">fecha_llegada</label>
    <input type="text" name="fecha_llegada" id="fecha_llegada" value="{{ $muestra->fecha_llegada ?? ''}}">
    <br>

    <br>
    <input type="submit" value="save">
</form>