let listeCategories = [];
let listeArticles = [];

$(() => {
  getCategory();
})


$("#form-create-article").submit((e) => {
  e.preventDefault();

  $.post("article/create",$("#form-create-article").serialize()).done(response => {
    console.log(response);
    alert("L'article a ete créé");
    $("#modalAddArticle").hide();
    getArticles();
  }).fail(error => {
    console.log(error);
  })

})

$("#form-create-categorie").submit(e => {
  e.preventDefault();

  $.post("category/create",$('#form-create-categorie').serialize()).done(response => {
    alert('Categorie a été créé ');
    $("#modalAddCategorie").hide();
    getCategory();
  }).fail(error => {
    console.log(error);
  })
})

$("#form-edit-article").submit(e => {
  e.preventDefault();

  $.post('article/edit',$("#form-edit-article").serialize()).done(response => {
    $("#modalupdateArticle").hide();
    getArticles();
  }).fail(error => {
    alert('Erreur au niveau du Seveur')
    console.log(error);
  })

})

function getArticles(){
  $.getJSON('article/all').done((response) => {
    listeArticles = response;

    $("#list-articles").empty();

    response.forEach(article => {
      var category = listeCategories.filter((item) =>item.id == article.idCategorie);
      var tr = `<tr>
      <td>${article.title}</td>
      <td>${article.content.substring(0, 50)}...</td>
      <td>${category[0].libelle}</td>
      <td>...</td>
      <td>${article.pseudoAuthor}</td>
      <td>${article.postedDate}</td>
      <td>
      <a href="#" class="w3-button w3-blue w3-round w3-tiny" onclick="document.getElementById('modalupdateArticle').style.display='block'">
      <img src="view/assets/newsPhoto/refresh.png" style="width: 15px">
      </a>

      <a href="#" class="w3-button w3-green w3-round w3-tiny" onclick="editArticle(${article.id})">
      <img src="view/assets/newsPhoto/blogging.png" style="width: 15px">
      </a>

      <a href="#" class="w3-button w3-red w3-round w3-tiny">
      <img src="view/assets/newsPhoto/delete.png" style="width: 15px">
      </a>
      </td>
      </tr>`;
      $("#list-articles").append(tr);
    })
  }).fail(error => {
    console.log(error);
  })
}
function getCategory(){
  $.getJSON("category/all").done((response) => {
    console.log(response)


    listeCategories = response;

    response.forEach(cat => {
      var tr = `  <tr>
      <td>${cat.id}</td>
      <td>${cat.libelle}</td>
      </tr>`;

      var option = `<option value="${cat.id}">${cat.libelle}</option>`;

      $('#table-categories').append(tr);

      $('#list-categories').append(option);

      $('#edit-categories').append(option);
    })
    getArticles();
  }).fail((error,t) => {
    console.log(error);
    console.log(t);
  })
}

function deleteArticle(idArticle){
  alert(idArticle);
}

function editArticle(idArticle){
  var article = listeArticles.filter((article) => article.id == idArticle);
  $("input[name='edit-title']").val(article[0].title);
  $("textarea[name='edit-content']").val(article[0].content);
  $("input[name='id-article']").val(article[0].id);
  $("#modalupdateArticle").show();
}

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
