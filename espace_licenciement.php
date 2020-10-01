<?php
session_start();

$bdd = new PDO('mysql:host=localhost;dbname=espace_membre', 'root', 'admin');

if(!empty($_SESSION['id']))
{
?>

<!DOCTYPE html>
<html>

<head>
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

<body style="background-image: url('images/Gestion\ employé_1.png'); background-repeat: no-repeat;
background-attachment: fixed;
background-size: cover;">

    <ul>
        <li>
            <a class="active" href="accueil.php"><img src="images/orangeadmin_logo.png" width="60" height="81"></a>
        </li>
        <div class=gestion>
            <h1>Espace Licenciement</h1>
        </div>
    </ul>
    </ul>
    <form class="form-horizontal">
        <fieldset class=position_buttons>
            <!-- Search input-->
            <div class="form-group">
                <div class="col-md-12">
                    <input style=opacity:0.66 id="searchinput" name="searchinput" type="search" placeholder="Rechercher un poste ou un service..." class="form-control input-md position_search" style="border-color: white; color:black">
                </div>
            </div>
        </fieldset>
    </form>

    <div class="row" style="width: 100vw;">
        <div class="col-5 image">
            <img src="images/Avatar unisexe.jpg " height="200px " width="200x " />
            <!-- Text input-->
        </div>
        <div class="form-group col-7" style="width: 100vw;">
            <div>
                <div class="col-12">
                    <input id="textinput " name="Prénom Nom " type="text " placeholder="Prénom Nom " class="form-control input-md position_nom_prénom" style="width: 200px">
                </div>
                <div class="col-12">
                    <input id="textinput " name="Age " type="text " placeholder="Age " class="form-control input-md position_age" style="width: 100px">
                </div>
                <div class="col-12">
                    <input id="textinput " name="Sexe " type="text " placeholder="Sexe " class="form-control input-md position_sexe" style="width: 100px">

                </div>
            </div>
        </div>
    </div>
    </div>

    <form>
        <form class="form-horizontal ">







                <!-- Text input-->
                <div class="form-group">
                    <div class="col-12">
                        <input id="textinput " name="Service " type="text " placeholder="Service " class="form-control input-md position_service" style="width: 280px">

                    </div>
                </div>
                <div class="row" style="width: 100vw;">
                    <div class="form-group col-6" style="width: 100vw;">
                        <!-- Text input-->
                        <div class="col-8 ">
                            <input id="textinput " name="Poste " type="text " placeholder="Poste " class="form-control input-md position_poste">

                        </div>
                        <div class="col-8">
                            <input id="textinput " name="Date de naissance " type="text " placeholder="Date de naissance " class="form-control input-md position_date">

                        </div>
                        <div class="col-8">
                            <input id="textinput " name="Numéro de sécurité sociale " type="text " placeholder="Adresse" class="form-control input-md position_adresse">

                        </div>
                        <div class="col-8">
                            <input id="textinput " name="Date de naissance " type="text " placeholder="Salaire" class="form-control input-md position_salaire">

                        </div>
                        <div class="col-8">
                            <input id="textinput " name="Date de naissance " type="text " placeholder="Dernier Salaire" class="form-control input-md position_dernier_salaire">

                        </div>
                    </div>
                    <div class="form-group col-6" style="width: 100vw;">
                        <!-- Text input-->
                        <div class="col-8 ">
                            <input id="textinput " name="Date de naissance " type="text " placeholder="Numéro de sécurité sociale" class="form-control input-md position_sécu">

                        </div>
                        <div class="col-8 ">
                            <input id="textinput " name="Numéro de sécurité sociale " type="text " placeholder="Tel" class="form-control input-md position_tel">

                        </div>
                        <div class="col-8 ">
                            <input id="textinput " name="Numéro de sécurité sociale " type="text " placeholder="Mail" class="form-control input-md position_mail">

                        </div>
                        <div class="col-8 ">
                            <input id="textinput " name="Numéro de sécurité sociale " type="text " placeholder="Contrat" class="form-control input-md position_contrat">

                        </div>
                        <div class="col-8 ">
                            <input id="textinput " name="Numéro de sécurité sociale " type="text " placeholder="Prochain Salaire" class="form-control input-md position_prochain_salaire">

                        </div>
                    </div>
                </div>

        </form>
        <form class="form-horizontal">
    <fieldset>

        <!-- Textarea -->
        <div class="form-group">
            <div class="col-12">
                <textarea class="form-control" id="textarea" name="Raison du licenciement">Ecrire la raison du licenciement...</textarea>
            </div>
        </div>

        <!-- Button -->
        <div class="form-group">
            <div class="col-12" style="text-align: center;">
                <button id="singlebutton" name="Licencier" class="btn btn-primary active" style="width: 200px;background-color: orangered;border-color: orangered;">Licencier</button>
            </div>
        </div>

    </fieldset>
</form>

        <div id="container">
            <div id="footer" class="row" style="margin: 0; height: 2vw">
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