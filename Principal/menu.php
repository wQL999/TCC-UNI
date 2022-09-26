<link rel="stylesheet" href="../css/stylenav-menu.css">

<header>
    <a href="../Principal/index.php" class="logo">Uni<span>!</span></a>
        <ul class="nav-links">
            <li class="nav-item"><a href="../Principal/index.php">Início</a></li>
            <li class="nav-item"><a href="#about">Quem Somos</a></li>
            <li class="nav-item"><a href="#contact">Notícias</a></li>
            <li class="nav-item"><a href="#contact">ONGs</a></li>
            <?php
                    @session_start();

                    if (isset($_SESSION ['logado']) && $_SESSION ['logado'] ==true){
                    echo "<li class=nav-item><a href=../Login/LoginPF/logoff.php>Sair</a></li>";
                    }else {
                    echo "<li class=nav-item><a href=../Login/Logus/logus.html>Entrar</a></li>";
                    }
                ?>
        </ul>
</header>

