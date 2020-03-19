<?php 
    session_start(); 
    include('../layouts/head.php'); 
    include('../layouts/navbar.php');
    if(empty($_SESSION['isConnected']) || $_SESSION['isConnected'] == false){
        Header('Location: http://localhost:8080/index.php');
    }

    $articles = [
        '1' => [
            'title' => 'Fake news 1',
            'img' => 'https://media1.giphy.com/media/k0CCW4PIPifIY/source.gif',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ultrices suscipit justo, in vulputate tortor eleifend at.'
        ],
        '2' => [
            'title' => 'Fake news 2',
            'img' => 'https://media0.giphy.com/media/d8YBM0IgPszle/source.gif',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ultrices suscipit justo, in vulputate tortor eleifend at.'
        ],
        '3' => [
            'title' => 'Fake news 3',
            'img' => 'https://media2.giphy.com/media/Jz53cfDbQj9q8/giphy.gif',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ultrices suscipit justo, in vulputate tortor eleifend at.'
        ],
        '4' => [
            'title' => 'Fake news 4',
            'img' => 'https://media3.giphy.com/media/L0xm7gqy5vmgM/giphy.gif',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ultrices suscipit justo, in vulputate tortor eleifend at.'
        ]
    ]
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
            <h1 class="display-2 mono">Fake news...ça se régale !</h1>
        </div>

        <div class="row text-center">
            <?php 
                foreach ($articles as $article) {
                    echo "
                        <div class='col-3 my-3'>
                            <div class='card'>
                                <img src=".$article['img']." class='card-img-top' alt='fakeit'>
                                <div class='card-body'>
                                    <h5 class='card-title'>".$article['title']."</h5>
                                    <p class='card-text'>".$article['description']."</p>
                                    <a href='#' class='btn btn-danger'>Read</a>
                                </div>
                            </div>
                        </div>
                    ";
                }
            ?>
        </div>
    </div>

<?php include('../layouts/footer.php'); ?>