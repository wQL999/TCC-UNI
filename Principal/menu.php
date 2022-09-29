<link rel="stylesheet" href="../css/stylenav-menu.css">

<header>
    <a href="../Principal/index.php" class="logo">Uni<span>!</span></a>
        <ul class="nav-links">
            <li class="nav-item"><a href="../Principal/index.php" id="contact">Início</a></li>
            <li class="nav-item"><a href="#about" id="contact">Quem Somos</a></li>
            <li class="nav-item"><a href="#contact" id="contact">Notícias</a></li>
            <li class="nav-item"><a href="#contact" id="contact">ONGs</a></li>
            <?php
                    @session_start();

                    if (isset($_SESSION ['logado']) && $_SESSION ['logado'] == true){
                    echo "<li class=nav-item><a href=../Login/LoginPF/logoff.php id=contact>Sair</a></li>";
                    } else {
                    echo "<li class=nav-item><a href=../Login/Logus/logus.html id=contact>Entrar</a></li>";
                    }
                ?>
        </ul>
</header>

