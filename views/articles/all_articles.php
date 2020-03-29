<?php
session_start();
include('../includes/head.php');
include('../includes/navbar.php');
if (empty($_SESSION['isConnected']) || $_SESSION['isConnected'] == false) {
    header('Location: http://localhost:8080/index.php');
}
include('../../controllers/controller.php');
include('../../models/connect_db.php');

$getAllArticles = "SELECT * FROM articles ORDER BY date ASC";
try {
    $sendRequest = $pdo->query($getAllArticles);
    $articles = $sendRequest->fetchAll();
} catch (PDOException $e) {
    $error = $e->getMessage();
}


?>

<!-- le contenu défilant -->
<div class="container my-4">
    <div class="fake-news-defil py-2">
        <p class="lead">
            <!--ICI j'appelle et j'affiche le resultat de la function getRandomQuotes(johnny)-->
            <?php
            echo getRandomQuotes($messages);
            ?>
        </p>
    </div>
</div>

<!--body-content-->
<div class="container my-5">
    <div class="jumbotron">
        <h1 class="display-2 mono">Fake news...ça se régale !</h1>
        <a href="new_article.php" class="btn btn-primary">Ajouter un article</a>
    </div>

    <div class="row text-center">
        <?php
        if (isset($error) && $error != null) {
            echo $error;
        }
        foreach ($articles as $article) {
        ?>
            <div class='col-3'>
                <div class='mycard'>
                    <img src="<?php echo $article['img']; ?>" class='card-img-top' alt='fakeit'>
                    <div class='card-body'>
                        <h5 class='card-title'><?php echo $article['title']; ?></h5>
                        <p class='card-text'><?php echo $article['description']; ?></p>
                        <!--ICI TON CODE PHP _DATE -->
                        <p class='card-text red mono'>Date de sortie <br> <?php echo $article['date']; ?></p>
                        <a href=<?= "view_article.php?id=" . $article['id'] ?> class='btn btn-success'><i class="far fa-eye"></i></a>
                        <a href="<?= "edit_article.php?id=" . $article['id'] ?>" class='btn btn-primary'><i class="far fa-edit"></i></a>
                        <a href="<?= "delete_article.php?id=" . $article['id'] ?>" class='btn btn-danger'><i class="fas fa-trash"></i></a>

                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

<?php include('../includes/footer.php'); ?>