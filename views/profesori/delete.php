<?php 

require '../../app/bootstrap.php';

$id = $_GET['id'];

$query = $app['database'];

$query->deleteProf($id);

header('Location: index.php');