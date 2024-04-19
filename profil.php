<?php
 require_once('connexion.php');
$idP = isset($_GET['id_profil'])?$_GET['id_profil']:0;
 $req=connexion()->query('SELECT * FROM apprenants');
 $req->execute();
 $donnees=$req->fetch();
 //return($donnees);
?>

<!DOCTYPE HTML>
<HTML>
    <header>
    <meta charset  = "utf-8" >
     <title> Mon profil </title>     
    <link rel = "stylesheet" type = "text/css" href="css/style.css">
    </header>
    <body>
        <div class="main">
        <div class= "formulaire">
    <?php while($donnees=$req->fetch()) { ?>
    <div class="showProfil">
        <h4>Nom :<?php echo $donnees['Nom'] ?></h4></br>
        <h4>Prenom: <?php echo $donnees['Prenom'] ?></h4></br>
        <h4>Referentiel: <?php echo $donnees['referentiel'] ?></h4></br>
        <h4>Email: <?php echo $donnees['email'] ?></h4></br>
        <h4>Telephone: <?php echo $donnees['telephone'] ?></h4></br>
        <h4>Adresse: <?php echo $donnees['adresse'] ?></h4>
        <div class="container">
        <a href="editProfile.php?idP=<?php echo $donnees['id_profil']?>" class="btn">Editer</a>
    </div>
    </div>
    <?php } ?>
    </div>
    </div>
        </div>
    </body>
</HTML>