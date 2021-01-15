<?php 
session_start();
?>
<!DOCTYPE html>
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
    <link rel="stylesheet" href="./styles/styles.css">
    <link type="image/png" href="favicon.ico" rel="shortcut icon">
    <title>LuizFDOS | Web Developer</title>
  </head>
<body>
  <header class="main-head">
    <nav>
      <div class="logo">
        <img src="../assets/icons/code.svg" alt="logo">
        <h1>LuizFDOS</h1>
      </div>
      <ul>
        <li><a class="active" href="/">Início</a></li>
        <li><a href="./contact/">Contato</a></li>
        <?php
        if(!$_SESSION['user']):
        ?>
          <li><a class="login active" href="./login/">Login</a></li>
        <?php
        endif;
        unset($_SESSION['nao_autenticado']);
        ?>
        <?php
        if($_SESSION['user']):
        ?>
          <li>
            <div class="dropdown">
              <span>Olá, <?php echo $_SESSION['user'];?></span>
              <div class="dropdown-content">
                <a href="logout.php">Sair</a>
              </div>
            </div>
          </li>
        <?php
        endif;
        ?>
      </ul>
    </nav>
  </header>
  <section class="intro">
    <div class="intro-text">
      <h2>Luiz Fernando</h2>
      <h3>Desenvolvedor <br> Web</h3>
      <p>Sou proativo e estou sempre em busca de novos desafios. Atualmente
        me dedico ao estudo de desenvolvimento web e busco trabalhar como
        desenvolvedor front-end aplicando meus conhecimentos e adiquirindo
        novos</p>
      <div class="intro-social">
        <a href="https://github.com/LUIZFDOS" target="_blank"><img src="./assets/icons/github.svg" alt="github-social-link"></a>
        <a href="https://www.linkedin.com/in/luizfdos/" target="_blank"><img src="./assets/icons/linked-in.svg" alt="linkedin-social-link"></a>
      </div>
    </div>
    <div class="intro-images">                
      <img src="assets/images/profile.jpg">
    </div>
  </section>
  <footer>
    <h4>LuizFDOS &copy; 2020</h4>
    <ul>
      <li><a href="https://github.com/LUIZFDOS" target="_blank"><img src="./assets/icons/gitfooter.svg" alt="github-social"></a></li>
      <li><a href="https://www.linkedin.com/in/luizfdos/" target="_blank"><img src="./assets/icons/linked-infooter.svg" alt="linkedin-social"></a></li>
      <li><a href="https://twitter.com/LuizFDOS" target="_blank"><img src="./assets/icons/twitter1.svg" alt="twitter-social" target="_blank"></a></li>
    </ul>
  </footer>
</body>
</html>
