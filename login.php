<?php
include('path.php');
include('app/controllers/users.php');
include('app/include/header.php');
?>
<div class="content">
	<div class="container">
		<form class="signup-form row justify-content-md-center" method="post" action="login.php">
			<h2 class="form-title title">Войти в аккаунт</h2>
			<div class="mb-3 col-12 col-md-4 err">
				<p class="err"><?= $errMsg ?></p>
			</div>
			<div class="w-100"></div>

			<div class="mb-3 col-12 col-md-4">
				<label for="formGroupExampleInput" class="form-label">E-mail</label>
				<input type="email" class="form-control" name="email" value="<?= $email ?>" id="formGroupExampleInput"
					placeholder="E-mail" />
			</div>

			<div class="w-100"></div>
			<div class="mb-3 col-12 col-md-4">
				<label for="exampleInputPassword1" class="form-label">Password</label>
				<input type="password" class="form-control" name="pass" id="exampleInputPassword1" />
			</div>
			<div class="w-100"></div>

			<div class="form-btns mb-3 col-12 col-md-4">
				<button type="submit" class="btn btn-secondary" name="submit-log">Войти</button>
				<a class="form-link" href="signup.php">Зарегистрироваться</a>
			</div>
		</form>
	</div>
</div>

<?php include('app/include/footer.php') ?>