<!DOCTYPE html>
<html>
<title>MGLSI News | Accueil</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="view/assets/css/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="shortcut icon" href="view/assets/newsPhoto/journalism.png" type="image/x-icon">
<style>
    body,h1,h2,h3,h4,h5,h6 {font-family: "Karma", sans-serif}
    .w3-bar-block .w3-bar-item {padding:20px}
    a{
        text-decoration: none;
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
    </div>
</div>
<br>
<!-- !PAGE CONTENT! -->
<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">

    <!-- First Photo Grid-->
    <div class="w3-row-padding w3-padding-16" id="">
        <div id="contenu">
            <?php
if ($_GET['action'] == 'article') {
	?>
                <div class="w3-row-padding">
                    <div class="w3-col m6">
                        <img src="<?="view/assets/newsPhoto/" . $article['photo']?>" style="width: 500px">
                    </div>
                    <div class="w3-col m6">
                        <h2><?=$article['title']?></h2>
                        <p><?=$article['content']?></p>
                        <i class="fa fa-comment-o" aria-hidden="true"></i>
                        <i>Publié le <?=$article['postedDate']?> par</i>
                        <i class="w3-text-blue"><?=$article['pseudoAuthor']?></i>
                    </div>
                </div>


                <br>

                <!--<div style="margin-left: 30px; padding: 20px;  border-radius: 5px; background-color: rgba(0, 255, 0, 0.1)">
                <h2>Commentaires</h2>
                <?php
/*                for ($i=0; $i<sizeof($comments); $i++){
	echo '<h3><img src="views/assets/img/noImage.jpg" style="width: 30px"> '
	.$comments[$i]['pseudo_auteur'].'</h3>'.
	'<span style="margin-left: px">'.$comments[$i]['comment'].'</span>'.
	'<hr>';
	}*/?>

                </div>--><?php

} elseif ($_GET['action'] == 'categorie') {
	if (!empty($article)) {
		foreach ($article as $article) {?>
                        <div class="article">
                        <h1><a href="index.php?action=post&id=<?=$article['id']?>"><?=$article['titre']?></a></h1>
                        <p><?=substr($article['contenu'], 0, 300) . '...'?></p>
                        </div><?php
}
	} else {?>
                    <h3>Aucun article dans cette catégorie !</h3>
                    <meta http-equiv="refresh" content="3; url=index.php"><?php
}
}
?>
            <div>
                <h1> </h1>
            </div>
        </div>
    </div>

    <hr>

    <!-- Footer -->
    <footer class="w3-row-padding w3-padding-32">
        <div class="w3-third">
            <h3>FOOTER</h3>
            <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
        </div>

        <div class="w3-third">
            <h3>BLOG POSTS</h3>
            <ul class="w3-ul w3-hoverable">
                <li class="w3-padding-16">
                    <img src="/w3images/workshop.jpg" class="w3-left w3-margin-right" style="width:50px">
                    <span class="w3-large">Lorem</span><br>
                    <span>Sed mattis nunc</span>
                </li>
                <li class="w3-padding-16">
                    <img src="/w3images/gondol.jpg" class="w3-left w3-margin-right" style="width:50px">
                    <span class="w3-large">Ipsum</span><br>
                    <span>Praes tinci sed</span>
                </li>
            </ul>
        </div>

        <div class="w3-third w3-serif">
            <h3>POPULAR TAGS</h3>
            <p>
                <span class="w3-tag w3-black w3-margin-bottom">Travel</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">New York</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Dinner</span>
                <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Salmon</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">France</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Drinks</span>
                <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Ideas</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Flavors</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Cuisine</span>
                <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Chicken</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Dressing</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Fried</span>
                <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Fish</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Duck</span>
            </p>
        </div>
    </footer>

    <!-- End page content -->

</div>
</body>
</html>
