- [Instruction d'installation du projet](#instruction-dinstallation-du-projet)
  - [Installation sur un serveur local](#installation-sur-un-serveur-local)
  - [Dépendances](#dépendances)
  - [Import de la base de données](#import-de-la-base-de-données)
  - [Modification du code nécessaire](#modification-du-code-nécessaire)


## Instruction d'installation du projet

### Installation sur un serveur local

Pour installer le projet sur un serveur local il faut placer le dossier contenant le code dans le dossier qui contient les autres applications fonctionnant sur le serveur.

Une fois le projet installé sur le serveur il vous suffira d'ouvrir votre navigateur web et saisir l'url pointant sur le dossier de votre projet. Exemple: 127.0.0.1/NomDuDossier

### Dépendances

Pour le bon fonctionnement du projet il faudra installer Composer: https://getcomposer.org/doc/00-intro.md une fois Composer installer vous devrez installer Twig à l'aide de ce dernier: https://packagist.org/packages/twig/twig

### Import de la base de données

Pour récupérer la base de données il faudra importer le fichier 'bdd.sql' (à la racine du projet), dans votre système de base de données afin de récupérer les données de démo du projet.


### Modification du code nécessaire

Quelques modifications sont requises pour le bon fonctionnement de l'application.

Dans le fichier 'connect.php' situé dans le dossier 'model' du projet vous devrez modifier l'hôte, le nom d'utilisateur et son mot de passe, le nom  de votre base de données, comme ceci:

    try {
        $bdd = new PDO('mysql:host=localhost;dbname=nomBase;charset=utf8', 'utilisateurBase', 'motDePasseBase');
    } catch (Exception $e){
        die('Erreur : ' . $e->getMessage());
    }

Le projet est maintenant fonctionnel.