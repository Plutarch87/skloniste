<?php 
require 'prof.header.php';
$query = $app['database'];
$profesori = $query->selectAllProf('profesori');
?>
<section class="main">
	<div class="container">
		<h1 style="font-family: Impact">Profesori - Glavna Strana</h1>
		<hr>		
		<div class="row">
			<div class="list-group">
			<?php foreach ($profesori as $p): ?>
				<a href="show.php?id=<?= $_POST['id'] = $p['id']; ?>" class="list-group-item"><?= $p['name']. ' ' . $p['surname']; ?></a>
			<?php endforeach; ?>
			</div>
		</div>
		<div class="row">
			<a href="create.php" class="btn btn-info">Napravi Novi Unos</a>
		</div>
	</div>
</section>
<?php require '../admin.footer.php'; ?>