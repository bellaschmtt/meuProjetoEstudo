<?php
  include "./include/MySql.php";
  include "./include/functions.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
  <link rel="stylesheet" href="style.css">
  <title>Site</title>
</head>
<body>

  <nav>
    <img class="logo" src="./img/logo_transparent.png" alt="">
    <!-- <h2 class="logo">Portfó<span>lio</span></h2> -->
    <ul>
        <!-- <img class="logo" src="../img/logo_transparent.png" alt=""> -->
        <li><a href="./paginas/login.php">Entrar</a></li>
        <li><a href="./paginas/cadastro.php">Cadastrar</a></li>
        <!-- <li><a href="#">Serviços</a></li> -->
        <!-- <li><a href="#">Habilidades</a></li> -->
        <!-- <li><a href="#">Contato</a></li> -->
    </ul>
    <a href="./paginas/SaibaMais.html" class="btn">Saiba mais</a>
  </nav>
  <main>
     
    <!-- PROJECTS -->

    <section id="projects">
      <h2>Bem-vindo a Saiba mais <span>História</span></h2>
      <div class="swiper mySwiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="project-img">
              <img src="./img/material.jpg" alt="Foto de um site">
            </div>
            <div class="project-info">
              <h2>Matérial de estudos</h2>
              <p>Matériais de estudos completos, para agregar ao seu conhecimento.</p>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="project-img">
              <img src="./img/books.jpg" alt="Foto de uma loja online">
            </div>
            <div class="project-info">
              <h2>Livros</h2>
              <p>De acordo com o assunto que estiver estudando á indicações de livros.</p>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="project-img">
              <img src="./img/podcast.jpg" alt="Foto de um sistema">
            </div>
            <div class="project-info">
              <h2>Podcasts</h2>
              <p>Diversos direcionamentos de podcasts sobre assuntos históricos.</p>
            </div>
          </div>
        </div>
      
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </div>
  </section>

  <!-- CONTACT -->

  <!-- <section id="contact">
    <h2>Contato</h2>
    <form>
      <input type="text" placeholder="Digite seu nome" />
      <input type="email" placeholder="Digite seu e-mail" />
      <textarea cols="30" rows="10" placeholder="Digite sua mensagem"></textarea>
      <button>Enviar</button>
    </form>
  </section> -->

  <footer>
    <h3>Qualquer problema relatar aqui em baixo</h3>
    <input type="email" name="" id="">
    <button type="submit">Enviar</button>
  </footer>
  </main>  

  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script src="script.js"></script>
</body>
</html>