<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>My blog</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="/assets/css/style.css" />
</head>

<body>
  <!-- header -->
  <header class="container-fluid">
    <div class="container">
      <div class="row">
        <div class="col-4">
          <h1>
            <a href="/"> My blog </a>
          </h1>
        </div>
        <nav class="col-8">
          <ul>
            <li><a href="#">Главная</a></li>
            <li><a href="#">О нас</a></li>
            <li><a href="#">Услуги</a></li>
            <li>
              <a href="#"><i class="icon fa-solid fa-user"></i>Кабинет</a>
              <ul>
                <li><a href="#">Админ панель</a></li>
                <li><a href="#">Выход</a></li>
              </ul>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </header>

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

  <!-- footer -->
  <footer class="footer container-fluid">
    <div class="footer-content container">
      <div class="row">
        <div class="footer-section about col-12 col-md-4">
          <h3 class="footer-title">Мой блог</h3>
          <p class="footer-text">
            Мой блог - это приложение, созданное с целью научиться созданию
            динамических сайтов с помощью JavaScript и PHP.
          </p>
          <div class="contacts">
            <span class="contacts-item"><i class="fas fa-phone"></i>&nbsp; 123-456-678</span>
            <span class="contacts-item"><i class="fas fa-envelope"></i>&nbsp; info@myblog.com</span>
          </div>
          <div class="socials">
            <a class="socials-item" href="#"><i class="fa fa-facebook"></i></a>
            <a class="socials-item" href="#"><i class="fa fa-instagram"></i></a>
            <a class="socials-item" href="#"><i class="fa fa-twitter"></i></a>
            <a class="socials-item" href="#"><i class="fa fa-youtube"></i></a>
          </div>
        </div>

        <div class="footer-section links col-12 col-md-4">
          <h3 class="footer-title">Ссылки</h3>
          <ul class="links-list">
            <li class="links-item">
              <a class="links-item__link" href="#">События</a>
            </li>
            <li class="links-item">
              <a class="links-item__link" href="#">Команда</a>
            </li>
            <li class="links-item">
              <a class="links-item__link" href="#">Управление</a>
            </li>
            <li class="links-item">
              <a class="links-item__link" href="#">Галлерея</a>
            </li>
            <li class="links-item">
              <a class="links-item__link" href="#">Что-то еще</a>
            </li>
          </ul>
        </div>

        <div class="footer-section contact-form col-12 col-md-4">
          <h3 class="footer-title">Обратная связь</h3>
          <form action="#">
            <input class="text-input contact-input" type="email" placeholder="Your email" />
            <textarea class="text-input contact-input" placeholder="Your message..."></textarea>
            <button class="btn btn-big contact-btn" type="submit">
              Отправить
            </button>
          </form>
        </div>
      </div>
      <div class="footer-bottom">&copy; dimonstr223</div>
    </div>
  </footer>

  <!-- scripts -->
  <script src="https://kit.fontawesome.com/385654ba58.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
  </script>
  <!-- <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
      integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
      integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD"
      crossorigin="anonymous"
    ></script> -->
</body>

</html>