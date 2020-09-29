<!DOCTYPE html>
<html>

<head>
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

<body style="background-image: url('images/Espace\ licenciement\ 2.png'); background-repeat: no-repeat;
background-attachment: fixed;
background-size: cover;">
    <ul>
        <li>
            <a class="active" href="accueil.php"><img src="images/orangeadmin_logo.png" width="60" height="81"></a>
        </li>

    </ul>
    <form class="form-horizontal">
        <fieldset>

            <!-- Textarea -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="textarea"></label>
                <div class="col-md-4">
                    <textarea class="form-control" id="textarea" name="Raison du licenciement">Ecrire la raison du licenciement...</textarea>
                </div>
            </div>

            <!-- Button -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="singlebutton"></label>
                <div class="col-md-4">
                    <button id="singlebutton" name="Licencier" class="btn btn-primary">Licencier</button>
                </div>
            </div>

        </fieldset>
    </form>

    <div id="container">
        <div id="main"></div>
        <div id="footer">Designed by HV & AB
            <div style=padding-left:92%>© Orange 2020</div>
        </div>

    </div>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="js/bootstrap.js">
</body>

</html>