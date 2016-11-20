<?php
require '../../app/bootstrap.php';

$id = $_GET['id'];
$name = $_POST['name'];
$surname = $_POST['surname'];
$instrument = $_POST['instrument'];
$bio = $_POST['bio'];
if(isset($_POST['submit'])) {
	$photo = new Photograph();
	$photo->caption = isset($_POST['caption'])?:1;
	$photo->attach_file($_FILES['img']);
	$photo->save();
}

$db = $app['database'];

$db->storeProf('profesori', $name, $surname, $instrument, $bio, 'name');

header('Location: index.php');