<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="css/styleong-profile.css" />
    <script src="js/scriptong-profile.js" defer></script>
  </head>
  <body>
    <div class="header">
      <?php include('menu.php'); ?>
    </div>  
    <div class="container">
      <aside>
        <div class="navbar">
          <div class="user-logo"><img src="imagens/download.jpg"/></div>
          <nav>
            <ul class="select-items">
              <li class="item-link selectedLink" name="home">titulo</li>
              <li class="item-link" name="about">titulo</li>
              <li class="item-link" name="resume">titulo</li>
              <li class="item-link" name="contact">titulo</li>
            </ul>
          </nav>
        </div>
      </aside>
      <main>
        <div class="card active home" data-home>
          <div class="title"> Principal</div>
          <div class="content"> Conteudo</div>
        </div>
        <div class="card about" data-about>
          <div class="title">Principal</div>
          <div class="content">Conteudo</div>
        </div>
        <div class="card resume" data-resume>
          <div class="title">Principal</div>
          <div class="content">Conteudo</div>
        </div>
        <div class="card contact" data-contact>
          <div class="title">Principal</div>
          <div class="content">Conteudo</div>
        </div>
      </main>
    </div>

  </body>
</html>
