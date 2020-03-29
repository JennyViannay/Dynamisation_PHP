<?php 

include('../../models/connect_db.php');

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];
    try {
        $deleteArticle = $pdo->prepare("DELETE FROM articles WHERE id=:id");
        $deleteArticle->execute([
            'id' => $id
        ]);
        return header('Location: http://localhost:8080/views/articles/all_articles.php');
    } catch (PDOException $e) {
        $error = $e->getMessage();
    }
}