<?php
session_start();

$bdd = new PDO('mysql:host=localhost;dbname=espace_membre', 'admin', 'admin');

if(!empty($_SESSION['id']))
{
?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/test.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        
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

    <ul>
    <li><a class="active" href="accueil.php"><img src="images/orangeadmin_logo.png"
        width="60" height="81"></a></li>
                            <!-- Button -->
                    <div class="form-group position_button1">
                        <div class="col-md-5">
                            <a id="singlebutton" name="Deconnexion" class="btn btn-primary active" href="deconnexion.php" style="width: 150px;background-color: orangered;border-color: orangered; margin-top: 10%; margin-left: 195%;">Deconnexion</a>
                        </div>
                    </div>
    </ul>
    <div style="position:absolute; left:20%; top:50%;"><a class="active" href="gestion_employés.php"><img src="images/Avatar unisexe.jpg"
        width="100" height="100" padding=></a></div>
    <div style="position:absolute; left:46.5%; top:50%;"><a class="active" href="espace_licenciement.php"><img src="images/Licenciement.jpg"
        width="100" height="100" padding=></a></div>
    <div style="position:absolute; left:72.5%; top:50%;"><a class="active" href="statistiques.php"><img src="images/Stats.jpg"
        width="100" height="100" padding=></a></div>
        <div id="container">
                <div style="position: absolute; margin-left:0" id="footer" class="row" style="margin: 0; height: 2vw">
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