<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-principal.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <script src="../js/app.js" defer></script>
    <title>Uni</title>
</head>
<body>

    <section class="header">
        <?php include('menu.php'); ?>
        <script type="text/javascript">
            window.addEventListener('scroll', function(){
            const header = document.querySelector('header');
            header.classList.toggle("sticky", window.scrollY > 0);
            });
        </script>
        
        <div class="text-box">
            <h1>Não só um site de doações</h1>
            <p>
                Apoie uma causa sem sair do conforto de sua casa <br> ONGs agradecem a sua doação <br>
            </p>
            <a href=""class="hero-bnt">Venha descobrir mais!</a>
            </div>
    </section>

    <section class="carrossel"> 
        <h1>Fluxo de Notícias</h1>
    <div class="slider">

        <div class="slides">
            <input type="radio" name="radio-btn" id="radio1">
            <input type="radio" name="radio-btn" id="radio2">
            <input type="radio" name="radio-btn" id="radio3">
            <input type="radio" name="radio-btn" id="radio4">

            <div class="slide first" id="slide1">
                <a href="#"><img src="../imagens/box-imagem.png" alt="imagem1"></a>
                <div class="texto">
                    <h1>Saiba mais..</h1>
                    <p>KKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKK</p>
                </div>
            </div>
            <div class="slide" id="slide2">
                <a href="#"><img src="../imagens/the-beggars-sat-wrapped-in-cloths-and-eating-noodles - Copia.jpg" alt="imagem2"></a>
                <div class="texto">
                    <h1>Saiba mais..</h1>
                    <p>KKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKK</p>
                </div>
            </div>
            <div class="slide" id="slide3">
                <a href="#"><img src="../imagens/adoptme - Copia.png" alt="imagem3"></a>
                <div class="texto">
                    <h1>Saiba mais..</h1>
                    <p>KKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKK</p>
                </div>
            </div>
            <div class="slide" id="slide4">
                <a href="#"><img src="../imagens/medium-shot-people-working-together - Copia.jpg" alt="imagem4"></a>
                <div class="texto">
                    <h1>Saiba mais..</h1>
                    <p>KKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKK</p>
                </div>
            </div>
                     <div class="navigation-auto">
                        <div class="auto-btn1"></div>
                        <div class="auto-btn2"></div>
                        <div class="auto-btn3"></div>
                        <div class="auto-btn4"></div> 
                     </div>   
        </div>
        <div class="manual-navigation">
            <label for="radio1" class="manual-btn"></label>
            <label for="radio2" class="manual-btn"></label>
            <label for="radio3" class="manual-btn"></label>
            <label for="radio4" class="manual-btn"></label>
        </div>
    </div>
    </section>

    <section class="como-ajudar">
        <div class="componentes">
            <img src="../imagens/como-ajudar.jpg" alt="">
    </div>
    <div class="container">
    <div class="textos">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam dicta magni accusantium doloremque hic ducimus.</p>
            </div>
            <div class="textos">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam dicta magni accusantium doloremque hic ducimus.</p>
    </div>
    <div class="textos">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam dicta magni accusantium doloremque hic ducimus.</p>
    </div>
</section>
<section class="part-ajuda">
<h1>Como posso ajudar?</h1>
    <div class="ajuda-texto">
        <div id="texto"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque sed animi accusamus! Hic quam vitae voluptas deserunt veniam, laudantium ex eum ad similique corrupti fugiat, est cupiditate quae velit nobis.</p></div>
    </div>

   <div class="cards-grid">
    <div class="boxes">
            <a href="#" id="link">  <div class="text-boxs-img">
            </div></a>
            <a href="#" id="link"><h1><strong>Doação</strong></h1></a>
            <a href="#" id="link"><div id="texto"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus perferendis temporibus libero quisquam eaque mollitia 
                tenetur repudiandae recusandae minima cumque cupiditate consequatur nam repellendus vel, laudantium delectus consectetur explicabo quas?</p></div></a>
        </div>
        
        <div class="boxes">
            <a href="#" id="link"><div class="text-boxs">
            </div></a>
            <a href="#" id="link"><h1><strong>Voluntário</strong></h1></a>
            <a href="#" id="link"> <div id="texto"><p id="paragrafo">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus perferendis temporibus libero quisquam eaque mollitia
                tenetur repudiandae recusandae minima cumque cupiditate consequatur nam repellendus vel, laudantium delectus consectetur explicabo quas?</p></div></a>
        </div>
   </div>
    </section>

    <section class="cta">
        <h1>Podemos te ajudar em qualquer lugar <br> do Brasil</h1>
        <a href="" target="_blank"class="hero-bnt">Contate-nos</a>
    </section>

    <section class="rodape">
        <div class="geral">
        <div class="row">
            <div class="rod-cont">
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-whatsapp"></i></a>
                </div>

                <ul>
                    <li><a href="#">SAQ</a> <span class="ooo">|</span>  <a href="#">sobre nós</a> <span class="ooo">|</span>  <a href="#">serviços</a></li>
                    <li><a href="#">Termos de uso</a> <span class="ooo">|</span> <a href="#">Política de privacidade</a></li>
                    <li> <p class="ooo">@Copyright by Uni!</p></li>
                    
                </ul>

            </div>            
           
        </div>
        </div>
    </section>
        

</body>
</html>