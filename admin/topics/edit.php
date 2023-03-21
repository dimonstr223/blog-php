<?php
include '../../app/controllers/topics.php';
require '../../app/include/header-admin.php';
?>
<div class="content">
	<div class="container">
		<div class="content-wrap row">
			<?php include '../../app/include/admin-panel.php' ?>

			<div class="topics col-10">
				<div class="buttons">
					<a href="index.php" class="btn btn-primary">Управление</a>
				</div>
				<h3 class="topics-title">Обновить категорию</h3>
				<form class="create-form" action="edit.php" method="post">
					<div class="col-8 col-red"><?= $errMsg ?></div>
					<!-- <div class="col-8 hidden"> -->
					<input hidden type="text" class="form-control" name="id" value="<?= $id ?>" id="title">
					<!-- </div> -->
					<div class="col-8">
						<label for="title" class="form-label">Название категории</label>
						<input type="text" class="form-control" name="name" value="<?= $name ?>" id="title">
					</div>
					<div class="col-8">
						<label for="body" class="form-label">Описание Категории</label>
						<textarea class="form-control create-textarea" name="description" id="body" rows="6"><?= $description ?></textarea>
					</div>
					<button type="submit" name="topic-edit" class="create-form__submit btn btn-success">Обновить</button>
				</form>
			</div>
		</div>
	</div>

</div>

<?php require '../../app/include/footer.php' ?>