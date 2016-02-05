<html>
<head>
<? include("require.php");?>
</head>
<body>
<?php 
	

	$app = new \Slim\Slim();

	$app->get("/hello/:name", function ($name) {
	    	echo "Hello, $name";
		/*
		$dsn = '';
		$hostname = '';
		$username = '';
		$password = '';
		$pdo = new \PDO($dsn, $hostname, $username, $password);
		$stmt = $pdo->query('select * ');
		$stmt->setFetchMode();
		$results = $stmt->execute();
		var_dump($results);
		*/
	});

	$app->run();
?>
</body>
