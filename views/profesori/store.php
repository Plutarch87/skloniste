<?php
require '../../app/bootstrap.php';

$name = $_POST['name'];
$surname = $_POST['surname'];

$db = $app['database'];

$db->storeProf('profesori', $name, $surname);

header('Location: index.php');