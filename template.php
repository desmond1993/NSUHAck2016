
<html>
<head>
<?include("require.php");?>
</head>
<body>
<?php
// Create and configure Slim app
$app = new \Slim\App;

$app->get('/hello/:name'. function($name) {
    // include out mysql connection code and make the connection
	require_once 'lib/mysql.php';
	$db = connect_db();
    echo "Hello $name";
});

$app->run();
?>
</body>

