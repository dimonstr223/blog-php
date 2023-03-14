<?php include('path.php') ?>

<?php include('app/include/header.php') ?>

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
				<a class="form-link" href="signup.php">Зарегистрироваться</a>
			</div>
		</form>
	</div>
</div>

<?php include('app/include/footer.php') ?>