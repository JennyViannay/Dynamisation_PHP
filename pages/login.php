<?php  
    session_start(); 
    include('../layouts/head.php');
    include('../layouts/navbar.php');
    include('../controller/controller.php'); //<!--ICI j'appelle mon controller dans lequel se trouve mes fonctions -->

    // LOGIN 
    // Ici je teste la connection de mon utlisateur en appellant la fonction getLoginAuth($arg)
    if(isset($_POST)) {
        // ICI TON CODE POUR LA GESTION D'ERREUR DU FORMULAIRE DE LOGIN
        // RAPPEL : Une message d'erreur (Le champs username est obligatoire et/ou Le champs password est obligatoire) doit
        // s'afficher sous l'input du champs qui est vide
        getLoginAuth($_POST);
    } 
?>
    <!-- le contenu défilant -->
    <div class="container my-5">
        <div class="fake-news-defil py-2">
                <?php 
                    if(isset($errors['password'])){
                        echo "<p class='lead mono red'>" .$errors['password'] ."</p>";
                    } else {
                        echo "<p class='lead mono'>Try to enter 1234 password to try app !</p>";
                    }
                ?>
        </div>
    </div>

    <!--body-content-->
    <div class="container my-5">
        <div class="jumbotron">
            <h1 class="display-2 mono">Sign in...</h1>
            <form method="POST">
                <div class="row text-center">
                    <div class="col-6">
                        <div class="form-group">
                            <input type="pseudo" class="form-control"
                                placeholder="Enter username *" name="username">
                            <p class="mono red error">
                            <?php echo "ICI TON CODE POUR MESSAGE D'ERREUR Username vide"; ?>
                            </p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password *" name="password">
                            <p class="mono red error">
                                <?php echo "ICI TON CODE POUR MESSAGE D'ERREUR Password vide"; ?>
                            </p>
                        </div>
                    </div>
                    <div class="col-12 text-left">
                        <div class="form-group">
                            <label class="form-label" name="checkin">Upload picture</label>
                            <input type="text" class="form-control" name="profile_image">
                        </div>
                    </div>
                </div>
                <p class="mono red text-right">* Champs obligatoires</p>
                <div class="text-center my-2">
                    <button type="submit" class="btn btn-primary btn-lg" name="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>

<?php include('../layouts/footer.php'); ?>