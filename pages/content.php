<?php 
    session_start(); 
    include('../layouts/head.php'); 
    include('../layouts/navbar.php');
    if(empty($_SESSION['isConnected']) || $_SESSION['isConnected'] == false){
        Header('Location: http://localhost:8080/index.php');
    }
?>

    <!-- le contenu défilant -->
    <div class="container my-4">
        <div class="fake-news-defil py-2">
            <p class="lead">Fake news... Fake news... Fake news... Fake news... Fake news... Fake news... Fake news...
                Fake news... Fake news... Fake news... Fake news... Fake news... Fake news... Fake news... Fake news...
                Fake news... Fake news... Fake news... Fake news...</p>
        </div>
    </div>

    <!--body-content-->
    <div class="container my-5">
        <div class="jumbotron">
            <h1 class="display-2 mono">Fake news...</h1>
            <hr class="my-2">
        </div>

        <div class="row text-center">
            <div class="col-3 my-3">
                <div class="card">
                    <img src="https://media1.tenor.com/images/d439bafe371a8c7dd4c7edbc7d1d1bd0/tenor.gif?itemid=5044075" class="card-img-top" alt="fakeit">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="#" class="btn btn-primary">Read</a>
                    </div>
                </div>
            </div>
            <div class="col-3 my-3">
                <div class="card">
                    <img src="https://media1.tenor.com/images/d439bafe371a8c7dd4c7edbc7d1d1bd0/tenor.gif?itemid=5044075" class="card-img-top" alt="fakeit">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="#" class="btn btn-primary">Read</a>
                    </div>
                </div>
            </div>
            <div class="col-3 my-3">
                <div class="card">
                    <img src="https://media1.tenor.com/images/d439bafe371a8c7dd4c7edbc7d1d1bd0/tenor.gif?itemid=5044075" class="card-img-top" alt="fakeit">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="#" class="btn btn-primary">Read</a>
                    </div>
                </div>
            </div>
            <div class="col-3 my-3">
                <div class="card">
                    <img src="https://media1.tenor.com/images/d439bafe371a8c7dd4c7edbc7d1d1bd0/tenor.gif?itemid=5044075" class="card-img-top" alt="fakeit">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="#" class="btn btn-primary">Read</a>
                    </div>
                </div>
            </div>
            <div class="col-3 my-3">
                <div class="card">
                    <img src="https://media1.tenor.com/images/d439bafe371a8c7dd4c7edbc7d1d1bd0/tenor.gif?itemid=5044075" class="card-img-top" alt="fakeit">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="#" class="btn btn-primary">Read</a>
                    </div>
                </div>
            </div>
            <div class="col-3 my-3">
                <div class="card">
                    <img src="https://media1.tenor.com/images/d439bafe371a8c7dd4c7edbc7d1d1bd0/tenor.gif?itemid=5044075" class="card-img-top" alt="fakeit">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="#" class="btn btn-primary">Read</a>
                    </div>
                </div>
            </div>
            <div class="col-3 my-3">
                <div class="card">
                    <img src="https://media1.tenor.com/images/d439bafe371a8c7dd4c7edbc7d1d1bd0/tenor.gif?itemid=5044075" class="card-img-top" alt="fakeit">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="#" class="btn btn-primary">Read</a>
                    </div>
                </div>
            </div>
            <div class="col-3 my-3">
                <div class="card">
                    <img src="https://media1.tenor.com/images/d439bafe371a8c7dd4c7edbc7d1d1bd0/tenor.gif?itemid=5044075" class="card-img-top" alt="fakeit">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="#" class="btn btn-primary">Read</a>
                    </div>
                </div>
            </div>
            <div class="col-3 my-3">
                <div class="card">
                    <img src="https://media1.tenor.com/images/d439bafe371a8c7dd4c7edbc7d1d1bd0/tenor.gif?itemid=5044075" class="card-img-top" alt="fakeit">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="#" class="btn btn-primary">Read</a>
                    </div>
                </div>
            </div>
            <div class="col-3 my-3">
                <div class="card">
                    <img src="https://media1.tenor.com/images/d439bafe371a8c7dd4c7edbc7d1d1bd0/tenor.gif?itemid=5044075" class="card-img-top" alt="fakeit">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="#" class="btn btn-primary">Read</a>
                    </div>
                </div>
            </div>
            <div class="col-3 my-3">
                <div class="card">
                    <img src="https://media1.tenor.com/images/d439bafe371a8c7dd4c7edbc7d1d1bd0/tenor.gif?itemid=5044075" class="card-img-top" alt="fakeit">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="#" class="btn btn-primary">Read</a>
                    </div>
                </div>
            </div>
            <div class="col-3 my-3">
                <div class="card">
                    <img src="https://media1.tenor.com/images/d439bafe371a8c7dd4c7edbc7d1d1bd0/tenor.gif?itemid=5044075" class="card-img-top" alt="fakeit">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="#" class="btn btn-primary">Read</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include('../layouts/footer.php'); ?>