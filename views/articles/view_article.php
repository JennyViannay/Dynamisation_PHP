<?php
session_start();
include('../includes/head.php');
include('../includes/navbar.php');
if (empty($_SESSION['isConnected']) || $_SESSION['isConnected'] == false) {
    header('Location: http://localhost:8080/index.php');
}
include('../../controllers/controller.php');
include('../../models/connect_db.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $getOneArticle = "SELECT * FROM articles WHERE id=" . $id;
    try {
        $sendRequest = $pdo->query($getOneArticle);
        $article = $sendRequest->fetchObject();
    } catch (PDOException $e) {
        $error = $e->getMessage();
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
    <div class="jumbotron">
        <h1 class="display-2 mono"><?php echo $article->title; ?></h1>
        <div class="col-4">
        </div>
        <div class="col-8">
            <div class='card-body'>
                <img src="<?php echo $article->img; ?>" alt="">
                <p class='card-text'>URL IMG : <?php echo $article->img; ?></p>
                <p class='card-text'>Description : </p>
                <p class='card-text'><?php echo $article->description; ?></p>
                <p class='card-text red mono'>Date de sortie : <br> <?php echo $article->date; ?></p>
                <a href="<?= "edit_article.php?id=" . $article->id ?>" class='btn btn-primary'><i class="far fa-edit"></i></a>
                <a href="<?= "delete_article.php?id=" . $article->id ?>" class='btn btn-danger'><i class="fas fa-trash"></i></a>
                <a href="all_articles.php" class='btn btn-success'>Return</a>
            </div>
        </div>
    </div>
</div>
</div>

<?php include('../includes/footer.php'); ?>