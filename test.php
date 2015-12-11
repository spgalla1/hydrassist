<?php
$domain = 'mysql:dbname=hydrassist;host=localhost';
$user = 'root';
$password = 'password';

try {
    $connection = new PDO($domain, $user, $password);
    echo "Connection was good.\n";
} catch (PDOException $e) {
    echo $user . " :: " . $password . "\n";
    echo 'Connection failed: ' . $e->getMessage();
}

$query = $connection->prepare('SELECT * FROM tier');
$query->execute();

$result = $query -> fetchAll();

foreach( $result as $row ) {
    echo $row['id'] . "\n";
    echo $row['description'] . "\n";
}

?>