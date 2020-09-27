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
<body style="background-image: url('images/Gestion\ employé_1.png'); background-repeat: no-repeat;
background-attachment: fixed;
background-size: cover;">

<ul>
  <li><a class="active" href="accueil.php"><img src="../code GIT/images/orangeadmin_logo.png"
    width="60" height="81"></a></li>
    <div class=gestion>Gestion des employés</div>
</ul>
<div id="container">
   <div id="main"></div>
   <div id="footer">Designed by HV & AB<div style=padding-left:92%>© Orange 2020</div></div>
</div>

</body>
</html>