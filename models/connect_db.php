<?php 

$dsn = "mysql:host=localhost;dbname=dynamisation"; // MAC/MAMP "mysql:host=localhost:8889;dbname=NOMDB"
$user = "root"; // par defaut root
$password = "root"; // votre mdp // MAMP => root

$pdo = new PDO($dsn, $user, $password);

if($pdo == true){
    echo "Connection success !";
    $getAllArticles = "SELECT * FROM articles ORDER BY date ASC";
    $sendRequest = $pdo->query($getAllArticles);
    $articles = $sendRequest->fetchAll();
}