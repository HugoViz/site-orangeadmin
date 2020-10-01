<?php
session_start();

$bdd = new PDO('mysql:host=localhost;dbname=espace_membre', 'root', 'admin');

if(!empty($_SESSION['id']))
{
?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/test.css">
        
    <style>
    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: #000000;
    }

    li {
        float: left;
    }

    li a {
        display: block;
        color: white;
        text-align: center;
        padding: 10px 10px;
        text-decoration: none;
    }

    li a:hover:not(.active) {
        background-color: #111;
    }

    .active {
        background-color: black;
    }
    </style>
    </head>
    <body style="background-image: url('images/Laptop.jpg'); background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;">
    <?php
        if (isset($_POST['mot_de_passe']) AND $_POST['mot_de_passe'] ==  "toto")
        {
        // On affiche les codes
        }
        else // Sinon, on affiche un message d'erreur
        {
            echo '<p>Mot de passe incorrect</p>';
        }
        ?>

    <ul>
    <li><a class="active" href="accueil.php"><img src="images/orangeadmin_logo.png"
        width="60" height="81"></a></li>
    </ul>
    <div style="position:absolute; left:20%; top:50%;"><a class="active" href="gestion_employés.php"><img src="images/Avatar unisexe.jpg"
        width="100" height="100" padding=></a></div>
    <div style="position:absolute; left:46.5%; top:50%;"><a class="active" href="espace_licenciement.php"><img src="images/Licenciement.jpg"
        width="100" height="100" padding=></a></div>
    <div style="position:absolute; left:72.5%; top:50%;"><a class="active" href="statistiques.php"><img src="images/Stats.jpg"
        width="100" height="100" padding=></a></div>
        <div id="container">
                <div style="position: absolute" id="footer" class="row" style="margin: 0; height: 2vw">
                    <div class="col-6">Designed by HV & AB & YB</div>
                    <div class="col-6" style="text-align: end;" margin-top=00px>© Orange 2020</div>
                </div>
            </div>

    </body>
    </html>

<?php
}
else
{
    header('Location: connexion.php');
}
?>