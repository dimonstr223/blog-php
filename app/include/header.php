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

	<header class="container-fluid">
		<div class="container">
			<div class="row">
				<div class="col-4">
					<h1>
						<a href="<?php echo BASE_URL ?>"> My blog </a>
					</h1>
				</div>
				<nav class="col-8">
					<ul>
						<li><a href="<?php echo BASE_URL ?>">Главная</a></li>
						<li><a href="#">О нас</a></li>
						<li><a href="#">Услуги</a></li>
						<li>
							<a href="#"><i class="icon fa-solid fa-user"></i>Кабинет</a>
							<ul>
								<li><a href="<?php echo BASE_URL . 'login.php' ?>">Админ панель</a></li>
								<li><a href="#">Выход</a></li>
							</ul>
						</li>
					</ul>
				</nav>
			</div>
		</div>
	</header>