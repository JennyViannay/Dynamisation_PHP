<?php
session_start();
include('../includes/head.php');
include('../includes/navbar.php');
include('../../models/connect_db.php');

if (empty($_SESSION['isConnected']) || $_SESSION['isConnected'] == false) {
    header('Location: http://localhost:8080/index.php');
}

if (isset($_GET['id']) && empty($_POST['id'])) {
    $id = $_GET['id'];
    $getOneArticle = "SELECT * FROM articles WHERE id=" . $id;
    $sendRequest = $pdo->query($getOneArticle);
    if ($sendRequest === false) {
        $pdo->errorInfo();
    }
    $article = $sendRequest->fetchObject();
}

if (isset($_POST['id']) && !empty($_POST['id'])) {
    $id = $_POST['id'];
    var_dump($id); 
    $datetime = new DateTime('now');
    $title = $_POST['title'];
    $img = $_POST['image'];
    $description = $_POST['description'];
    $date = $datetime->format('Y-m-d');
    $error = null;
    try {
        $updateArticle = $pdo->prepare("UPDATE articles SET title=:title, img=:img, description=:description, date=:date WHERE id=:id;");
        $updateArticle->execute([
            'title' => $title,
            'img' => $img,
            'description' => $description,
            'date' => $date,
            'id' => $id
        ]);

        return header('Location: http://localhost:8080/views/articles/all_articles.php');
    } catch (PDOException $e) {
        $error = $e->getMessage();
    }
}

?>

<!--body-content-->
<div class="container my-5">
    <?php 
        if(isset($error) && $error != null){
            echo $error;
        }
    ?>
    <form method="POST" class="jumbotron">
    <h4 class="display-2 mono">Editer l'article</h4>
        <div class="form-group">
            <label for="title">Title *</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="<?= $article->title; ?>" value="<?= $article->title; ?>">
        </div>
        <div class="form-group">
            <label for="image">Image *</label>
            <input type="text" class="form-control" id="image" name="image" placeholder="<?= $article->img; ?>" value="<?= $article->img; ?>">
        </div>
        <div class="form-group">
            <label for="description">Description *</label>
            <textarea class="form-control" name="description" placeholder="<?= $article->description; ?>" value="<?= $article->description; ?>"></textarea>
        </div>
        <div class="text-right"><small>* Champs obligatoires</small></div>
        <button type="submit" class="btn btn-primary" name="id" value="<?= $article->id; ?>">Update article</button>
    </form>
</div>

<?php include('../includes/footer.php'); ?>