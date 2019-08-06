$("#form-login").submit(e => {
  e.preventDefault();

  $.post("user/login",$("#form-login").serialize()).done(response => {
    console.log(response);
    if(response){
      window.location.href="admin";
    }
  }).fail(error => {
    console.log(error);
  })
})
