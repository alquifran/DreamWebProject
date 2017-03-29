<form method="POST">
	<label for="direccion">Dirección</label>
    <input type="text" name="direccion" required
        value="<?= $piso->getDireccion() ?>" ><br>
	<label for="precio">Precio</label>
    <input type="number" step="0.01" name="precio"
        value= "<?= $piso->getPrecio() ?>"><br>
	<label for="descripcion">Descripción</label>
    <input type="text" name="descripcion"
    value="<?= $piso->getDescripcion() ?>"><br>
	<input type="submit" value="Modificar piso">
</form>
<br>
<a href='../show/<?= $piso->getId() ?>'><button>Cancelar</button></a>
<a href='../'><button>Volver al listado</button></a>