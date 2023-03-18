<?php
include '../../app/include/header-admin.php';
?>
<div class="content">
	<div class="container">
		<div class="content-wrap row">
			<?php include '../../app/include/admin-panel.php' ?>
			<div class="users col-10">
				<div class="buttons">
					<a href="create.php" class="btn btn-success">Создать</a>
				</div>
				<h3 class="users-title">Управление пользователями</h3>
				<div class="row table-title">
					<div class="table-title__item id col-1">ID</div>
					<div class="table-title__item role col-1">Роль</div>
					<div class="table-title__item name col-4">Логин</div>
					<div class="table-title__item email col-4">E-mail</div>
					<div class="table-title__item edit col-2">Редактировать</div>
				</div>
				<div class="topics">
					<div class="row user">
						<div class="user__item id col-1">1</div>
						<div class="user__item role col-1">Admin</div>
						<div class="user__item name col-4">dimbimbib123</div>
						<div class="user__item email col-4">elelellsl@email.com</div>
						<div class="user__item edit col-1 col-green"><a href="#">Edit</a></div>
						<div class="user__item delete col-1 col-red"><a href="#">Delete</a></div>
					</div>
					<div class="row user">
						<div class="user__item id col-1">1</div>
						<div class="user__item role col-1">Admin</div>
						<div class="user__item name col-4">dimbimbib123</div>
						<div class="user__item email col-4">elelellsl@email.com</div>
						<div class="user__item edit col-1 col-green"><a href="#">Edit</a></div>
						<div class="user__item delete col-1 col-red"><a href="#">Delete</a></div>
					</div>
					<div class="row user">
						<div class="user__item id col-1">1</div>
						<div class="user__item role col-1">Admin</div>
						<div class="user__item name col-4">dimbimbib123</div>
						<div class="user__item email col-4">elelellsl@email.com</div>
						<div class="user__item edit col-1 col-green"><a href="#">Edit</a></div>
						<div class="user__item delete col-1 col-red"><a href="#">Delete</a></div>
					</div>
					<div class="row user">
						<div class="user__item id col-1">1</div>
						<div class="user__item role col-1">Admin</div>
						<div class="user__item name col-4">dimbimbib123</div>
						<div class="user__item email col-4">elelellsl@email.com</div>
						<div class="user__item edit col-1 col-green"><a href="#">Edit</a></div>
						<div class="user__item delete col-1 col-red"><a href="#">Delete</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>
<?php
include '../../app/include/footer.php';
?>