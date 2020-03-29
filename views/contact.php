<?php
session_start();
include('includes/head.php');
include('includes/navbar.php');
include('../controllers/controller.php'); //<!--ICI j'appelle mon controller dans lequel se trouve mes fonctions/méthodes -->

if(isset($_POST) && !empty($_POST['email']) && !empty($_POST['message'])){
    // SEND MAIL AFTER SUBMIT CONTACT FORM
    var_dump($_POST);

    // expediteur & destinataire
    $to = "jenny.viannay75@gmail.com"; // ou je vais recevoir le message -> le client / l'administrateur du site
    $from = "jenny.test4php@gmail.com"; // expediteur // le compte avec lequel l'email est envoyé

    // les champs du formulaire // Valeurs Input
    $email = $_POST['email'];
    $message = $_POST['message'];

    // subject & content & headers 
    $subject = "New message from contact Mon super site";
    $content = "Le message suivant a été envoyé depuis votre site monsite.com :" .$message ." email de contact : " .$email;
    $headers = "From:" .$from;

    // methode php : mail()
    mail($to, $subject, $content, $headers);
    echo 'Votre message a bien été envoyé';
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
    <form method="POST">
        <div class="form-group">
            <label for="name">Email</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Email">
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <textarea class="form-control" id="message" name="message" placeholder="Bullshit here..."></textarea>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary" name="send_contact">Submit</button>
        </div>
    </form>
</div>

<?php include('includes/footer.php'); ?>