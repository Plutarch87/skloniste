<?php
session_start();
$app = [];

$app['config'] = require 'config.php';

require 'database/Connection.php';
require 'database/QueryBuilder.php';
require 'Request.php';

$request = new Request();

$app['database'] = new QueryBuilder(
	Connection::make($app['config']['database'])
);
