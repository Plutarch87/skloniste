<?php
require '../../app/bootstrap.php';

$name = $_POST['name'];
$surname = $_POST['surname'];
$instrument = $_POST['instrument'];
$bio = $_POST['bio'];

$db = $app['database'];

$db->storeProf('profesori', $name, $surname, $instrument, $bio);

header('Location: index.php');