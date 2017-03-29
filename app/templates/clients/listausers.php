<h1><?= $pageTitle ?? 'Lista de clientes' ?></h1>
<ul>
	<?php foreach ($clients as $client): ?>
		<li><?= $client ?></li>
	<?php endforeach ?>
</ul>
