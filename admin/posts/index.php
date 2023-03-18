<?php
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
					<div class="table-title__item author col-2">Автор</div>
					<div class="table-title__item edit col-2 ">Редакт.</div>
					<div class="table-title__item delete col-2 ">Удалить</div>
				</div>
				<div class="posts">
					<div class="row post">
						<div class=" post__item id col-1">1</div>
						<div class=" post__item name col-5">Какое-то Название</div>
						<div class=" post__item author col-2">Димонстр</div>
						<div class=" post__item edit col-2 col-green"><a href="#">Edit</a></div>
						<div class=" post__item delete col-2 col-red"><a href="#">Delete</a></div>
					</div>
					<div class="row post">
						<div class=" post__item id col-1">1</div>
						<div class=" post__item name col-5">Какое-то Название</div>
						<div class=" post__item author col-2">Димонстр</div>
						<div class=" post__item edit col-2 col-green"><a href="#">Edit</a></div>
						<div class=" post__item delete col-2 col-red"><a href="#">Delete</a></div>
					</div>
					<div class="row post">
						<div class=" post__item id col-1">1</div>
						<div class=" post__item name col-5">Какое-то Название</div>
						<div class=" post__item author col-2">Димонстр</div>
						<div class=" post__item edit col-2 col-green"><a href="#">Edit</a></div>
						<div class=" post__item delete col-2 col-red"><a href="#">Delete</a></div>
					</div>
					<div class="row post">
						<div class=" post__item id col-1">1</div>
						<div class=" post__item name col-5">Какое-то Название</div>
						<div class=" post__item author col-2">Димонстр</div>
						<div class=" post__item edit col-2 col-green"><a href="#">Edit</a></div>
						<div class=" post__item delete col-2 col-red"><a href="#">Delete</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>
<?php
include '../../app/include/footer.php';
?>