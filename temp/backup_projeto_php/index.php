<?php 
          // Verificar se sessão já foi iniciada anteriormentre
          if(session_id() == '')
            session_start();
          
          ?>
<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head>
    <title>Unity Girls</title>
    <?php include 'bases/head.php' ?>
  </head>
  <body>
    <?php include 'bases/menu.php' ?>
<main>
  <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="src/img/noticia1.jpg" class="d-block w-100" alt="..." />
        <div class="container">
          <div class="carousel-caption text-start">
            <h1 class="carro">Ela não tinha nem e-mail e hoje ensina mulheres  a serem profissionais de TI...</h1>
            <p class="opacity-75"></p>
            <p><a class="btn btn-lg btn-primary" href="#https://www.bol.uol.com.br/noticias/2023/05/22/startup-mostra-que-tecnologia-de-informacao-e-sim-profissao-para-mulheres.htm">Veja a matéria completa</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="src/img/noticia3.jpg" class="d-block w-100" alt="..." />
        <div class="container">
          <div class="carousel-caption">
            <h1 class="carro">Mulheres na TI: como a participação feminina contribui para o avanço da área</h1>
            <p></p>
            <p><a class="btn btn-lg btn-primary" href="#https://smanager.com.br/mulheres-na-ti/">Veja a matéria completa</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="src/img/noticia3.webp" class="d-block w-100" alt="..." />
        <div class="container">
          <div class="carousel-caption text-end">
            <h1 class="carro">Mulheres na tecnologia: as duras verdades de uma batalha difícil</h1>
            <p></p>
            <p><a class="btn btn-lg btn-primary" href="#">Veja a matéria completa</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <div class="container marketing">
    <div class="row">
      <div class="col-lg-4">
        
        <img src="src/img/noticia.png" class="d-block w-100" alt="..." />
        <h2 class="fw-normal">NOTÍCIAS</h2>
        <p>Notícias relacionadas a participação das mulheres da tecnologia</p>
        <p><a class="btn btn-secondary" href="#">Detalhes &raquo;</a></p>
      </div>
      <div class="col-lg-4">
        
        <img src="src/img/artigos.png" class="d-block w-100" alt="..." />
        <h2 class="fw-normal">ARTIGOS</h2>
        <p>Artigos sobre divesos tipos de linguegens de programações e profissões na área da tecnologia</p>
        <p><a class="btn btn-secondary" href="#">Detalhes &raquo;</a></p>
      </div>
      <div class="col-lg-4">
        
        <img src="src/img/ações.png" class="d-block w-100" alt="..." />
        <h2 class="fw-normal">AÇÕES</h2>
        <p>Conquistas das mulheres na informática, como premiações, grupos e personalidades</p>
        <p><a class="btn btn-secondary" href="#">Detalhes &raquo;</a></p>
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1">Quem somos nós? <span class="text-body-secondary">Mulheres na TI</span></h2>
        <p class="lead">Unity Girls é um projeto desenvolvido por estudantes do curso de informática,
          que querem a inclusão e reconhecimento das mulheres na área da TI. 
          O portal tem desde notícias das mulheres nesse ramo, como artigos sobre linguagens de
          programação, um pouco sobre nós que o desenvolvemos e muito mais!</p>
      </div>
      <div class="col-md-5">
        <img src="src/img/logo3.png" class="d-block w-100" alt="..." />
      </div>
    </div>
</main>

<?php include 'bases/rodape.php' ?>

    </body>
</html>
