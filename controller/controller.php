<?php
    // DANS CE FICHIER SONT REGROUPÉES TOUTES LES MÉTHODES DU PROJET 
    /* ------------------------------------------------------------------------------------------------- */
    // INCLUDE DES FAKES DATAS
    include('data/data.php');

    /* ------------------------------------------------------------------------------------------------- */
    /* -----------------------------------AVAILABLE METHODS--------------------------------------------- */
    /* ------------------------------------------------------------------------------------------------- */

    // LOGIN METHOD :
    /* ------------------------------------------------------------------------------------------------- */
    function getLoginAuth($form){
        if (!empty($form['password']) && !empty($form['username']) && $form['password'] === '1234') {
            $_SESSION['username'] = $form['username'];
            $_SESSION['isConnected'] = true;
            if($form['profile_image']){
                $_SESSION['profile_image'] = $form['profile_image'];
            } else {
                $_SESSION['profile_image'] ='https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/67401945-34fc-46b8-8e8f-1982847277d4/ddba22b-2fad9d00-1d3f-4ec8-a65d-199a09dfa4e1.gif?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcLzY3NDAxOTQ1LTM0ZmMtNDZiOC04ZThmLTE5ODI4NDcyNzdkNFwvZGRiYTIyYi0yZmFkOWQwMC0xZDNmLTRlYzgtYTY1ZC0xOTlhMDlkZmE0ZTEuZ2lmIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.p1RcYkkOBXh0fzpoZxaTbE1_xNWLfoLqEZv1_0utuzU';
            }
            if($_SESSION['isConnected'] === true){
                Header('Location: http://localhost:8080/pages/profile.php');
            }
        } else {
            return $errors['password'] = "Please enter 1234 password to try our app !";
        }
    }

    // LOGOUT METHOD :
    /* ------------------------------------------------------------------------------------------------- */
    function getUserLogout(){
        unset($_SESSION['isConnected']);
        unset($_SESSION['username']);
        return session_destroy();
    }
        
    // SECURISATION STRING
    // 1 paramètre en entrée :
    /* ------------------------------------------------------------------------------------------------- */
    function cleanString($string)
    {
        // on supprime : majuscules ; / ? : @ & = + $ , . ! ~ * ( ) les espaces multiples et les underscore
        $string = strtolower($string);
        $string = preg_replace("/[^a-z0-9_'\s-]/", "", $string);
        $string = preg_replace("/[\s-]+/", " ", $string);
        $string = preg_replace("/[\s_]/", " ", $string);
        return $string;
    }

    // METHODE GET RANDOM QUOTES
    // 1 paramètre en entrée :
    /* ------------------------------------------------------------------------------------------------- */
    function getRandomQuotes($messages){
        // array_rand() pour obtenir un index au hasard dans le tableau
        $randomIndex = array_rand($messages, 1);
        // je retourne mon résultat
        return $messages[$randomIndex];  
        // J'aurais également pu écrire tout ça en une ligne comme ceci :
        // return $messages[array_rand($messages, 1)]);
    }

    // METHODE FOR SURVEY RESULT
    // 3 paramètres en entrée :
    /* ------------------------------------------------------------------------------------------------- */
    function getSurveyResult($response1, $response2, $response3){
        // je stocke le resultat du total de caracateres contenus dans chaque réponses tout en vérifiant mes 
        // réponses avec la méthode cleanString
        $stringTotal = strlen(cleanString($response1)) + strlen(cleanString($response2)) + strlen(cleanString($response3));
        // Suivant le résultat retourne une réponse différente 
        if($stringTotal >= 0 && $stringTotal <= 50){
            return "De façon non-prioritaire";
        }
        if($stringTotal >=51 && $stringTotal <= 150){
            return "Mes calculs me révèlent que ca va être juste !";
        }
        if($stringTotal >=151){
            return "Plutôt deux fois qu'une !";
        }
    }

    // METHODE GET UPDATE USER _UPDATE_USER
    /* ------------------------------------------------------------------------------------------------- */
    function getUpdateUser(){
        // ICI TON CODE
    }

    // METHODE GET RANDOM VISITOR NUMBER
    /* ------------------------------------------------------------------------------------------------- */
    function getRandomVisitorNumber(){
        // ICI TON CODE 
    }

    // METHODE GET RANDOM DATE FOR ARTICLES _DATE
    /* ------------------------------------------------------------------------------------------------- */
    function getRandomDate(){
        // ICI TON CODE 
    }

    // METHODE 4 BONUS _US1
    /* ------------------------------------------------------------------------------------------------- */
    // PHP code to get the Fibonacci series 
    // Recursive function for fibonacci series. 
    function Fibonacci($number){ 
        // if and else if to generate first two numbers 
        if ($number == 0) 
            return 0;     
        else if ($number == 1) 
            return 1;     
        // Recursive Call to get the upcoming numbers 
        else
            return (Fibonacci($number-1) + Fibonacci($number-2)); 
    } 
   
    function decodeBonus($number){
        $array = [];
        for ($counter = 0; $counter < $number; $counter++){   
            $array[] = Fibonacci($counter); 
        } 
        return $array;
    }
?>