<?php
include '../../path.php';
include '../../app/controllers/posts.php';
require '../../app/include/header-admin.php';
?>

<div class="content">
	<div class="container">
		<div class="content-wrap row">
			<?php include '../../app/include/admin-panel.php' ?>

			<div class="posts col-10">
				<div class="buttons">
					<a href="index.php" class="btn btn-primary">Управление</a>
				</div>
				<h3 class="posts-title">Создать статью</h3>
				<form class="create-form" action="create.php" method="post" enctype="multipart/form-data">
					<div class="col-8 col-red"><?= $errMsg ?></div>
					<div class="col-8">
						<label for="title" class="form-label">Заголовок</label>
						<input type="text" name="title" value="<?= $title ?>" class="form-control" id="title" placeholder="">
					</div>
					<div class="col-8">
						<label for="body" class="form-label">Содержимое</label>
						<textarea class="form-control create-textarea" name="content" value="<?= $content ?>" id="body" rows="3"><?= $content ?></textarea>
					</div>
					<div class="col-8">
						<label for="formFile" class="form-label">Добавить картинку</label>
						<input class="form-control input-file" name="img" type="file" id="formFile">
					</div>
					<div class="col-8">
						<label for="select" class="form-label">Выбрать категорию</label>
						<select class="form-select" name="topic" id="select">
							<?php foreach ($topics as $key => $value) : ?>
								<option value="<?= $value['id'] ?>"><?= $value['name'] ?></option>
							<? endforeach ?>
						</select>
					</div>
					<div class="col-8 form-check form-switch">
						<input class="form-check-input" name="status" type="checkbox" checked id="flexSwitchCheckDefault">
						<label class="form-check-label" for="flexSwitchCheckDefault">Public</label>
					</div>
					<button type="submit" name="post_create" class="create-form__submit btn btn-success">Создать</button>
				</form>
			</div>
		</div>
	</div>

</div>

<!-- визуальный редактор к textarea поста -->
<script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>

<script src="../../assets/js/script.js"></script>

<?php require '../../app/include/footer.php' ?>