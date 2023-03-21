<?php
include '../../path.php';
include '../../app/controllers/posts.php';
include '../../app/include/header-admin.php';
?>
<div class="content">
	<div class="container">
		<div class="content-wrap row">
			<?php include '../../app/include/admin-panel.php' ?>
			<div class="posts col-10">
				<div class="buttons">
					<a href="create.php" class="btn btn-success">Создать</a>
				</div>
				<h3 class="posts-title">Управление статьями</h3>
				<div class="row table-title">
					<div class="table-title__item id col-1">ID</div>
					<div class="table-title__item name col-5">Название</div>
					<div class="table-title__item author col-3">Автор</div>
					<div class="table-title__item edit col-3 ">Редактировать</div>
				</div>
				<div class="items">
					<?php foreach ($posts as $key => $value) : ?>
						<div class="row post">
							<div class=" post__item id col-1"><?= $key + 1; ?></div>
							<div class=" post__item name col-5"><?= $value['title'] ?></div>
							<div class=" post__item author col-3"><?= $value['id_user'] ?></div>
							<div class=" post__item edit col-1 col-green"><a href="#">Edit</a></div>
							<div class=" post__item delete col-1 col-red"><a href="#">Delete</a></div>
							<div class=" post__item delete col-1 d-flex">
								<label for="<?= $value['id'] ?>">Public</label>
								<?php if ($value['status']) : ?>
									<input type="checkbox" checked name="publick" id="<?= $value['id'] ?>">
								<?php else : ?>
									<input type="checkbox" name="publick" id="<?= $value['id'] ?>">
								<? endif ?>
							</div>
						</div>
					<? endforeach ?>
				</div>
			</div>
		</div>
	</div>

</div>
<?php
include '../../app/include/footer.php';
?>