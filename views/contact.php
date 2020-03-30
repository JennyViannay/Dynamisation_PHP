<?php
session_start();
include('includes/head.php');
include('includes/navbar.php');
include('../controllers/controller.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["lastname"])) {
        $lastname_err = "Le nom est obligatoire";
    } else {
        $lastname = test_input($_POST["lastname"]);
        $lastname_err = check_text($lastname);
    }

    if (empty($_POST["firstname"])) {
        $firstname_err = "Le prénom est obligatoire";
    } else {
        $firstname = test_input($_POST["firstname"]);
        $firstname_err = check_text($firstname);
    }

    if (empty($_POST["email"])) {
        $email_err = "L'email est obligatoire";
    } else {
        $email = test_input($_POST["email"]);
        $email_err = check_email($email);
    }

    if (empty($_POST["tel"])) {
        $tel_err = "Le numéro de téléphone est obligatoire";
    } else {
        $tel = test_input($_POST["tel"]);
    }

    if ($_POST["subject"] == '0') {
        $subject_err = "Le sujet est obligatoire";
    } else {
        $subject = test_input($_POST["subject"]);
        $subject_err = check_text($subject);
    }

    if (empty($_POST["message"])) {
        $message_err = "Le message est obligatoire";
    } else {
        $message = test_input($_POST["message"]);
        $message_err = strlen($_POST["message"]) < 5 ? 'Le message doit faire plus de 5 charactères' : '';
        $message_err = strlen($_POST["message"]) > 256 ? 'Le message doit faire moins de 256 charactères' : '';
    }

    if (strlen($lastname_err) === 0 && strlen($firstname_err) === 0 && strlen($email_err) === 0 && strlen($tel_err) === 0 && strlen($subject_err) === 0 && strlen($message_err) === 0) {
        sendContact($email, $tel, $message, $subject);
        unset($_SESSION['inputs']);
        unset($_SESSION['lastname_err']);
        unset($_SESSION['firstname_err']);
        unset($_SESSION['email_err']);
        unset($_SESSION['tel_err']);
        unset($_SESSION['subject_err']);
        unset($_SESSION['message_err']);
        header('Location: http://localhost:8080/views/success.php');
    } else {
        //stockage des erreurs
        $_SESSION['lastname_err'] = $lastname_err;
        $_SESSION['firstname_err'] = $firstname_err;
        $_SESSION['email_err'] = $email_err;
        $_SESSION['tel_err'] = $tel_err;
        $_SESSION['subject_err'] = $subject_err;
        $_SESSION['message_err'] = $message_err;
        $_SESSION['inputs'] = $_POST;
        header('Location: http://localhost:8080/views/contact.php');
    }
}

?>

<!--body-content-->
<div class="container my-5">
    <form method="POST">
        <div class="form-group">
            <label for="firstname">Firstname *</label>
            <input type="text" class="form-control" name="firstname" id="firstname" placeholder="Firstname" value="<?php echo isset($_SESSION['inputs']['firstname']) && empty($_SESSION['firstname_err']) ? $_SESSION['inputs']['firstname'] : ""; ?>" required>
            <p class="mono red"><?php echo !empty($_SESSION['firstname_err']) ? $_SESSION['firstname_err'] : ""; ?></p>
        </div>
        <div class="form-group">
            <label for="lastname">Lastname *</label>
            <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Lastname" value="<?php echo isset($_SESSION['inputs']['lastname']) && empty($_SESSION['lastname_err']) ? $_SESSION['inputs']['lastname'] : ""; ?>" required>
            <p class="mono red"><?php echo !empty($_SESSION['lastname_err']) ? $_SESSION['lastname_err'] : ""; ?></p>
        </div>
        <div class="form-group">
            <label for="name">Email *</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Email" value="<?php echo isset($_SESSION['inputs']['email']) && empty($_SESSION['email_err']) ? $_SESSION['inputs']['email'] : ""; ?>" required>
            <p class="mono red"><?php echo !empty($_SESSION['email_err']) ? $_SESSION['email_err'] : ""; ?></p>
        </div>
        <div class="form-group">
            <label for="name">Tel *</label>
            <input type="text" class="form-control" name="tel" id="tel" placeholder="Tel" value="<?php echo isset($_SESSION['inputs']['tel']) && empty($_SESSION['tel_err']) ? $_SESSION['inputs']['tel'] : ""; ?>" required>
            <p class="mono red"><?php echo !empty($_SESSION['tel_err']) ? $_SESSION['tel_err'] : ""; ?></p>
        </div>
        <div class="form-group">
            <label for="subject">Subject * :</label>
            <select name="subject" id="subject" class="form-control" required>
                <option value="0">Objet de ma demande</option>
                <option <?php echo ($_SESSION['inputs']['subject'] && ($_SESSION['inputs']['subject']) === 'une facture') ? "selected" : ""; ?>>
                    une facture
                </option>
                <option <?php echo ($_SESSION['inputs']['subject'] && ($_SESSION['inputs']['subject']) === 'mon contrat') ? "selected" : ""; ?>>
                    mon contrat
                </option>
                <option <?php echo ($_SESSION['inputs']['subject'] && ($_SESSION['inputs']['subject']) === 'mon espace client') ? "selected" : ""; ?>>
                    mon espace client
                </option>
                <option <?php echo ($_SESSION['inputs']['subject'] && ($_SESSION['inputs']['subject']) === 'aide') ? "selected" : ""; ?>>
                    aide
                </option>
                <option <?php echo ($_SESSION['inputs']['subject'] && ($_SESSION['inputs']['subject']) === 'autre') ? "selected" : ""; ?>>
                    autre
                </option>
            </select>
            <p class="mono red"><?php echo !empty($_SESSION['subject_err']) ? $_SESSION['subject_err'] : ""; ?></p>
        </div>
        <div class="form-group">
            <label for="message">Message *</label>
            <textarea class="form-control" id="message" name="message" placeholder="Bullshit here..." required></textarea>
            <p class="mono red"><?php echo !empty($_SESSION['message_err']) ? $_SESSION['message_err'] : ""; ?></p>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary" name="send_contact">Submit</button>
        </div>
    </form>
</div>

<?php
include('includes/footer.php');
?>