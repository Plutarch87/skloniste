<?php
require '../../app/bootstrap.php';

$id = $_POST['id'];
$name = $_POST['name'];
$surname = $_POST['surname'];
$instrument = $_POST['instrument'];
$bio = $_POST['bio'];

$db = $app['database'];

$db->updateProf($id, $name, $surname, $instrument, $bio);

header('Location: index.php');