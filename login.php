<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>My blog</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
	<link rel="preconnect" href="https://fonts.googleapis.com" />
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap"
		rel="stylesheet" />
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

	<div class="content">
		<div class="container">
			<form class="signup-form row justify-content-md-center" method="post" action="signup.html">
				<h2 class="form-title title">Войти в аккаунт</h2>
				<div class="mb-3 col-12 col-md-4">
					<label for="formGroupExampleInput" class="form-label">Логин</label>
					<input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder" />
				</div>

				<div class="w-100"></div>
				<div class="mb-3 col-12 col-md-4">
					<label for="exampleInputPassword1" class="form-label">Password</label>
					<input type="password" class="form-control" id="exampleInputPassword1" />
				</div>
				<div class="w-100"></div>

				<div class="form-btns mb-3 col-12 col-md-4">
					<button type="button" class="btn btn-secondary">Войти</button>
					<a class="form-link" href="signup.html">Зарегистрироваться</a>
				</div>
			</form>
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
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
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