<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UNI - Login</title>
    <link rel="stylesheet" href="log-style.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <script
    src="https://kit.fontawesome.com/64d58efce2.js"
    crossorigin="anonymous"
  ></script>
</head>
<body>
    <div class="container">

        <div class="texto">
            <a href="#" class="logo">
                <!--<span style="--i:1">U</span>
                <span style="--i:2">n</span>
                <span style="--i:3">i</span>
                <span style="--i:4; color: crimson;">!</span> -->
                Uni<span style="--i:1; color: crimson">!</span>
            </a>

            <div class="slideVertical">
                Uni's Personality
                
                <ul class="flip5">
                    <li>União</li>
                    <li>Família</li>
                    <li>Confiança</li>
                    <li>Amizade</li>
                    <li>Solidariedade</li>
                </ul>
            </div>
        </div>

        <div class="loginBox">
            <div class="login">
                <h2>Login</h2>
                <form action="login.act.php" method="post">
                    <div class="inputBox">
                        <i class="fas fa-user"></i>
                        <input type="text" name="email" id="" required>
                        <span>Email</span>
                    </div>
                    <div class="inputBox">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="senha" id="" required> 
                        <span>Senha</span>
                    </div>

                    <input type="submit" value="Entrar" class="inputSub"/>
                </form> 

                <div class="link">
                    <a href="#">Esqueci a senha?</a>
                    <span>·</span>
                    <a href="cadastro.html">Cadastre-se</a>
                </div>

                <p class="social-text">Ou entre pelas redes sociais</p>

                <div class="social-media">
                    <a href="#" class="social-icon">
                    <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="social-icon">
                    <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="social-icon">
                    <i class="fab fa-google"></i>
                    </a>
                    <a href="#" class="social-icon">
                    <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
            </div> 

           
            <?php
                  @session_start();
                  if(isset($_SESSION['msg'])){
                      echo $_SESSION['msg'];
                      unset($_SESSION['msg']);
                  }
            ?>
            <div class="svg">
                <img class="svg-gif"src="Team spirit (1).gif" alt="">
            </div>
        </div>
        
    </div>

</body>
</html>