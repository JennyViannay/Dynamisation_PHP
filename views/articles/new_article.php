<?php
session_start();
include('../includes/head.php');
include('../includes/navbar.php');
include('../../models/connect_db.php');

if (empty($_SESSION['isConnected']) || $_SESSION['isConnected'] == false) {
    header('Location: http://localhost:8080/index.php');
}

if (isset($_GET) && isset($_GET['CREATE_ARTICLE'])) {
    if (!empty($_GET['title']) && !empty($_GET['image']) && !empty($_GET['description'])) {
        $datetime = new DateTime('now');
        $title = $_GET['title'];
        $img = $_GET['image'];
        $description = $_GET['description'];
        $date = $datetime->format('Y-m-d');
        var_dump($title);
        var_dump($img);
        var_dump($description);
        var_dump($date);
        try {
            $postArticle = $pdo->prepare("INSERT INTO articles (title, img, description, date) VALUES (:title, :img, :description, :date);");
            $postArticle->execute([
                'title' => $title,
                'img' => $img,
                'description' => $description,
                'date' => $date
            ]);
            return header('Location: http://localhost:8080/views/articles/all_articles.php');
        } catch (PDOException $e) {
            $error = $e->getMessage();
        }
    }
}

?>

<!--body-content-->
<div class="container my-5">
    <?php
        if (isset($error) && $error != null) {
            echo $error;
        }
    ?>
    <form method="GET" class="jumbotron">
        <h4 class="display-2 mono">Ajouter un article</h4>
        <div class="form-group">
            <label for="title">Title *</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Title">
        </div>
        <div class="form-group">
            <label for="image">Image *</label>
            <input type="text" class="form-control" id="image" name="image" placeholder="URL image">
        </div>
        <div class="form-group">
            <label for="description">Description *</label>
            <textarea class="form-control" name="description"></textarea>
        </div>
        <div class="text-right"><small>* Champs obligatoires</small></div>
        <button type="submit" class="btn btn-primary" name="CREATE_ARTICLE">Create article</button>
    </form>
</div>

<?php include('../includes/footer.php'); ?>