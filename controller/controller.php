<?php
    // INCLUDE DES DATAS
    include('../data/messages.php');

    // LOGIN METHOD :
    function getUserConnected($name){
        $_SESSION['username'] = $name;
        $_SESSION['isConnected'] = true;
        return $_SESSION;
    }

    // Qu'est ce qu'une fonction ? 
    // Je veux vérifier quelque chose ou faire quelque chose sur mon site ?
    // Mais je veux vérifier ou faire quelque chose à plusieurs endroits sur mon site
    // J'utilise un fonction pour éviter de répéter du code à tous ces endroits 
    // Il faut donc écrire cette fonction qui serait disponible à tous ces endroits dont j'ai besoin
    // Exemple je veux que sur toutes les pages disponibles du site (utilisateur logué),
    // Un message différent selectionné au hasard dans un tableau s'affiche à l'endroit du texte déroulant

    // Pour le random et étant donné que ma data est un array, j'ai une méthode PHP toute faite qui me permet 
    // d'obtenir une valeur random provenant d'un tableau, il s'agit de array_rand() : 
    // Elle prend en paramètres un array et un entier (pour la quantité de valeur que l'on souhaite)
    // Pour l'utiliser on écrit : 
    // array_rand($array, 2) => en fr ça donne : donne moi 2 valeurs au hasard depuis $array
    ?>