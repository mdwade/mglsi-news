$(() => {
  $("#myModal").show();
  getCategory();
    $.getJSON('article/all').done((response) => {
        console.log(response);
        response.forEach(article => {

          var div =`<div class="w3-col m3">
                <img src="view/assets/newsPhoto/${article.photo}"  style="width: 270px; height:390px;">
                <h4><a href="index.php?action=article&id=${article.id}">${article.title}</a></h4>
                <p>${article.content}</p><br><button onclick="editArticle(${article.id})">>Modifier</button>
                <br><button onclick="deleteArticle(${article.id})">Delete</button>
            </div>`;

            $("#list-articles").append(div);
          })
    }).fail(error => {
        console.log(error);
    })
})


$("#form-create-article").submit((e) => {
    e.preventDefault();

   $.post("article/create",$("#form-create-article").serialize()).done(response => {
       console.log(response);
   }).fail(error => {
       console.log(error);
   })

})

$("#form-create-categorie").submit(e => {
  e.preventDefault();

  $.post("category/create",$('#form-create-categorie').serialize()).done(response => {
    console.log(response);
  }).fail(error => {
    console.log(error);
  })
})

function getCategory(){
    $.getJSON("category/all").done((response) => {
        console.log(response)
        response.forEach(cat => {
          var li = `<li>${cat.libelle}</li>`;
          var option = `<option value="${cat.id}">${cat.libelle}</option>`;
          $('select[name="category-id"]').append(option);
          $("#list-categories").append(li);
        })
        // response.forEach(categorie => {
        //     var option =`<option value=${categorie.id}>${categorie.name}</option>`;
        //     $("#list-categories").append(option);
        // });
    }).fail((error,t) => {
        console.log(error);
        console.log(t);
    })
}

function deleteArticle(idArticle){
  alert(idArticle);
}

function editArticle(idArticle){
  $.getJSON('edit?action=edit&id='+idArticle).done(response => {
    console.log(response);
  }).fail(error => {
    console.log(error);
  })
}
