<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MGLSI | Admin</title>
    <link rel="stylesheet" href="view/assets/css/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="view/assets/newsPhoto/journalism.png" type="image/x-icon">
    <style>
        body,h1,h2,h3,h4,h5,h6 {font-family: "Karma", sans-serif}
        .head ,.menuBtn{
            background-color: #1e2332;
            color: #ffffff;
        }

        #modalAddArticle header{
            background-color: #1e2332;
            color: #ffffff;
        }

        #modalAddArticle span{
            background-color: #1e2332;
            color: #ffffff;
        }

        #modalupdateArticle header{
            background-color: #1e2332;
            color: #ffffff;
        }

        #modalupdateArticle span{
            background-color: #1e2332;
            color: #ffffff;
        }

        #modalAddCategorie header{
            background-color: #1e2332;
            color: #ffffff;
        }

        #modalAddCategorie span{
            background-color: #1e2332;
            color: #ffffff;
        }

    </style>
</head>
<body>
<div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="mySidebar">
    <button class="w3-bar-item w3-button w3-large"
            onclick="closeMenu()">Fermer</button>
    <h4 class="w3-container"><img src="view/assets/newsPhoto/user.png" style="width: 35px"> Admin Pseudo</h4>
    <div class="w3-dropdown-hover w3-margin">
        <button class="w3-button">Articles <i class="fa fa-caret-down"></i></button>
        <div class="w3-dropdown-content w3-bar-block">
            <a href="#" class="w3-bar-item w3-button w3-text-blue" onclick="openTab(event, 'Articles')">Liste des articles</a>
            <a href="#" class="w3-bar-item w3-button w3-text-blue" onclick="document.getElementById('modalAddArticle').style.display='block'">Ajouter un article</a>
        </div>
    </div>
    <div class="w3-dropdown-hover w3-margin">
        <button class="w3-button">Catégories <i class="fa fa-caret-down"></i></button>
        <div class="w3-dropdown-content w3-bar-block">
            <a href="#" class="w3-bar-item w3-button w3-text-blue" onclick="openTab(event, 'Catégories')">Liste des catégories</a>
            <a href="#" class="w3-bar-item w3-button w3-text-blue" onclick="document.getElementById('modalAddCategorie').style.display='block'">Ajouter une catégorie</a>
        </div>
    </div>
    <div class="w3-dropdown-hover w3-margin">
        <button class="w3-button">Utilisateurs <i class="fa fa-caret-down"></i></button>
        <div class="w3-dropdown-content w3-bar-block">
            <a href="#" class="w3-bar-item w3-button w3-text-blue" onclick="openTab(event, 'Utilisateurs')">Liste des utilisateurs</a>
            <a href="#" class="w3-bar-item w3-button w3-text-blue">Ajouter un utilisateur</a>
        </div>
    </div>
</div>

