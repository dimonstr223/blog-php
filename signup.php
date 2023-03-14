<?php
include('app/include/header.php');
include('app/controllers/users.php');
?>


<div class="content">
	<div class="container">
		<form class="signup-form row justify-content-md-center" method="post" action="signup.php">
			<h2 class="form-title title">Регистрация</h2>
			<div class="mb-3 col-12 col-md-4">
				<label for="formGroupExampleInput" class="form-label">Логин</label>
				<input type="text" class="form-control" name="login" id="formGroupExampleInput" placeholder="Логин" />
			</div>
			<div class="w-100"></div>
			<div class="mb-3 col-12 col-md-4">
				<label for="exampleInputEmail1" class="form-label">Email address</label>
				<input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" />
				<div id="emailHelp" class="form-text">
					We'll never share your email with anyone else.
				</div>
			</div>
			<div class="w-100"></div>
			<div class="mb-3 col-12 col-md-4">
				<label for="exampleInputPassword1" class="form-label">Password</label>
				<input type="password" class="form-control" name="pass-first" id="exampleInputPassword1" />
			</div>
			<div class="w-100"></div>
			<div class="mb-3 col-12 col-md-4">
				<label for="exampleInputPassword2" class="form-label">Password</label>
				<input type="password" class="form-control" name="pass-second" id="exampleInputPassword2" />
			</div>
			<div class="w-100"></div>
			<div class="form-btns mb-3 col-12 col-md-4">
				<button type="submit" class="btn btn-secondary" name="submit">Регистрация</button>
				<a class="form-link" href="login.html">Авторизироваться</a>
			</div>
		</form>
	</div>
</div>

<?php include('app/include/footer.php') ?>