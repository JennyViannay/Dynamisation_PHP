<?php  
    session_start();   
    include('views/includes/head.php');   
    include('views/includes/navbar.php');
    include('controllers/controller.php'); //<!--ICI j'appelle mon controller dans lequel se trouve mes fonctions/méthodes -->

    // LOGOUT
    if(isset($_POST['logout'])){
        getUserLogout();
    }
?>

    <!-- le contenu défilant -->
    <div class="container my-4">
        <div class="fake-news-defil py-2">
            <p class="lead">Fake news... Fake news... Fake news... Fake news... Fake news... Fake news... Fake news... Fake news... Fake news... Fake news... Fake news... Fake news... Fake news... Fake news... Fake news... Fake news... Fake news... Fake news... Fake news...</p>
        </div>
    </div>

    <!--body-content-->
    <div class="container my-5">
        <div class="jumbotron">
            <h1 class="display-2 mono">Last post...</h1>
            <div class="row">
                <div class="col-3">
                    <img src="https://viuz.com/wp-content/uploads/shutterstock_566467453-fake-news-1024x697.jpg"
                        alt="fakenews" class="introImg my-1">
                </div>
                <div class="col-3">
                    <img src="https://viuz.com/wp-content/uploads/shutterstock_566467453-fake-news-1024x697.jpg"
                        alt="fakenews" class="introImg my-1">
                </div>
                <div class="col-3">
                    <img src="https://viuz.com/wp-content/uploads/shutterstock_566467453-fake-news-1024x697.jpg"
                        alt="fakenews" class="introImg my-1">
                </div>
                <div class="col-3">
                    <img src="https://viuz.com/wp-content/uploads/shutterstock_566467453-fake-news-1024x697.jpg"
                        alt="fakenews" class="introImg my-1">
                </div>
            </div>
            <p class="lead my-4">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ut rutrum lorem. Orci varius natoque
                penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur odio metus, mollis finibus
                lobortis at, sagittis sed magna. In commodo enim vitae ex lacinia sodales. Cras quis convallis enim.
                Donec volutpat massa sed fermentum accumsan. Praesent interdum massa a nisl faucibus vestibulum.
            </p>
            <hr class="my-4">
            <?php if(isset($_SESSION['isConnected'])) { ?>
                <div class="text-center my-2">
                    <a class="btn btn-danger btn-lg" href="views/profile.php" role="button">Go profile !</a>
                </div>
            <?php } else { ?>
                <div class="text-center my-2">
                    <a class="btn btn-primary btn-lg" href="views/login.php" role="button">Sign in !</a>
                </div>
            <?php } ?>
        </div>
    </div>

<?php include('includes/footer.php'); ?>