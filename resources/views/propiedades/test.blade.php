<label for="titulo">titulo: </label>
<input type="text" name="titulo" required value="{{ $data['propiedad']['titulo'] }}" id="titulo">
<br>
<label for="descripcion">descripcion: </label>
<input type="text" name="descripcion" required value="{{ $data['propiedad']['descripcion'] }}" id="descripcion">
<br>
<label for="precio">precio: </label>
<input type="text" name="precio" required value="{{ $data['propiedad']['precio'] }}" id="precio">
<br>
<label for="direccion">Direccion: </label>
<input type="text" name="direccion" required value="{{ $data['propiedad']['direccion'] }}" id="direccion">
<br>
<label for="habitaciones">habitaciones: </label>
<input type="text" name="habitaciones" required value="{{ $data['propiedad']['habitaciones'] }}" id="titulo">
<br>
<label for="WC">WC: </label>
<input type="text" name="WC" required value="{{ $data['propiedad']['WC'] }}" id="WC">
<br>
<label for="plantas">plantas: </label>
<input type="text" name="plantas" required value="{{ $data['propiedad']['plantas'] }}" id="plantas">
<br>
<label for="tipo">tipo: </label>
<input type="text" name="tipo" required value="{{ $data['propiedad']['tipo'] }}" id="tipo">
<br>
<label for="size">size: </label>
<input type="text" name="size" required value="{{ $data['propiedad']['size'] }}" id="size">
<br>
<input type="submit" value="envia">
