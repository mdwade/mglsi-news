<html>
<title>MGLSI News | Accueil</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="public/assets/css/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="shortcut icon" href="public/assets/newsPhoto/journalism.png" type="image/x-icon">
<style>
    body,h1,h2,h3,h4,h5,h6 {font-family: "Karma", sans-serif}
    .w3-bar-block .w3-bar-item {padding:20px}
    a{
        text-decoration: none;
    }
    .barDefilement a:hover{
        background-color: #1e2332 !important;
    }
</style>
<body>

<!-- Sidebar (hidden by default) -->
<nav class="w3-sidebar w3-bar-block w3-card w3-top w3-xlarge w3-animate-left" style="display:none;z-index:2;width:40%;min-width:300px" id="mySidebar">
    <a href="javascript:void(0)" onclick="w3_close()"
       class="w3-bar-item w3-button">Fermer</a>
    <a href="#food" onclick="w3_close()" class="w3-bar-item w3-button">...</a>
    <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">...</a>
</nav>

<!-- Top menu -->
<div class="w3-top">
    <div class="w3-white w3-xlarge" style="max-width:1200px;margin:auto">

        <?php require_once 'view/assets/utils/menu.php'?>
        <hr>
    </div>
</div>
<br>
<!-- !PAGE CONTENT! -->
<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">

    <!-- First Photo Grid-->
    <div class="w3-row-padding w3-padding-16 w3-center" id="food">
        <?php

$listAritcles = json_decode($listAritcle, true);

foreach ($listAritcles as $article) {?>
            <div class="w3-col m3">
                <img src="view/assets/newsPhoto/article.png"  style="width: 270px; height:390px;">
                <h4><a href="<?='index.php?action=article&id=' . $article['id']?>"><?=substr($article['title'], 0, 50)?></a></h4>
                <p><?=substr($article['content'], 0, 75) . '...'?></p>
            </div>
            <?php
}
?>
    </div>

    <!-- Pagination -->
    <div class="w3-center w3-padding-32">
        <div class="w3-bar barDefilement">
            <a href="#" class="w3-bar-item w3-button w3-hover-black w3-round">« Précédent</a>
            <a href="#" class="w3-bar-item w3-button w3-hover-black w3-round">Suivant »</a>
        </div>
    </div>

    <hr>
    <?php require_once 'view/assets/utils/footer.php'?>
</div>
  <script src="public/js/jquery.min.js" charset="utf-8"></script>
</html>