<div id="main">

    <div class="head">
        <button id="openNav" class="w3-button w3-xlarge menuBtn" onclick="openMenu()">&#9776;</button>
        <div class="w3-container">

            <div class="w3-col m10">
                <h4 class="w3-container"><img src="view/assets/newsPhoto/user.png" style="width: 35px"> Admin Pseudo</h4>
            </div>
            <div class="w3-col m2">
                <h4 class="w3-container">
                    <a href="" class="w3-button w3-small w3-round w3-red">Se déconnecter</a>
                </h4>
            </div>
        </div>
    </div>

    <div class="w3-bar w3-border-bottom">
        <button class="tablink w3-bar-item w3-button" onclick="openTab(event, 'Articles')">Articles</button>
        <button class="tablink w3-bar-item w3-button" onclick="openTab(event, 'Catégories')">Catégories</button>
        <button class="tablink w3-bar-item w3-button" onclick="openTab(event, 'Utilisateurs')">Utilisateurs</button>
    </div>

    <div id="Articles" class="w3-container city">
        <div class="w3-padding-16">
            <div class="w3-row-padding">
                <div class="w3-col m10">
                    <h3>Liste des articles</h3>
                    <div class="w3-container">
                        <table class="w3-table">
                            <thead>
                            <tr class="w3-light-grey">
                                <th>ID</th>
                                <th>Titre</th>
                                <th>Contenu</th>
                                <th>Catégorie</th>
                                <th>Photo</th>
                                <th>Auteur</th>
                                <th>Date de publication</th>
                            </tr>
                            </thead>
                            <tr>
                                <td>...</td>
                                <td>...</td>
                                <td>...</td>
                                <td>...</td>
                                <td>...</td>
                                <td>...</td>
                                <td>...</td>
                                <td>
                                    <a href="#" class="w3-button w3-blue w3-round w3-tiny" onclick="document.getElementById('modalupdateArticle').style.display='block'">
                                        <img src="view/assets/newsPhoto/refresh.png" style="width: 15px">
                                    </a>

                                    <a href="#" class="w3-button w3-red w3-round w3-tiny" onclick="document.getElementById('modalupdateArticle').style.display='block'">
                                        <img src="view/assets/newsPhoto/delete.png" style="width: 15px">
                                    </a>
                                </td>
                            </tr>

                        </table>
                    </div>
                </div>
                <div class="w3-col m2">
                    <h3> </h3>
                    <a href="#" class="w3-button w3-blue w3-round" onclick="document.getElementById('modalAddArticle').style.display='block'">Ajouter un article</a>
                </div>
            </div>
        </div>

    </div>

    <div id="Catégories" class="w3-container city">
        <div class="w3-padding-16">
            <div class="w3-row-padding">
                <div class="w3-col m10">
                    <h3>Liste des catégories</h3>
                    <div class="w3-container">
                        <table class="w3-table w3-hoverable">
                            <thead>
                            <tr class="w3-light-grey">
                                <th>ID</th>
                                <th>Libellé</th>
                            </tr>
                            </thead>
                            <tr>
                                <td>...</td>
                                <td>...</td>
                            </tr>

                        </table>
                    </div>
                </div>
                <div class="w3-col m2">
                    <h3> </h3>
                    <a href="#" class="w3-button w3-blue w3-round" onclick="document.getElementById('modalAddCategorie').style.display='block'">Ajouter une catégorie</a>
                </div>
            </div>
        </div>
    </div>

    <div id="Utilisateurs" class="w3-container city">
        <div class="w3-padding-16">
            <div class="w3-row-padding">
                <div class="w3-col m8">
                    <h3>Liste des utilisateurs</h3>
                    <div class="w3-container">
                        <table class="w3-table w3-hoverable">
                            <thead>
                            <tr class="w3-light-grey">
                                <th>ID</th>
                                <th>Login</th>
                                <th>Pseudo</th>
                                <th>Type d'utilisateur</th>
                                <th>Jeton</th>
                            </tr>
                            </thead>
                            <tr>
                                <td>...</td>
                                <td>...</td>
                                <td>...</td>
                                <td>...</td>
                                <td>...</td>
                            </tr>

                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>




    <!--Modals-->

    <!--Modal pour ajouter un article-->

    <div id="modalAddArticle" class="w3-modal">
        <div class="w3-modal-content w3-card-4 w3-animate-zoom">
            <header class="w3-container">
                <span onclick="document.getElementById('modalAddArticle').style.display='none'"
                class="w3-button w3-xlarge w3-display-topright">&times;</span>
                <h3>Ajouter un article</h3>
            </header>

            <div>
                <form action="" class="w3-form">
                    <div class="w3-row-padding w3-padding">
                        <div class="w3-half">
                            <label class="w3-margin-bottom">Titre</label>
                            <br>
                            <input class="w3-input w3-border" type="title" placeholder="Titre de l'article">
                        </div>
                        <div class="w3-half">
                            <label class="w3-margin-bottom">Catégorie</label>
                            <br>
                            <select class="w3-select w3-border" name="idCategorie">
                                <option value="" disabled selected>Choisir une catégorie</option>
                                <option value="1">Sport</option>
                                <option value="4">A la une</option>
                                <option value="6">Développement durable</option>
                                <option value="8">Education</option>
                                <option value="9">Mode</option>
                            </select>
                        </div>
                    </div>

                    <div class="w3-row-padding w3-padding">
                        <div class="w3-half">
                            <label class="w3-margin-bottom">Desciption</label>
                            <br>
                            <textarea name="content" id="" cols="50" rows="5" class="w3-input w3-border" placeholder="Description de l'article"></textarea>
                        </div>
                        <div class="w3-half">
                            <label class="w3-margin-bottom">Photo</label>
                            <br>
                            <input type="file" class="" name="photo">
                        </div>
                    </div>
                    <div class="w3-container w3-padding w3-center w3-margin">
                        <button class="w3-button w3-green w3-border w3-round-large"
                                onclick="document.getElementById('modalAddArticle').style.display='none'">Valider</button>
                    </div>
                </form>
            </div>

        </div>
    </div>


    <!--Modal pour modifier un article-->
    <div id="modalupdateArticle" class="w3-modal">
        <div class="w3-modal-content w3-card-4 w3-animate-zoom">
            <header class="w3-container">
                <span onclick="document.getElementById('modalupdateArticle').style.display='none'"
                      class="w3-button w3-xlarge w3-display-topright">&times;</span>
                <h3>Modifier un article</h3>
            </header>



            <div class="w3-container w3-light-grey w3-padding">
                <button class="w3-button w3-right w3-white w3-border w3-round-large"
                        onclick="document.getElementById('modalupdateArticle').style.display='none'">Fermer</button>
            </div>
        </div>
    </div>

    <!--Modal pour ajouter une catégorie-->
    <div id="modalAddCategorie" class="w3-modal">
        <div class="w3-modal-content w3-card-4 w3-animate-zoom">
            <header class="w3-container">
                <span onclick="document.getElementById('modalAddCategorie').style.display='none'"
                      class="w3-button w3-xlarge w3-display-topright">&times;</span>
                <h3>Ajouter une catégorie</h3>
            </header>

            <div>
                <form action="" class="w3-form">
                    <div class="w3-row-padding w3-padding">
                        <div class="w3-half">
                            <label class="w3-margin-bottom">Nom</label>
                            <br>
                            <input class="w3-input w3-border" type="title" placeholder="Nom de la catégorie" name="libelle">
                        </div>
                    </div>
                    <div class="w3-container w3-padding w3-center w3-margin">
                        <button class="w3-button w3-green w3-border w3-round-large"
                                onclick="document.getElementById('modalAddCategorie').style.display='none'">Valider</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--Modal pour ajouter un utilisateur-->

    <!--Modal pour modifier token-->


</div>

<script>
    function openMenu() {
        document.getElementById("main").style.marginLeft = "25%";
        document.getElementById("mySidebar").style.width = "25%";
        document.getElementById("mySidebar").style.display = "block";
        document.getElementById("openNav").style.display = 'none';
    }
    function closeMenu() {
        document.getElementById("main").style.marginLeft = "0%";
        document.getElementById("mySidebar").style.display = "none";
        document.getElementById("openNav").style.display = "inline-block";
    }

    document.getElementsByClassName("tablink")[0].click();

    function openTab(evt, tabName) {
        var i, x, tablinks;
        x = document.getElementsByClassName("city");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablink");
        for (i = 0; i < x.length; i++) {
            tablinks[i].classList.remove("w3-light-grey");
        }
        document.getElementById(tabName).style.display = "block";
        evt.currentTarget.classList.add("w3-light-grey");
    }
</script>

</body>
</html>