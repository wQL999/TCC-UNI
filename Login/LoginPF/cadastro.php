<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UNI - Login</title>
    <link rel="stylesheet" href="cad-style.css">
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
                Junte-se a nós com muita
                
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
        
            <h2>Cadastro</h2>

            <form action="cadastro.act.php" method="post" id="form" name="form" >

                <div class="inputBox" id="inputBox">
                    <i class="fas fa-user"></i>
                    <input type="text" name="nome" id="nome" required>
                    <span>Nome</span>
                </div>
                <div class="inputBox" id="inputBox">
                    <i class="fas fa-envelope"></i>
                    <input type="text" name="email" id="email" required>
                    <span>Email</span>
                </div>
                <div class="inputBox" id="inputBox">
                    <i class="fas fa-user"></i>
                    <input type="text" name="codCPF" id="codCPF" required>
                    <span>CPF</span>
                </div>
                <div class="inputBox" id="inputBox">
                    <i class="fas fa-phone"></i>
                    <input type="text" name="telefone" id="telefone" required>
                    <span>Telefone</span>
                </div>
                <div class="inputBox" id="inputBox">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="senha" id="senha" required> 
                    <span>Senha</span>
                </div>
                <div class="inputBox" id="inputBox">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="confirm_senha" id="confirm_senha" required> 
                    <span>Confirme a senha</span>
                </div>

                <input type="submit" value="Cadastrar" class="inputSub"/>

            </form>

            <span class="error" id="error"> <?php @session_start();
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
        ?>
        </span>

            <div class="link">
                <a href="login.html">Já possuo uma conta.</a>
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
    </div>
<script src="validar.js"></script>
</body>
</html>