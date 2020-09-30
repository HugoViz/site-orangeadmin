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

<body style="background-image: url('images/Statistiques\ 1.jpg'); background-repeat: no-repeat;
background-attachment: fixed;
background-size: cover;">
    <ul>
        <li>
            <a class="active" href="accueil.php"><img src="images/orangeadmin_logo.png" width="60" height="81"></a>
        </li>
        <div class=gestion>
            <h1>Statistiques financières</h1>
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
        <div class="row" style="width: 100vw;">


            <section class="row" style="width: 100vw">
                <div class="col-6 row" style="margin-left:3%">
                    <div class="col-12">
                        <select style="width:400px; margin-left: 18%; " id="selectbasic" name="selectbasic" class="form-control position_selec_mois">
                        <option value="1">Sélectionnez un mois...</option>
                        <option value="2">janvier</option>
                        <option value="3">février</option>
                        <option value="4">mars</option>
                        <option value="5">avril</option>
                        <option value="6">mai</option>
                        <option value="7">juin</option>
                        <option value="8">juillet</option>
                        <option value="9">aout</option>
                        <option value="10">septembre</option>
                        <option value="11">octobre</option>
                        <option value="12">novembre</option>
                        <option value="13">décembre</option>
                    </select>
                    </div>
                    <div class="col-12" style="padding: 0 25%; margin-top: 5%; margin-bottom: 7%;">
                        <div style="; color: white;background: black;padding: 5%; text-align: center;">
                            <p>
                                <h3>Dépense Mensuelle brute
                                </h3>
                            </p>
                            <h3>
                                <p style=" text-align: center; background: yellow; width: 90%; margin: auto; border-radius: 10px 10px 10px 10px; color: black; ">...</p>
                            </h3>
                        </div>
                    </div>
                    <div class="col-12" style="padding: 0 25%; margin-bottom: 7%">
                        <div style=" color: white;background: black;padding: 5%; text-align: center;">
                            <h3>
                                <p style="margin-top: 7%">Dépense Mensuelle nette
                                </p>
                            </h3>
                            <h3>
                                <p style=" text-align: center; background: yellow; width: 90%; margin: auto; border-radius: 10px 10px 10px 10px; color: black; ">...</p>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-6 row">
                    <div class="col-12">
                        <select style="width:400px; margin-left: 18%; " id="selectbasic" name="selectbasic" class="form-control position_selec_mois">
                        <option value="1">Sélectionnez une année...</option>
                        <option value="2">2019</option>
                        <option value="3">2018</option>
                        <option value="4">2017</option>
                        <option value="5">2016</option>
                        <option value="6">2015</option>
                        <option value="7">2014</option>
                    </select>
                    </div>
                    <div class="col-12" style="padding: 0 25%; margin-top: 5%; margin-bottom: 7%;">
                        <div style="; color: white;background: black;padding: 5%; text-align: center;">
                            <p>
                                <h3>Dépense Annuelle brute
                                </h3>
                            </p>
                            <h3>
                                <p style=" text-align: center; background: orange; width: 90%; margin: auto; border-radius: 10px 10px 10px 10px; color: black; ">...</p>
                            </h3>
                        </div>
                    </div>
                    <div class="col-12" style="padding: 0 25%; margin-bottom: 7%">
                        <div style=" color: white;background: black;padding: 5%; text-align: center;">
                            <h3>
                                <p style="margin-top: 7%">Dépense Annuelle nette
                                </p>
                            </h3>
                            <h3>
                                <p style=" text-align: center; background: orange; width: 90%; margin: auto; border-radius: 10px 10px 10px 10px; color: black; ">...</p>
                            </h3>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </form>

    <div id="container">
        <div id="footer" class="row" style="margin: 0; height: 2vw">
            <div class="col-6">Designed by HV & AB & YB</div>
            <div class="col-6" style="text-align: end;">© Orange 2020</div>
        </div>
    </div>

</body>

</html>