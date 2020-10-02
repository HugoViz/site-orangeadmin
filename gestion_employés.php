<?php
session_start();

$bdd = new PDO('mysql:host=localhost;dbname=espace_membre', 'admin', 'admin');

if(!empty($_SESSION['id']))
{
?>

    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/test.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
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

        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    </head>

    <body style="background-image: url('images/Gestion\ employé_1.png'); background-repeat: no-repeat;background-attachment: fixed;background-size: cover;">

        <ul>
            <li>
                <a class="active" href="accueil.php"><img src="images/orangeadmin_logo.png" width="60" height="81"></a>
            </li>
            <div class=gestion>
                <h1>Gestion des employés</h1>
            </div>

            <!-- Button -->
            <div class="form-group position_button1" style="margin-bottom:0">
                <div class="col-3">
                    <a id="singlebutton" name="Deconnexion" class="btn btn-primary active" href="deconnexion.php" style="width: 150px;background-color: orangered;border-color: orangered; margin-left: 356%; margin-top: -60%;">Deconnexion</a>
                </div>
            </div>
        </ul>
        <form class="form-horizontal">
            <fieldset class=position_buttons>
                <!-- Search input-->
                <div class="form-group">
                    <div class="col-md-12">
                        <input style=opacity:0.66 id="searchinput" name="searchinput" type="search" placeholder="Rechercher un employé..." class="form-control input-md position_search" style="border-color: white; color:black">
                    </div>
                    <ul id="ul-id" tabindex="0" class="ui-menu ui-widget ui-widget-content ui-autocomplete ui-front" style="display: none; top: 32px; left: 53.3438px; width: 201px;">
                        <li class="ui-menu-item">
                            <div id="ui-id" tabindex="-1" class="ui-menu-item-wrapper"></div>
                        </li>
                    </ul>
                </div>
                <div class="row" style="width: 100vw;">
                    <div class="form-group col-6">
                        <!-- Button -->
                        <div class="form-group position_button1">
                            <div class="col-md-5">
                                <a id="singlebutton" name="Editer" class="btn btn-primary active" href="gestion_employés_edit.php" style="width: 250px;background-color: orangered;border-color: orangered;">Editer une fiche</a>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-6">
                        <!-- Button -->
                        <div class="form-group position_button2">
                            <div class="col-md-4">
                                <a id="singlebutton" name="Créer" class="btn btn-primary active" href="gestion_employés_add.php" style="width: 250px;background-color: orangered;border-color:orangered">Créer une fiche Employé</a>
                            </div>
                        </div>
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
                            <input id="textinput " name="Poste" type="text " placeholder="Poste " class="form-control input-md position_poste">

                        </div>
                        <div class="col-8">
                            <input id="textinput " name="Date de naissance" type="text " placeholder="Date de naissance " class="form-control input-md position_date">

                        </div>
                        <div class="col-8">
                            <input id="textinput " name="Adresse" type="text " placeholder="Adresse" class="form-control input-md position_adresse">

                        </div>
                        <div class="col-8">
                            <input id="textinput " name="Salaire" type="text " placeholder="Salaire" class="form-control input-md position_salaire">

                        </div>
                        <div class="col-8">
                            <input id="textinput " name="Dernier_Salaire" type="text " placeholder="Dernier Salaire" class="form-control input-md position_dernier_salaire">

                        </div>
                    </div>
                    <div class="form-group col-6" style="width: 100vw;">
                        <!-- Text input-->
                        <div class="col-8 ">
                            <input id="textinput " name="Secu" type="text " placeholder="Numéro de sécurité sociale" class="form-control input-md position_sécu">

                        </div>
                        <div class="col-8 ">
                            <input id="textinput " name="Tel" type="text " placeholder="Tel" class="form-control input-md position_tel">

                        </div>
                        <div class="col-8 ">
                            <input id="textinput " name="Mail" type="text " placeholder="Mail" class="form-control input-md position_mail">

                        </div>
                        <div class="col-8 ">
                            <input id="textinput " name="Contrat" type="text " placeholder="Contrat" class="form-control input-md position_contrat">

                        </div>
                        <div class="col-8 ">
                            <input id="textinput" name="Prochain_Salaire" type="text " placeholder="Prochain Salaire" class="form-control input-md position_prochain_salaire">

                        </div>
                    </div>
                </div>

            </form>

            <div id="container">
                <div id="footer" class="row" style="margin: 0; height: 2vw">
                    <div class="col-6">Designed by HV & AB & YB</div>
                    <div class="col-6" style="text-align: end;" margin-top=00px>© Orange 2020</div>
                </div>
            </div>
            <script>
                $(function() {
                    function log(message) {
                        $("<div>").text(message).prependTo("#log");
                        $("#log").scrollTop(0);
                    }

                    $("#searchinput").autocomplete({
                        source: function(request, response) {
                            $.ajax({
                                url: "http://localhost/code%20Git/BDD/fiche_employe.php",
                                dataType: "jsonp",
                                data: {
                                    term: 'request.term'
                                },
                            }).done(function(data) {
                                console.log(data);
                                var html = ''
                                for (let i = 0; i < data.length; i++) {
                                    html += '<li class="ui-menu-item"> <div id="ui-id" data-id="-1" class="ui-menu-item-wrapper">' + data[i]['prenom'] + ' ' + data[i]['nom'] + '</div> </li>'
                                }
                                $("#ul-id").html(html)
                                response(data);
                            });

                        },
                        minLength: 2,
                        select: function(event, ui) {
                            log("Selected: " + ui.item.value + " aka " + ui.item.id);
                        }
                    });
                });
            </script>
    </body>

    </html>

    <?php
}
else
{
    header('Location: connexion.php');
}
?>