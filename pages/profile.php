<?php
    session_start();
    include('../layouts/head.php');
    include('../layouts/navbar.php');
    if(empty($_SESSION['isConnected']) || $_SESSION['isConnected'] == false) {
        Header('Location: http://localhost:8080/index.php');
    }
    include('../controller/controller.php'); //<!--ICI j'appelle mon controller dans lequel se trouve mes fonctions -->
    if(isset($_POST) && (!empty($_POST['username_update']) || !empty($_POST['profile_image_update']))){
        getUpdateUser($_POST);
    }
?>

<!--body-content-->
<!--Header-->
<div class="container-fluid">
    <div class="row">
        <div class="bg-profile"></div>
    </div>
    <div class="row">
        <div class="col-12 text-center">
            <!--ICI J'echo le lien de l'image que j'ai enregistré dans la session dans la source de la balise image pour qu'elle s'affiche -->
            <img src="<?php echo $_SESSION['profile_image']; ?>" class="avatar" alt="avatar">
        </div>
        <div class="col-12">
            <!-- le contenu défilant -->
            <div class="container my-4">
                <div class="fake-news-defil py-2">
                    <p class="lead">
                        <!--ICI j'ajoute mon code PHP-->
                        <?php
                        echo getRandomQuotes($messages); //<!--ICI J'affiche le résultat de ma fonction -->
                        ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Infos-->
<div class="container my-5">
    <div class="row profile-infos">
        <div class="infos-profile">
            <h1 class="display-4">
                Hello, 
                <span class="red mono">
                <!--ICI J'affiche le username stocké dans la session si il existe sinon undefined -->
                    <?php 
                        if(isset($_SESSION['username'])) {
                            echo $_SESSION['username'];
                        } else {
                            echo 'error';
                        } 
                    ?>
                </span>!
            </h1>
            <p class="lead">
                <!--ICI TON CODE PHP _INT -->
                Your profile has been visited <span class="mono red"><?php echo getRandomVisitorNumber(); ?></span> today... <br> You're sush a looser 💩
            </p>
        </div>
    </div>
    <hr class="my-2">
    <!--ICI CODE PHP POUR TRAITEMENT DU FORMULAIRE UPDATE USER _UPDATE_USER-->
    <form method="POST">
        <div class="row text-center">
            <div class="col-6">
                <div class="form-group">
                    <h4 class="display-5 mono my-4">Change username :</h4>
                    <input type="pseudo" class="form-control" placeholder="Enter new username" name="username_update">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <h4 class="display-5 mono my-4">Change Picture :</h4>
                    <input type="text" class="form-control" placeholder="Picture link" name="profile_image_update">
                </div>
            </div>
        </div>
        <div class="col-12 text-center my-4">
            <div class="my-2">
                <button type="submit" class="btn btn-danger btn-lg" name="submit_update">Submit</button>
            </div>
        </div>
    </form>
</div>

<?php include('../layouts/footer.php'); ?>