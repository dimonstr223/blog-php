<?php
include '../../app/include/header-admin.php';
?>
<div class="content">
	<div class="container">
		<div class="content-wrap row">
			<div class="admin-panel col-2">
				<ul class="sidebar">
					<li class="sidebar__item"><a class="sidebar__link" href="#">Посты</a></li>
					<li class="sidebar__item"><a class="sidebar__link" href="#">Записи</a></li>
					<li class="sidebar__item"><a class="sidebar__link" href="#">Юзеры</a></li>
					<li class="sidebar__item"><a class="sidebar__link" href="#">Категории</a></li>
				</ul>
			</div>
			<div class="posts col-10">
				<div class="buttons">
					<button class="btn btn-success">Add post</button>
					<button class="btn btn-success">Manage post</button>
				</div>
				<h3 class="posts-title">Управление постами</h3>
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