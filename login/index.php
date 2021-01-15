<?php 
session_start();
if($_SESSION['user']) {
  header('Location: index.php');
  exit();
} else {
  exit();
}
?>
<!DOCTYPE html>
<?php 
session_start();
?>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta 
      name="description" 
      content="Web Developer"
    >
    <link rel="preconnect" href="https://fonts.gstatic.com"> 
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&display=swap" rel="stylesheet">
    <meta name="robots" content="index, follow">
    <link rel="stylesheet" href="../styles/1styles.css">
    <link type="image/png" href="../favicon.ico" rel="shortcut icon">
    <title>Login</title>
  </head>
<body>
  <header class="main-head">
    <nav>
      <div class="logo">
        <img src="../assets/icons/code.svg" alt="logo">
        <h1>LuizFDOS</h1>
      </div>
      <ul>
        <li><a href="../">Início</a></li>
        <li><a href="../contato/" class="">Contato</a></li>
        <li><a class="login active" href="./login/">Login</a></li>
      </ul>
    </nav>
  </header>
  <section class="form-section login">
    <form action="../login.php"
    method="POST">
      <h1>Login</h1>
      <?php
      if(isset($_SESSION['nao_autenticado'])):
      ?>
      <div class="notification error">
        <p>ERRO: Usuário ou senha inválidos.</p>
      </div>
      <?php
      endif;
      unset($_SESSION['nao_autenticado']);
      ?>
      <label for="user">Usuário</label>
      <input type="text" name="user" id="user" required>
      <label for="password">Senha</label>
      <input type="password" name="password" id="password" required>
      <button type="submit">Entrar</button>
    </form>
  </section>
  <footer>
    <h4>LuizFDOS &copy; 2020</h4>
    <ul>
      <li><a href="https://github.com/LUIZFDOS" target="_blank"><img src="../assets/icons/gitfooter.svg" alt="github-social"></a></li>
      <li><a href="https://www.linkedin.com/in/luizfdos/" target="_blank"><img src="../assets/icons/linked-infooter.svg" alt="linkedin-social"></a></li>
      <li><a href="https://twitter.com/LuizFDOS" target="_blank"><img src="../assets/icons/twitter1.svg" alt="twitter-social" target="_blank"></a></li>
    </ul>
  </footer>
</html>