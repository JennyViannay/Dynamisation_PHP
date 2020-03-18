<?php include('../layouts/head.php'); ?>

    <!-- le contenu défilant -->
    <div class="container my-5">
        <div class="fake-news-defil py-2">
            <p class="lead">
                Hackers... Hackers... Hackers... Hackers... Hackers... Hackers... Hackers... Hackers...
                Hackers... Hackers... Hackers... Hackers... Hackers... Hackers... Hackers... Hackers...
                Hackers... Hackers... Hackers... Hackers... Hackers... Hackers... Hackers... Hackers...
            </p>
        </div>
    </div>

    <!--body-content-->
    <div class="container my-5">
        <div class="jumbotron">
            <h1 class="display-2 mono">Sign in...</h1>
            <form>
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
                    <div class="col-12 text-left">
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                    </div>
                </div>
                <div class="text-center my-2">
                    <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                </div>
            </form>
        </div>
    </div>

<?php include('../layouts/footer.php'); ?>