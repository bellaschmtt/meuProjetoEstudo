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

  <!-- texto -->

 <div>
  <h1 class= "htexto">Sobre o Site</h1>
  <p class= "ptexto">A história é um assunto fascinante que toca muitos aspectos da vida. Ele conta os eventos passados ​​com grande precisão e detalhes. Também ajuda as pessoas a aprender com os erros cometidos no passado. Muitas escolas e comunidades têm sites dedicados a ensinar as pessoas sobre a história. Esses podem ser ótimos recursos para aprender sobre eventos históricos.

    O site contém muitos artigos diferentes relacionados à história. Cada um cobre um período diferente da história e conta uma história única sobre esse período. Os artigos cobrem muitos assuntos diferentes, como geografia, cultura, política e muito mais. Eles são escritos de maneira clara e envolvente, o que facilita a leitura. Qualquer pessoa pode obter informações valiosas lendo esses artigos. 

    Cada artigo no site de história deve passar por rígidas diretrizes editoriais antes de ser publicado. Todos os autores são profissionais que sabem como escrever artigos históricos divertidos e informativos. Todos os seus trabalhos estão sujeitos aos mesmos padrões de qualidade antes de serem publicados. Isso garante que todo o conteúdo do site seja preciso, acadêmico e adequado à idade. 

    O conteúdo é fácil de entender e bem apresentado. Cada artigo inclui uma breve introdução que explica do que se trata o artigo e define o contexto para o conteúdo dentro dele. Isso torna a leitura de qualquer artigo histórico fácil e acessível para qualquer pessoa interessada em aprender sobre a história. Além disso, eles também são ótimos para professores que desejam preparar aulas para suas aulas sobre eventos históricos.

    Qualquer pessoa pode obter informações valiosas lendo artigos históricos do site. Eles cobrem muitos períodos diferentes da história e ajudam as pessoas a entender os eventos atuais no contexto histórico. O conteúdo é bem escrito e torna o aprendizado fácil e divertido.
  </p>
 </div>

  <footer>
    <div class="footer-col">
      <h4>Esta tendo problemas, informe o erro!</h4>
      <div class="form-sub">
        <form>
          <input type="text" placeholder="Digite o seu e-mail" required>
          <br>
          <button>Enviar</button>
        </form>
      </div>
      <div class="form-sub">
        <form>
          <input type="text" placeholder="Digite o seu e-mail" required>
          <br>
          <button>Enviar</button>
        </form>
      </div>

    </div>
  </footer>
  
  </main>  

  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script src="script.js"></script>
</body>
</html>