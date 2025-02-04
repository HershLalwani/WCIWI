<?php
$serverName=env('DB_HOST', 'localhost');
$userName=env('DB_USERNAME', 'root');
$password=env('DB_PASSWORD', '');
$databaseName="react_php";
$port=env('DB_PORT', 3306);
$conn = mysqli_connect($serverName, $userName, $password, $databaseName, port:$port);


?>