<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
  integrity="sha384-xgW/5F+ChM35ePZi/Qs/tJd4mLb3vBwz0u9qPX1R0jgPMyHfMzG64KGY3SikvWU8" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
  integrity="sha384-xgW/5F+ChM35ePZi/Qs/tJd4mLb3vBwz0u9qPX1R0jgPMyHfMzG64KGY3SikvWU8" crossorigin="anonymous">

<div class="container">
  <div class="row">
    <div class="col-md-6">
      <!-- Div com o conteúdo -->
      <div id="home" class="home">
        <p class="intro-text">
          Hi, my name is
        </p>
        <h1 class="main-title">
          <?= get_sub_field('text_title'); ?>
        </h1>
        <h2 class="subtitle">
          <?= get_sub_field('text_subtitle'); ?>
        </h2>
        <h2 class="subtitle">
          <?= get_sub_field('text_subtitle_2'); ?>
        </h2>
        <p class="description">
          <?= get_sub_field('text_description'); ?>
        </p>
        <ul class="icons">
          <li><a href="https://api.whatsapp.com/send?phone=5548998002979&text=Ol%C3%A1!"><ion-icon
                name="logo-whatsapp"></ion-icon></a></li>
          <li><a href="https://github.com/Willian-Nilton-Alves"><ion-icon name="logo-github"></ion-icon></a></li>
          <li><a href="https://www.linkedin.com/in/willian-nilton-alves-a00381228/"><ion-icon
                name="logo-linkedin"></ion-icon></a></li>
          <li><a href="#"><ion-icon name="logo-instagram"></ion-icon></a></li>
        </ul>

      </div>
    </div>

    <div class="col-md-6 position-relative justify-content-center div-img">
      <!-- Imagem -->
      <img
        src="http://portiflio.local/wp-content/uploads/2023/10/Imagem-do-WhatsApp-de-2023-09-21-as-22.41.32_e2fb5eae.jpg"
        alt="Sua imagem" class="img-fluid position-absolute bottom-0 img-header">
    </div>
  </div>
</div>