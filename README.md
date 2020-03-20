# __0320_PHP_FONCTIONS_ATELIER

## Notre client a eu besoin d'une nouvelle page sur son site qui est accessible uniquement par un utilisateur logué :

### Sur cette page qui est nommée stats (pages/stats.php), l'utilisateur est capable de : 
- Répondre à un questionnaire de 3 questions et d'avoir le résultat de son formulaire. (Pour comprendre la logique du code, il te suffit de lire la page stats.php tout le code est commenté et explique ce qui se passe en php)

### L'équipe de designer a donc bien bossé, de nouvelles fonctionnalités ont aussi été ajoutés par les backend, notamment :
- Un dossier controller ou l'on retrouve controller.php qui contient toutes les méthodes du site, ainsi qu'un dossier data dans lequel sont regroupés les data du site 
- Dans le controller.php => Fonctions de login et de logout automatisées plus une méthode cleanString() qui permet de sécurisé les input de formulaire ainsi qu'une methode getRandomQuotes() qui permet de selectionner une phrase au hasard dans le tableau message qui se trouve dans data.php

### Ce qui nous reste à faire  :
- Ecrire la methode getRandomDate()qui permettrait d'afficher une fausse date pour chaque article de la page content.php : 
key_word = _DATE dans le fichier /pages/content.php et controller/controller.php 
  
- Ecrire la methode getRandomVisitorNumber() qui permettrait d'afficher sur la page profile.php, un faux nombre au hasard compris entre 1 et 5000 : 
key_word = _INT dans le fichier /pages/profile.php et controller/controller.php

- Traiter le formulaire de mise à jour des infos user sur la page profile.php : 
key_word = _UPDATE_USER

    -> Ecrire la methode getUpdateUser() qui permettrait de mettre à jour les informations user de manière automatisée 
    Attention : Les données doivent être sécurisées à l'aide de la méthode cleanString() 
    (controller.php : key_word = _UPDATE_USER)
    
    -> Tester que le nouveau username et/ou la photos s'affichent correctement 

- Sur la home (index.php) Afficher un bouton Go profile qui dirige vers profile lorsqu'un utilisateur est logué à la place du bouton sign in
  
- FIX : Sur la page login.php, afficher les messages d'erreurs lorsque le formulaire est soumis sans username/password ou les 2 : key_word = _FIX dans pages/login.php
  
- Bonus : J'ai encore caché un personnage dans le code, pour le découvrir il faut que tu resolves le challenge de la page stats.php : key_word = _US1 dans stats.php et controller.php