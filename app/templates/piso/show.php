<?php $pageTitle = $piso->getDireccion() ?>
<h2>Dirección: <?= $piso->getDireccion() ?></h2>
<h2>Precio: <?= $piso->getPrecio() ?>€</h2>
<p>Descripción: <?= $piso->getDescripcion() ?></p>

<p>
<a href='../'><button>Volver al listado</button></a>
<a href='../update/<?= $piso->getId(); ?>'><button>Modificar</button></a>
<a href='../delete/<?= $piso->getId(); ?>'><button>Eliminar</button>
</a>