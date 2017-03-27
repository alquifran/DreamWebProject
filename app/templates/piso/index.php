<h1>Listado de pisos</h1>
<ul>
	<?php foreach ($pisos as $piso): ?>
		<li><a href='show/<?= $piso->getId(); ?>'><?= $piso->getDireccion() ?></a></li>
	<?php endforeach ?>
</ul>

<a href='add'><button>Añadir piso</button></a>
