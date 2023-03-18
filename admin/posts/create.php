<?php require '../../app/include/header-admin.php' ?>

<div class="content">
	<div class="container">
		<div class="content-wrap row">
			<?php include '../../app/include/admin-panel.php' ?>

			<div class="posts col-10">
				<div class="buttons">
					<a href="index.php" class="btn btn-primary">Управление</a>
				</div>
				<h3 class="posts-title">Создать статью</h3>
				<form class="create-form" action="create.php" action="post">
					<div class="col-8">
						<label for="title" class="form-label">Название статьи</label>
						<input type="text" class="form-control" id="title" placeholder="">
					</div>
					<div class="col-8">
						<label for="body" class="form-label">Содержимое статьи</label>
						<textarea class="form-control create-textarea" id="body" rows="3"></textarea>
					</div>
					<div class="col-8">
						<label for="formFile" class="form-label">Загрузите картинку</label>
						<input class="form-control input-file" type="file" id="formFile">
					</div>
					<div class="col-8">
						<label for="select" class="form-label">Выберите категорию</label>
						<select class="form-select" id="select">
							<option selected>Open this select menu</option>
							<option value="1">One</option>
							<option value="2">Two</option>
							<option value="3">Three</option>
						</select>
					</div>
					<button type="submit" class="create-form__submit btn btn-success">Создать</button>
				</form>
			</div>
		</div>
	</div>

</div>

<!-- визуальный редактор к textarea поста -->
<script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>

<script src="../../assets/js/script.js"></script>

<?php require '../../app/include/footer.php' ?>