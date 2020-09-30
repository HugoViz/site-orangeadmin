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
                    <input id="searchinput" name="searchinput" type="search" placeholder="Rechercher un poste ou un service..." class="form-control input-md position_search" style="border-color: white; color:black">
                </div>
            </div>
        </fieldset>
                <div class="row" style="width: 100vw;">
                    <div class="form-group col-6" style="width: 100vw;">
                        <form class="form-horizontal">


                            <!-- Select Basic -->
                            <div class="form-group">
                            <label class="col-md-4 control-label" for="selectbasic">Choisissez une année</label>
                                <div class="col-md-4">
                                    <select id="selectbasic" name="selectbasic" class="form-control">
                                        <option value="1">2019</option>
                                        <option value="2">2018</option>
                                        <option value="3">2017</option>
                                        <option value="4">2016</option>
                                        <option value="5">2015</option>
                                        <option value="6">2014</option>
                                    </select>
                                    
                                </div>
                        <form class="form-horizontal">
            <fieldset>

<!-- Form Name -->
<legend style= "text-align: center; margin-right: 100px; width: 200px; color: white; background-color: black">Dépense annuelle brute du service</legend>
  <div class="col-md-4">
  <input style= "width: 100px; font-size: 50px; text-align: center"id="textinput" name="stats" type="text" placeholder="..." disabled class="form-control input-md">
                            </div>
<legend style= "text-align: center; margin-right: 100px; width: 200px; color: white; background-color: black">Dépense annuelle brute du service</legend>
  <div class="col-md-4">
  <input style= "width: 100px; font-size: 50px; text-align: center"id="textinput" name="stats" type="text" placeholder="..." disabled class="form-control input-md">
                            </div>
                    </div>

                </div>
                    

            </fieldset>
                        </form>

                <div class="form-group col-6" style="width: 100vw;">
                    <form class="form-horizontal">


                        <!-- Select Basic -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="selectbasic">Choisissez une année</label>
                                <div class="col-md-4">
                                    <select id="selectbasic" name="selectbasic" class="form-control">
                                        <option value="1">2019</option>
                                        <option value="2">2018</option>
                                        <option value="3">2017</option>
                                        <option value="4">2016</option>
                                        <option value="5">2015</option>
                                        <option value="6">2014</option>
                                    </select>
                                </div>
                                <form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend style= "text-align: center; margin-right: 100px; width: 200px; color: white; background-color: black">Dépense annuelle brute du service</legend>
  <div class="col-md-4">
  <input style= "width: 100px; font-size: 50px; text-align: center"id="textinput" name="stats" type="text" placeholder="..." disabled class="form-control input-md">
  </div>
  <legend style= "text-align: center; margin-right: 100px; width: 200px; color: white; background-color: black">Dépense annuelle brute du service</legend>
  <div class="col-md-4">
  <input style= "width: 100px; font-size: 50px; text-align: center"id="textinput" name="stats" type="text" placeholder="..." disabled class="form-control input-md">
                            </div>
</div>

</fieldset>
</form>

                        </div>
                </div>
</fieldset>
                    </form>
                </div>


        <div id="container">
            <div id="footer" class="row" style="margin: 0; height: 2vw">
                <div class="col-6">Designed by HV & AB & YB</div>
                <div class="col-6" style="text-align: end;" >© Orange 2020</div>
            </div>
        </div>

</body>
</html>