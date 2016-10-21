<?php
require 'prof.header.php';
?>
<section class="main">
	<div class="container">
		<h1 style="font-family: Impact">Nov Unos - Profesora/ice</h1>
		<hr>
		<div class="row col-md-6">			
			<form method="POST" action="store.php" class="form-horizontal" role="form">
			  <div class="form-group">
			    <label for="name" class="control-label col-sm-2">Ime:</label>
			    <div class="col-sm-10">
			      <input type="text" name="name" class="form-control" id="name" placeholder="Ime">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="surname" class="control-label col-sm-2">Prezime:</label>
			    <div class="col-sm-10"> 
			      <input type="text" name="surname" class="form-control" id="surname" placeholder="Prezime">
			    </div>
			  </div>			  
			  <div class="form-group"> 
			    <div class="col-sm-offset-2 col-sm-10">
			      <button type="submit" class="btn btn-warning">Unesi</button>
			    </div>
			  </div>
			</form>
		</div>		
	</div>
</section>
<?php require '../admin.footer.php'; ?>