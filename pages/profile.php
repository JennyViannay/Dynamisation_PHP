<?php
session_start();
include('../layouts/head.php');
include('../layouts/navbar.php');
if (empty($_SESSION['isConnected']) || $_SESSION['isConnected'] == false) {
    Header('Location: http://localhost:8080/index.php');
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
            <img src="<?php echo $_SESSION['profile_image']; ?>" class="avatar" alt="avatar">
        </div>
        <div class="col-12">
            <!-- le contenu défilant -->
            <div class="container my-4">
                <div class="fake-news-defil py-2">
                    <p class="lead">Fake news... Fake news... Fake news... Fake news... Fake news... Fake news... Fake news...
                        Fake news... Fake news... Fake news... Fake news... Fake news... Fake news... Fake news... Fake news...
                        Fake news... Fake news... Fake news... Fake news...</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Infos-->
<div class="container my-5">
    <div class="row profile-infos">
        <div class="infos-profile">
            <h1 class="display-4 mono">Hello, <code><?php if (isset($_SESSION['username'])) {
                                                        echo $_SESSION['username'];
                                                    } else {
                                                        echo 'undefined';
                                                    } ?></code> !</h1>
            <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra
                attention to featured content or information.</p>
        </div>
    </div>
    <hr class="my-2">
    <!--action-->
    <div class="row">
        <form action="">
            <h2 class="display-5 mono my-4">Change infos :</h2>
            <div class="row text-center">
                <div class="col-6">
                    <div class="form-group">
                        <input type="pseudo" class="form-control" aria-describedby="emailHelp" placeholder="Enter username">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password">
                    </div>
                </div>
            </div>
            <hr class="my-2">
            <h2 class="display-5 mono my-4">Change Picture :</h2>
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <input type="email" class="form-control" aria-describedby="emailHelp" placeholder="Link">
                    </div>
                </div>
                <div class="col-12">
                    <div class="my-2">
                        <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<?php include('../layouts/footer.php'); ?>