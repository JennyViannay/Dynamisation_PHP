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
            if($_POST['profile_image']){
                $_SESSION['profile_image'] = $_POST['profile_image'];
            } else {
                $_SESSION['profile_image'] ='https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/67401945-34fc-46b8-8e8f-1982847277d4/ddba22b-2fad9d00-1d3f-4ec8-a65d-199a09dfa4e1.gif?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcLzY3NDAxOTQ1LTM0ZmMtNDZiOC04ZThmLTE5ODI4NDcyNzdkNFwvZGRiYTIyYi0yZmFkOWQwMC0xZDNmLTRlYzgtYTY1ZC0xOTlhMDlkZmE0ZTEuZ2lmIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.p1RcYkkOBXh0fzpoZxaTbE1_xNWLfoLqEZv1_0utuzU';
            }
            if($_SESSION['isConnected'] === true){
                Header('Location: http://localhost:8080/pages/profile.php');
            }
        } else {
            $errors['password'] = "Please enter 1234 password to try our app !";
        }
        // https://giffiles.alphacoders.com/125/12535.gif
    } 
    
?>

    <!-- le contenu défilant -->
    <div class="container my-5">
        <div class="fake-news-defil py-2">
                <?php 
                    if(isset($errors['password'])){
                        echo "<p class='lead mono red'>" .$errors['password'] ."</p>";
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
                                placeholder="Enter username" name="username">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password" name="password">
                        </div>
                    </div>
                    <div class="col-12 text-left">
                        <div class="form-group">
                            <label class="form-label" name="checkin">Upload picture</label>
                            <input type="text" class="form-control" name="profile_image">
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