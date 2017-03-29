<h1><?= $pageTitle ?? 'Lista de clientes' ?></h1>
<ul>
	<?php foreach ($clients as $client): ?>
		<li><?= $client->getName(); ?></li>

	<?php endforeach ?>
</ul>
