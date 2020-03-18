<?php 
    session_start(); 
    include('../layouts/head.php'); 
    include('../layouts/navbar.php');
    if(empty($_SESSION['isConnected']) || $_SESSION['isConnected'] == false){
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
                <img src="https://giffiles.alphacoders.com/125/12535.gif" class="avatar" alt="avatar">
            </div>
        </div>
    </div>
    <!--Infos-->
    <div class="container my-5">
        <div class="row profile-infos">
            <div class="infos-profile">
                <h1 class="display-4 mono">Hello, <code><?php if(isset($_SESSION['username'])){ echo $_SESSION['username']; } else { echo 'undefined';}?></code> !</h1>
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
                            <input type="email" class="form-control" aria-describedby="emailHelp"
                                placeholder="Enter email">
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