<?php
    session_start();
    include('../layouts/head.php');
    include('../layouts/navbar.php');
    if(empty($_SESSION['isConnected']) || $_SESSION['isConnected'] == false) {
        Header('Location: http://localhost:8080/index.php');
}
include('../controller/controller.php'); //<!--ICI j'appelle mon controller dans lequel se trouve les fonctions dont j'ai besoin -->

// A partir d'Ici je récupère grâce à la function GET et à une condition, les réponses du formulaire
// ICI - la condition en fr ça donne : 
// si GET existe ET que GET-question_1 n'est pas vide alors...
if (isset($_GET) && !empty($_GET['question_1'])) { 
    // ... j'enregistre la valeur de le function getSurveyResults dans $results
    $response = getSurveyResult($_GET['question_1'], $_GET['question_2'], $_GET['question_3']);
    // et la reponse dans ma session en cours à la clée que je nomme survey_result 
    $_SESSION['survey_result'] = $response;
}
?>

<!--body-content-->
<!-- le contenu défilant -->
<div class="container-fluid my-3">
    <div class="fake-news-defil ">
        <p class="lead">
            <!--ICI j'ajoute mon code PHP pour avoir un message dynamique à chaque rechargement de page-->
            <?php
            //<!--ICI J'affiche le résultat de ma function qui est appelée depuis controller.php -->
            echo getRandomQuotes($messages); 
            ?>
        </p>
    </div>
</div>
<!--Infos-->
<div class="container my-5">
    <div class="row profile-infos">
        <div class="infos-profile">
            <div class="row">
                <div class="col-12 text-center">
                    <p class="lead display-4">
                        Will you live old ?
                    </p>
                </div>
                <div class="col-12 text-center">
                    <p class="mono md-size red">
                        <?php
                        //<!--ICI en fr ça donne ça : si SESSION existe et que SESSION_survey_result n'est pas vide alors... -->
                        if (isset($_SESSION['survey_result']) && !empty($_SESSION['survey_result'])) {
                            //<!--ICI en fr ça donne ça : j'affiche SESSION_survey_result -->
                            echo $_SESSION['survey_result'];
                        } else {
                        ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!--formualaire-->
    <div class="row">
        <form method="GET">
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label for="question_1">Pourquoi sur les shampoings il y a marqué : « ne pique pas les yeux »... alors qu’au dos de celui-ci, il y a écrit : « en cas de contact avec les yeux, rincer immédiatement » ? <span class="mono red">*</span></label>
                        <textarea type="text" class="form-control" id="question_1" name="question_1"></textarea>
                        <p class="mono red">* Répondez au moins à cette question pour tester un résultat</p>
                    </div>
                </div>
                <hr class="my-4">
                <div class="col-12">
                    <div class="form-group">
                        <label for="question_1">Pourquoi est ce que pas de bras pas de chocolat ?</label>
                        <textarea type="text" class="form-control" id="question_2" name="question_2"></textarea>
                    </div>
                </div>
                <hr class="my-1">
                <div class="col-12">
                    <div class="form-group">
                        <label for="question_1">Que peut-on voir dans le noir ?</label>
                        <textarea type="text" class="form-control" id="question_3" name="question_3"></textarea>
                    </div>
                </div>
                <div class="col-12 text-center">
                    <div class="my-2">
                        <button type="submit" class="btn btn-primary btn-lg" name="GO">Click here to see answer 🔮</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<?php } ?>

<div class="container" id='_US1'>
    <?php 
        // Trouve le nombre de $number qui permettra de faire fonctionner la suite de Fibonacci et ainsi d'afficher le personnage caché
        // Le nombre à trouver est compris entre 4 et 18
        // Autre indice, la suite de Fibonacci doit s'arrêter à 144
        $number = 4;
        $array = decodeBonus($number);
        $count = 0;
        for ($i=0; $i < count($array); $i++) { 
            $count += $i;
        }
        if($count >= 40 && $count <= 55){
            echo 'Mouais.. 😕';
        }
        if($count >= 56 && $count <= 69){
            echo 'Continue.. 😏';
        }
        if($count >= 70 && $count <= 80){
            echo "T'es on fire.. 🔥";
            if($count === $secretKey){
                include('../bonus/bonus_1.php');
            }
        }
    ?>
</div>
<?php include('../layouts/footer.php'); ?>