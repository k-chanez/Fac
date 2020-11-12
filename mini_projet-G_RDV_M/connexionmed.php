
<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="Assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">

    <title>Se connecter</title>
</head>
<body>
<?php
if (isset($_SESSION["inscr"]) and $_SESSION["inscr"]==true) {
    echo "<script>alert('On vous a envoyer un lien de confirmation à votre adresse e-mail.Vérifiez vos mails ')</script>";
    $_SESSION["inscr"]=null;}
?>
  <nav id="menu" class="navbar navbar-default navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#monmenu">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php"><span class="glyphicon glyphicon-home"></span> RDV&SOINS</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div id="monmenu"class="collapse navbar-collapse ">
        <ul class="nav navbar-nav navbar-right">
        <?php 

if (isset($_SESSION["authmed"])and $_SESSION["authmed"]==true) {
    echo ' <li><a href="comptemedecin.php"><span class="glyphicon glyphicon-user"></span> '.$_SESSION["username"] .'</a></li>';
 } else {
     if(isset($_SESSION["authpat"])and $_SESSION["authpat"]==true)
  echo '<li><a href="gerecompte.php"><span class="glyphicon glyphicon-user"></span> '.$_SESSION["username"] .'</a></li>';
  else{echo'<li><a href="inscription.php"><span class="glyphicon glyphicon-user"></span> Inscription</a></li>';
 } }
            if (isset($_SESSION["authmed"])and $_SESSION["authmed"]==true or (isset($_SESSION["authpat"])and $_SESSION["authpat"]==true)) {
               echo ' <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Déconnexion</a></li>
                      <li><a href="contact.php"><span class="glyphicon glyphicon-envelope" aria-hidden="true" ></span>Contact </a></li>';
            } else {
             echo ' <li class="active"><a href="connexionpr.php"><span class="glyphicon glyphicon-log-in"></span> Connexion</a></li>
                    <li><a href="contact.php"><span class="glyphicon glyphicon-envelope" aria-hidden="true" ></span>Contact </a></li>';
            } 

            ?>

        </ul>
    </div>
</nav><br><br><br><br>

  
<div class="container" id="men"><br>
  <H2 id="titre" class="text-center" style="color: white";> Se connecter</H2><br>

    <div class="col-md-offset-3 col-md-6"><br>
  <form class="form-horizontal " action="traitConnexionmed.php" method="post">
    <div class="form-group">
      <label for="usermedecin">Nom d'utilisateur :</label>
      <input type="text" class="form-control" id="usermedecin" name="usermedecin" required>
    </div>
    <div class="form-group">
      <label for="mdp">Mot de passe :</label>
      <input type="password" class="form-control" id="mdp" placeholder="Entrez votre mot de passe" name="mdp" required>
    </div>
    <div >
    <?php
if (isset($_SESSION["authmed"]) and $_SESSION["authmed"]==false) {
    echo '<h5 style="color:rgb(177, 10, 20);"><span class="glyphicon glyphicon-exclamation-sign"></span><b>Votre mot de passe  ou nom d\'utilisateur est incorrect! Veuillez réessayez SVP</b> </h5>';
    $_SESSION["authmed"]=null;
}

     ?>
    </div>
    <div class="text-center">
      <button id="insc" type="submit">Se connecter</button><br><br>
    </div><br>
    <div class="form-group text-center">
      <a id="rej" style="font-size: 18px;" href="#">Mot de passe oublié</a>
      <a style=" margin-left: 80px; font-size: 18px;" href="inscription.php" id="rej">S'inscrire ?</a>
    </div>
  </form>
</div>
</div><br><br>
<footer  id="footer-page" class="footer text-center">
  <p id="textFooter">
  Tout Droit reservé. rdv & soins 2020.
  </p>
</footer>
<script src="Assets/jquery/jquery.min.js"></script>
  <script src="Assets/js/bootstrap.min.js"></script>


</body>
</html>