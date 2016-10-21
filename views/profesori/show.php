<?php
require 'prof.header.php';
$id = $_GET['id'];
$query = $app['database'];
$user = $query->showProf($id);
?>
<section class="main">
	<div class="container">
		<h1 style="font-family: Impact"><?= $user[0]['name']. ' ' .$user[0]['surname']; ?></h1>
		<hr>		
		<div class="row">
			<ul>
				<img width="250" height="250" src="../../images/<?= $user[0]['name']; ?>1.jpg" alt="<?= $user[0]['name']; ?>1">
				<li>Instrument: </li>
				<li>Biografija: </li>
				<li>Jos Ponesto: </li>
			</ul>
			<p>					
				<button  href="edit.php?id=<?= $_POST['id'] = $id; ?>" class="btn btn-info">Izmeni</button>
				&nbsp;
				<form method="POST" action="delete.php?id=<?= $_POST['id'] = $id; ?>">
					<input type="hidden" method="DELETE">
					<button type="submit" class="btn btn-danger" onclick="return confirm('Da li ste sigurni?')">Izbrisi</button>
				</form>
			</p>
		</div>
	</div>
</section>
<?php require '../admin.footer.php'; ?>