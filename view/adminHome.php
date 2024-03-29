<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>MGLSI | Admin</title>
  <link rel="stylesheet" href="public/assets/css/w3.css">
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
    <h4 class="w3-container"><img src="view/assets/newsPhoto/user.png" style="width: 35px"> Admin</h4>
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
          <h4 class="w3-container"><img src="view/assets/newsPhoto/user.png" style="width: 35px"> <?php $_SESSION['pseudo']?></h4>
        </div>
        <div class="w3-col m2">
          <h4 class="w3-container">
            <a href="logout" class="w3-button w3-small w3-round w3-red">Se déconnecter</a>
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
          <div class="w3-col m11">
            <h3>Liste des articles</h3>
            <div class="w3-container">
              <table class="w3-table">
                <thead>
                  <tr class="w3-light-grey">
                    <th>Titre</th>
                    <th>Contenu</th>
                    <th>Catégorie</th>
                    <th>Photo</th>
                    <th>Auteur</th>
                    <th>Date de publication</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody id="list-articles">

                </tbody>

              </table>
            </div>
          </div>
          <div class="w3-col m1">
            <h3> </h3>
            <a href="#" class="w3-button w3-blue w3-round w3-small" onclick="document.getElementById('modalAddArticle').style.display='block'">Ajouter un article</a>
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
                <tbody id="table-categories">

                </tbody>
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
          <div class="w3-col m10">
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
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody id="list-users">

                </tbody>

              </table>

            </div>
          </div>
          <div class="w3-col m2">
            <h3> </h3>
            <a href="#" class="w3-button w3-blue w3-round" onclick="document.getElementById('modalAddUser').style.display='block'">Ajouter un utilisateur</a>
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
          <form id="form-create-article" class="w3-form">
            <div class="w3-row-padding w3-padding">
              <div class="w3-half">
                <label class="w3-margin-bottom">Titre</label>
                <br>
                <input class="w3-input w3-border" name='title' type="title" placeholder="Titre de l'article">
              </div>
              <div class="w3-half">
                <label class="w3-margin-bottom">Catégorie</label>
                <br>
                <select class="w3-select w3-border" id="list-categories" name="category-id">
                  <option value="" disabled selected>Choisir une catégorie</option>
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
              <button class="w3-button w3-green w3-border w3-round-large">Valider</button>
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
        <div>
          <form id="form-edit-article" class="w3-form">
            <div class="w3-row-padding w3-padding">
              <div class="w3-half">
                <label class="w3-margin-bottom">Titre</label>
                <input type="text" name="id-article" hidden>
                <br>
                <input class="w3-input w3-border" type="title" name="edit-title" placeholder="Titre de l'article">
              </div>
              <div class="w3-half">
                <label class="w3-margin-bottom">Catégorie</label>
                <br>
                <select class="w3-select w3-border" id="edit-categories" name="edit-category" required>
                  <option value="" disabled selected>Choisir une catégorie</option>
                </select>
              </div>
            </div>

            <div class="w3-row-padding w3-padding">
              <div class="w3-half">
                <label class="w3-margin-bottom">Contenu</label>
                <br>
                <textarea name="edit-content" id="" cols="50" rows="5" class="w3-input w3-border" placeholder="Description de l'article"></textarea>
              </div>
              <div class="w3-half">
                <label class="w3-margin-bottom">Photo</label>
                <br>
                <input type="file" class="" name="photo">
              </div>
            </div>
            <div class="w3-container w3-padding w3-center w3-margin">
              <button class="w3-button w3-green w3-border w3-round-large" type="submit">Modifier</button>
            </div>
          </form>
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
          <form id="form-create-categorie" class="w3-form">
            <div class="w3-row-padding w3-padding">
              <div class="w3-half">
                <label class="w3-margin-bottom">Nom</label>
                <br>
                <input class="w3-input w3-border" type="title" placeholder="Nom de la catégorie" name="libelle-category">
              </div>
            </div>
            <div class="w3-container w3-padding w3-center w3-margin">
              <button class="w3-button w3-green w3-border w3-round-large">Valider</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div id="modalupdateUser" class="w3-modal">
      <div class="w3-modal-content w3-card-4 w3-animate-zoom">
        <header class="w3-container">
          <span onclick="document.getElementById('modalupdateUser').style.display='none'"
          class="w3-button w3-xlarge w3-display-topright">&times;</span>
          <h3>Modifier un Utilisateur</h3>
        </header>
        <div>
          <form id="form-edit-user" class="w3-form">
            <div class="w3-row-padding w3-padding">
              <div class="w3-half">
                <label class="w3-margin-bottom">Login</label>
                <br>
                <input class="w3-input w3-border" type="title"  name="edit-login" required>
                <input type="text" name="user-id" hidden>
              </div>
              <div class="w3-half">
                <label class="w3-margin-bottom">Mot de Passe</label>
                <br>
                <input class="w3-input w3-border" type="title"  name="edit-password" required>
              </div>
            </div>
            <div class="w3-row-padding w3-padding">
              <div class="w3-half">
                <label class="w3-margin-bottom">Pseudo</label>
                <br>
                <input class="w3-input w3-border" type="title"  name="edit-pseudo" required>
              </div>
              <div class="w3-half">
                <label class="w3-margin-bottom">Type</label>
                <br>
                <select class="w3-select w3-border" name="edit-user-type" required>
                  <option value="" disabled selected>Choisir un Compte</option>
                  <option value="1">Administrateur</option>
                  <option value="2">Editeur</option>
                </select>
              </div>
            </div>
            <div class="w3-container w3-padding w3-center w3-margin">
              <button class="w3-button w3-green w3-border w3-round-large">Valider</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div id="modalAddUser" class="w3-modal">
      <div class="w3-modal-content w3-card-4 w3-animate-zoom">
        <header class="w3-container">
          <span onclick="document.getElementById('modalAddUser').style.display='none'"
          class="w3-button w3-xlarge w3-display-topright">&times;</span>
          <h3>Ajouter un Utilisateur</h3>
        </header>
        <div>
          <form id="form-create-user" class="w3-form">
            <div class="w3-row-padding w3-padding">
              <div class="w3-half">
                <label class="w3-margin-bottom">Login</label>
                <br>
                <input class="w3-input w3-border" type="title" placeholder="Login" name="login">
              </div>
              <div class="w3-half">
                <label class="w3-margin-bottom">Mot de Passe</label>
                <br>
                <input class="w3-input w3-border" type="title" placeholder="Password" name="password">
              </div>
            </div>
            <div class="w3-row-padding w3-padding">
              <div class="w3-half">
                <label class="w3-margin-bottom">Pseudo</label>
                <br>
                <input class="w3-input w3-border" type="title" placeholder="Pseudo" name="pseudo">
              </div>
              <div class="w3-half">
                <label class="w3-margin-bottom">Type</label>
                <br>
                <select class="w3-select w3-border" name="user-type">
                  <option value="" disabled selected>Choisir une Compte</option>
                  <option value="1">Administrateur</option>
                  <option value="2">Editeur</option>
                </select>
              </div>
            </div>
            <div class="w3-container w3-padding w3-center w3-margin">
              <button class="w3-button w3-green w3-border w3-round-large">Valider</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <script src="public/js/jquery.min.js" charset="utf-8"></script>
  <script src="public/js/admin.js" charset="utf-8"></script>
</body>
</html>
