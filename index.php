<?php include('path.php') ?>

<?php include('app/include/header.php') ?>

<!-- carousel  -->
<div class="container">
  <div class="row">
    <h2 class="slider-title title">Топ публикации</h2>
  </div>
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner h-100">
      <div class="carousel-item active">
        <img src="/assets/images/carousel-1.jpg" class="slider-img d-block w-100 h-100" alt="..." />
        <div class="carousel-caption d-none d-md-block">
          <h5 class="slide-label"><a href="#">First slide label</a></h5>
        </div>
      </div>
      <div class="carousel-item">
        <img src="/assets/images/carousel-2.jpg" class="slider-img d-block w-100 h-100" alt="..." />
        <div class="carousel-caption d-none d-md-block">
          <h5 class="slide-label"><a href="#">Second slide label</a></h5>
        </div>
      </div>
      <div class="carousel-item">
        <img src="/assets/images/carousel-3.jpg" class="slider-img d-block w-100 h-100" alt="..." />
        <div class="carousel-caption d-none d-md-block">
          <h5 class="slide-label"><a href="#">Third slide label</a></h5>
        </div>
      </div>
      <div class="carousel-item">
        <img src="/assets/images/carousel-4.jpg" class="slider-img d-block w-100 h-100" alt="..." />
        <div class="carousel-caption d-none d-md-block">
          <h5 class="slide-label"><a href="#">Forths slide label</a></h5>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>

<!-- content -->
<div class="container">
  <div class="content row">
    <h2 class="content-title title">Последние публикации</h2>
    <div class="main-content col-md-9">
      <div class="post row">
        <div class="img col-12 col-md-4">
          <img class="img-thumbnail" src="/assets/images/carousel-4.jpg" alt="post" />
        </div>
        <div class="post_text col-12 col-md-8">
          <h3 class="post-title">
            <a class="post-title__link" href="#">Прикольная статья на тему динамического сайта</a>
          </h3>
          <div class="icons">
            <i class="far fa-user">Имя автора</i>
            <i class="far fa-calendar">Дата публикации</i>
          </div>
          <p class="preview-text">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
            Dolorem corrupti itaque magnam.
          </p>
        </div>
      </div>

      <div class="post row">
        <div class="img col-12 col-md-4">
          <img class="img-thumbnail" src="/assets/images/carousel-4.jpg" alt="post" />
        </div>
        <div class="post_text col-12 col-md-8">
          <h3 class="post-title">
            <a class="post-title__link" href="#">Прикольная статья на тему динамического сайта</a>
          </h3>
          <div class="icons">
            <i class="far fa-user">Имя автора</i>
            <i class="far fa-calendar">Дата публикации</i>
          </div>
          <p class="preview-text">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
            Dolorem corrupti itaque magnam.
          </p>
        </div>
      </div>
    </div>

    <div class="sidebar col-md-3">
      <div class="section search">
        <h3 class="sidebar-title">Поиск</h3>
        <form action="#">
          <input class="search__input" type="text" placeholder="Поиск.." />
        </form>
      </div>
      <div class="section topics">
        <h3 class="sidebar-title">Категории</h3>
        <ul class="topics-list">
          <li class="topics-item">
            <a class="topics-item__link" href="#">Программирование</a>
          </li>
          <li class="topics-item">
            <a class="topics-item__link" href="#">Наука</a>
          </li>
          <li class="topics-item">
            <a class="topics-item__link" href="#">Животноводство</a>
          </li>
          <li class="topics-item">
            <a class="topics-item__link" href="#">Охота</a>
          </li>
          <li class="topics-item">
            <a class="topics-item__link" href="#">Тренды</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>

<?php include('app/include/footer.php') ?>