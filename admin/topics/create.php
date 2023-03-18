<?php require '../../app/include/header-admin.php' ?>

<div class="content">
	<div class="container">
		<div class="content-wrap row">
			<?php include '../../app/include/admin-panel.php' ?>

			<div class="topics col-10">
				<div class="buttons">
					<a href="index.php" class="btn btn-primary">Управление</a>
				</div>
				<h3 class="topics-title">Создать категорию</h3>
				<form class="create-form" action="create.php" action="post">
					<div class="col-8">
						<label for="title" class="form-label">Название категории</label>
						<input type="text" class="form-control" id="title" placeholder="">
					</div>
					<div class="col-8">
						<label for="body" class="form-label">Описание Категории</label>
						<textarea class="form-control create-textarea" id="body" rows="6"></textarea>
					</div>
					<button type="submit" class="create-form__submit btn btn-success">Создать</button>

				</form>
			</div>
		</div>
	</div>

</div>

<?php require '../../app/include/footer.php' ?>