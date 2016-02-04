
<html>
<head>
<?include("require.php");?>
</head>
<body>
<?php
// Create and configure Slim app
$app = new \Slim\App;

$app->get('/hello/:name'. function($name) {
    echo "Hello $name";
});

$app->run();
?>
</body>

