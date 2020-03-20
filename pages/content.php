<?php 
    session_start(); 
    include('../layouts/head.php'); 
    include('../layouts/navbar.php');
    if(empty($_SESSION['isConnected']) || $_SESSION['isConnected'] == false){
        Header('Location: http://localhost:8080/index.php');
    }
    include('../controller/controller.php'); //<!--ICI j'appelle mon controller dans lequel se trouve mes fonctions -->
?>

    <!-- le contenu défilant -->
    <div class="container my-4">
        <div class="fake-news-defil py-2">
            <p class="lead">
                <!--ICI j'appelle et j'affiche le resultat de la function getRandomQuotes()-->
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
        </div>

        <div class="row text-center">
            <!--ICI Je boucle sur chaque article pour les parcourir un a un 
                à chaque tour de boucle j'affiche un title, une img, une description, une date... 
                J'ai accès à la variables $articles grace au controller qui lui même include le fichier data (../controller/data/data.php)
            -->
            <?php 
                foreach ($articles as $article) { 
            ?>
                <div class='col-3'>
                    <div class='mycard'>
                        <img src="<?php echo $article['img']; ?>" class='card-img-top' alt='fakeit'>
                        <div class='card-body'>
                            <h5 class='card-title'><?php echo $article['title']; ?></h5>
                            <p class='card-text'><?php echo $article['description']; ?></p>
                            <!--ICI TON CODE PHP _DATE -->
                            <p class='card-text red mono'>Date de sortie <br> <?php echo getRandomDate(); ?></p>
                            <a href='#' class='btn btn-danger'>Read</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

<?php include('../layouts/footer.php'); ?>