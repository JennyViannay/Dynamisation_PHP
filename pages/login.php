<?php  
    session_start(); 
    include('../layouts/head.php');
    include('../layouts/navbar.php');

    // LOGIN
    if (isset($_POST)) {
        if(!empty($_POST['password']) && $_POST['password'] != 1234){
            $errors['password'] = "Wrong password, try again with 1234 !";
        } if (!empty($_POST['password']) && !empty($_POST['username']) && $_POST['password'] == 1234) {
            $errors['password'] = "Welcome on board!";
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['isConnected'] = true;
            if($_SESSION['isConnected'] === true){
                Header('Location: http://localhost:8080/pages/profile.php');
            }
        } else {
            $errors['password'] = "Please enter 1234 password to try our app !";
        }
    } 
    
?>

    <!-- le contenu défilant -->
    <div class="container my-5">
        <div class="fake-news-defil py-2">
                <?php 
                    if(isset($errors['password'])){
                        echo "<p class='lead mono red'>" .$errors['password'] ."</p>";
                    } else {
                ?>
                    <p class="lead mono">
                        Hackers... Hackers... Hackers... Hackers... Hackers... Hackers... Hackers... Hackers...
                        Hackers... Hackers... Hackers... Hackers... Hackers... Hackers... Hackers... Hackers...
                        Hackers... Hackers... Hackers... Hackers... Hackers... Hackers... Hackers... Hackers...
                    </p>
                <?php } ?>
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
                                placeholder="Enter username" name="username">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password" name="password">
                        </div>
                    </div>
                    <div class="col-12 text-left">
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1" name="checkin">Check me out</label>
                        </div>
                    </div>
                </div>
                <div class="text-center my-2">
                    <button type="submit" class="btn btn-primary btn-lg" name="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>

<?php include('../layouts/footer.php'); ?>