# __0320_PHP_FONCTIONS_ATELIER

## Notre client a eu besoin d'une nouvelle page sur son site qui doit être accessible uniquement par un utilisateur logué :

### Sur cette page qui est nommée stats (pages/stats.php), l'utilisateur est capable de : 
- répondre à un questionnaire de 3 questions et d'avoir le résultat de son formulaire.
  Pour comprendre la logique du code, il te suffit de lire la page stats.php, tout le code est commenté et explique ce qui se passe en php

### L'équipe de designer a donc bien bossé, de nouvelles fonctionnalités ont aussi été ajoutés par les backend, notamment :
- Un nouveau fichier nommé controller.php dans lequel on retrouve un fichier nommé stat.php qui regroupe toutes les nouvelles fonctions qui servent au site
- A l'interieur du dossier controller on a aussi un dossier data qui contient les datas utiles au site
- Dans le controller.php => Fonctions de login et de logout automatisées 
- Dans le controller.php => Fonction de sécurisation des strings

### Ce qui nous reste à faire  :
- Ecrire la methode getRandomDate() qui permettrait d'afficher une fausse date pour chaque article de la page content.php : key_word = _DATE dans le fichier /pages/content.php et controller/controller.php 
- Ecrire la methode getRandomVisitorNumber() qui permettrait d'afficher sur la page profile.php, un faux nombre au hasard compris entre 1 et 5000 : key_word = _INT dans le fichier /pages/profile.php et controller/controller.php
- Faire le traitement du formulaire de mise à jour des infos user sur la page profile.php : key_word = _UPDATE_USER
    -> Ecrire la methode getUpdateUser() qui permettrait de mettre à jour les informations user de manière automatisée 
    Attention : Les données doivent être sécurisées à l'aide de la méthode cleanString() 
    (controller.php : key_word = _UPDATE_USER)
    -> Tester que le nouveau username et/ou la photos s'affichent correctement 
- Rendre le bouton sign in de la page index.php insible à l'utilisateur logué
- FIX : Sur la page login.php, afficher les messages d'erreurs lorsque le formulaire est soumis sans username/password ou les 2 : key_word = _FIX dans pages/login.php
- Bonus : J'ai encore caché un personnage dans le code, pour le découvrir il faut que tu resolves le challenge de la page stats.php : key_word = _US1 dans stats.php et controller.php
