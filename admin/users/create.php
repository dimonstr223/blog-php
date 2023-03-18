<?php require '../../app/include/header-admin.php' ?>

<div class="content">
	<div class="container">
		<div class="content-wrap row">
			<?php include '../../app/include/admin-panel.php' ?>

			<div class="users col-10">
				<div class="buttons">
					<a href="index.php" class="btn btn-primary">Управление</a>
				</div>
				<h3 class="users-title">Создать пользователя</h3>
				<form class="create-form" action="create.php" action="post">
					<div class="mb-3 col-12 col-md-4">
						<label for="formGroupExampleInput" class="form-label">Логин</label>
						<input type="text" class="form-control" name="login" value="<?= $user ?>" id="formGroupExampleInput" placeholder="Логин" />
					</div>
					<div class="mb-3 col-12 col-md-4">
						<label for="exampleInputEmail1" class="form-label">E-mail</label>
						<input type="email" class="form-control" name="email" value="<?= $email ?>" id="exampleInputEmail1" aria-describedby="emailHelp" />
					</div>
					<div class="mb-3 col-12 col-md-4">
						<label for="exampleInputEmail1" class="form-label">Role</label>
						<select class="form-select" aria-label="Default select example">
							<option value="0" selected>User</option>
							<option value="1">Admin</option>
						</select>
					</div>
					<div class="mb-3 col-12 col-md-4">
						<label for="exampleInputPassword1" class="form-label">Password</label>
						<input type="password" class="form-control" name="pass-first" id="exampleInputPassword1" />
					</div>
					<div class="mb-3 col-12 col-md-4">
						<label for="exampleInputPassword2" class="form-label">Password</label>
						<input type="password" class="form-control" name="pass-second" id="exampleInputPassword2" />
					</div>
					<button type="submit" class="create-form__submit btn btn-success">Создать</button>

				</form>
			</div>
		</div>
	</div>

</div>


<?php require '../../app/include/footer.php' ?>