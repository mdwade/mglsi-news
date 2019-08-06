<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>MGLSI News | Accueil</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="public/assets/newsPhoto/journalism.png" type="image/x-icon">
    <link rel="stylesheet" href="public/assets/css/w3.css">
  </head>
  <body>
    <h1>Page Admin</h1>
    <a href="logout">Se déconnecter</a>
    <div style="display:grid;grid-template-columns:auto;">
      <div id="list-articles">
      </div>
      <ul id="list-categories">
      </ul>
      <div class="">
        <form id="form-create-article">
          <label for="">Titre de L'article</label>
          <input type="text" name="title" value=""><br>
          <select name="category-id">

          </select><br>
          <label for="">Contenu</label><br>
          <textarea name="content" rows="8" cols="80"></textarea><br>
          <button type="submit" name="button">Créer</button>
        </form>
      </div>
  </div>
    <div class="">
      <h2>Ajout de categorie</h2>
      <form id="form-create-categorie">
        <label for="">Nom</label><br>
        <input type="text" name="libelle-category" value=""><br>
        <button type="submit" name="button">Créer</button>
      </form>
    </div>
    <script src="public/js/jquery.min.js" charset="utf-8"></script>
    <script src="public/js/admin.js" charset="utf-8"></script>
  </body>
</html>
