<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Gérer mes horaires</title>
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
             echo ' <li><a href="connexionpr.php"><span class="glyphicon glyphicon-log-in"></span> Connexion</a></li>
                    <li><a href="contact.php"><span class="glyphicon glyphicon-envelope" aria-hidden="true" ></span>Contact </a></li>';
            } 

            ?>
    
            </ul>
        </div>
    </nav>

<div class="container">
            <br><br> <br><br><br><br>
            <div id="compte" class="col-md-offset-1 col-md-10">
                <nav class="navbar navbar-default" role="navigation">
                    <div class="col-md-1">
                 <a href="gererhorraires.php"> <img id="personne"src="img/medecin.jpg" alt="compte"></a>
                    </div>
                    <div class="col-md-10">
                        <ul class="nav navbar-nav navbar-right">
                            <li   ><a href="comptemedecin.php"> <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>Modifier mon compte</a></li>
                            <li class="active"><a href="gererhorraires.php"><span class="glyphicon glyphicon glyphicon-time" aria-hidden="true " ></span> <b><u>Gérer les jours et les horraire de travail</u></b></a></li>
                            <li><a href="gererdv.php"><span class="glyphicon glyphicon glyphicon-list" aria-hidden="true" > </span> La liste rendez-vous</a></li>
                        </ul>
                    </div>
                </nav>
        <div class="col-md-offset-3 col-md-6">
            <h3 id="titre" class="text-center"> Horaires du travail</h3><br>
            <div  class="table-responsive" style="background-color:rgb(23, 130, 138);" > 
                <table class="table text-body">
                    <tr>
                        <td></td>
                        <td id="jour">Matin</td>
                        <td id="jour">Soir</td>
                    </tr>
                    <tr>
                        <td id="jour">Samedi</td>
                        <td><input type="time" id="appt" name="appt"
                            min="08:00" max="14:00" required></td>
                        <td><input type="time" id="appt" name="appt"
                            min="12:00" max="18:00" required></td>
                    </tr>
                    <tr>
                        <td id="jour">Dimanche</td>
                        <td><input type="time" id="appt" name="appt"
                            min="08:00" max="14:00" required></td>
                        <td><input type="time" id="appt" name="appt"
                            min="12:00" max="18:00" required></td>
                    </tr>
                    <tr>
                        <td id="jour">Lundi</td>
                        <td><input type="time" id="appt" name="appt"
                            min="08:00" max="14:00" required></td>
                        <td><input type="time" id="appt" name="appt"
                            min="12:00" max="18:00" required></td>
                    </tr>
                    <tr>
                        <td id="jour">Mardi</td>
                        <td><input type="time" id="appt" name="appt"
                            min="08:00" max="14:00" required></td>
                        <td><input type="time" id="appt" name="appt"
                            min="12:00" max="18:00" required></td>
                    </tr>
                    <tr>
                        <td id="jour">Mercredi</td>
                        <td><input type="time" id="appt" name="appt"
                            min="08:00" max="14:00" required></td>
                        <td><input type="time" id="appt" name="appt"
                            min="12:00" max="18:00" required></td>
                    </tr>
                    <tr>
                        <td id="jour">Jeudi</td>
                        <td><input type="time" id="appt" name="appt"
                            min="08:00" max="14:00" required></td>
                        <td><input type="time" id="appt" name="appt"
                            min="12:00" max="18:00" required></td>
                    </tr>
                    <tr>
                        <td id="jour">Vendredi</td>
                        <td><input type="time" id="appt" name="appt"
                            min="08:00" max="14:00" required></td>
                        <td><input type="time" id="appt" name="appt"
                            min="12:00" max="18:00" required></td>
                    </tr>
                </table>
            </div>
        
            <div class="text-center">
                <a id="confirmer" href="#">Enregistrer</a><br><br>
            </div>
        </div>
</div></div>
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