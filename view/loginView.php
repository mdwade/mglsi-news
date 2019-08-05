<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MGLSI | Connexion</title>
    <link rel="stylesheet" href="view/assets/css/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="view/assets/newsPhoto/journalism.png" type="image/x-icon">
    <style>
        body,h1,h2,h3,h4,h5,h6 {font-family: "Karma", sans-serif}
        body{
            background-image: url('view/assets/newsPhoto/bg.png');background-size: cover;
        }
        .w3-bar-block .w3-bar-item {padding:20px}
        a{
            text-decoration: none;
        }
        .formDiv{
            width: 500px;
            position: relative;
            left: 0;
            right:0;
            margin-left: auto;
            margin-right: auto
        }
    </style>
</head>
<body>
<!-- Top menu -->
<div class="w3-top">
    <div class="w3-white w3-xlarge" style="max-width:1200px;margin:auto">
        <?php require_once 'view/assets/utils/menu.php'?>
        <hr>
    </div>
</div>
<br>

<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:150px">
    <div class="w3-padding-16 w3-center">
        <div class="w3-card w3-round-large w3-padding w3-white formDiv">
            <h4 class="w3-opacity">Connexion</h4>
            <hr>
            <form action="" class="w3-form">
                <input type="text" class="w3-input w3-border w3-round w3-padding-16" placeholder="Votre login...">
                <br>
                <input type="password" class="w3-input w3-border w3-round w3-padding-16" placeholder="Votre mot de passe...">
                <br>
                <input type="submit" value="Connexion" class="w3-button w3-green w3-round-large">
            </form>
        </div>
    </div>
</div>

<div class="w3-bottom w3-center w3-text-white">
    <p>MGLSI News | Tout droits reservés.</p>
</div>
</body>
</html>
