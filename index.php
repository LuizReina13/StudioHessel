<!-- Pagina de login pra autenticação no banco de dados, fazendo login e senha-->

<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Silas Hessel</title>
      <link rel="stylesheet" href="assets/style_index.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
   </head>
   <body style="background-image: url('assets/img/bg.jpg');">
      <div class="login-form">
         <div class="text">
            LOGIN
         </div>
         <form action="conexao.php" method="post">
            <div class="field">
               <div class="fas fa-envelope"></div>
               <input name="usuarioinput" type="text" pattern="[a-zA-Z0-9]+" placeholder="Usuario">
            </div>
            <div class="field">
               <div class="fas fa-lock"></div>
               <input name="senhainput" type="password" placeholder="Senha">
            </div>
            <button>ENTRAR</button>
            <div class="link">
               Não é um membro?
               <a href="#">Entre aqui</a>
            </div>
         </form>
      </div>
   </body>
</html>