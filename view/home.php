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
        <?php require_once 'utils/menu.php'?>
    </div>
</div>
<br>
<!-- !PAGE CONTENT! -->
<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">

    <!-- First Photo Grid-->
    <div class="w3-row-padding w3-padding-16 w3-center" id="food">
        <?php
foreach ($listAritcle as $article) {?>
            <div class="w3-col m3">
                <img src="/public/assets/newsPhoto/<?=$article['photo']?>"  style="width: 270px; height:350px; border-radius: 5px">
                <h4><b><a href="<?='index.php?action=article&id=' . $article['id']?>"><?=$article['title']?></a></b></h4>
                <p><?=substr($article['content'], 0, 35) . '...'?></p>
                <div class="w3-row-padding" style="opacity: 0.5">
                    <div class="w3-col m5">
                        <i class="fa fa-clock-o"></i>
                        <i><?=$article['postedDate']?></i>
                    </div>

                    <div class="w3-col m7">
                        <i class="fa fa-comment-o"></i>
                        <i>Par <?=$article['pseudoAuthor']?></i>
                    </div>
                </div>
            </div>
            <?php
}
?>
    </div>

    <!-- Pagination -->
    <div class="w3-center w3-padding-32">
        <div class="w3-bar">
            <a href="#" class="w3-bar-item w3-button w3-hover-black">«</a>
            <a href="#" class="w3-bar-item w3-black w3-button">1</a>
            <a href="#" class="w3-bar-item w3-button w3-hover-black">2</a>
            <a href="#" class="w3-bar-item w3-button w3-hover-black">3</a>
            <a href="#" class="w3-bar-item w3-button w3-hover-black">4</a>
            <a href="#" class="w3-bar-item w3-button w3-hover-black">»</a>
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
  <!--   <script >
        $(()=>{
            alert("ok")
        })
    </script> -->
    <!-- End page content -->
</div>
<script type="text/javascript" src="public/assets/js/jquery.min.js"></script>
     <script type="text/javascript" >
        $(() => {
            alert("ok")
        })
     </script>
</body>
</html>

