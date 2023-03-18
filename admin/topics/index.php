<?php
include '../../app/include/header-admin.php';
?>
<div class="content">
	<div class="container">
		<div class="content-wrap row">
			<?php include '../../app/include/admin-panel.php' ?>
			<div class="topics col-10">
				<div class="buttons">
					<a href="create.php" class="btn btn-success">Создать</a>
				</div>
				<h3 class="topics-title">Управление категориями</h3>
				<div class="row table-title">
					<div class="table-title__item id col-1">ID</div>
					<div class="table-title__item name col-5">Название</div>
					<div class="table-title__item edit col-4 ">Редактировать</div>
				</div>
				<div class="topics">
					<div class="row topic">
						<div class="topic__item id col-1">1</div>
						<div class="topic__item name col-5">Какое-то Название</div>
						<div class="topic__item edit col-2 col-green"><a href="#">Edit</a></div>
						<div class="topic__item delete col-2 col-red"><a href="#">Delete</a></div>
					</div>
					<div class="row topic">
						<div class="topic__item id col-1">1</div>
						<div class="topic__item name col-5">Какое-то Название</div>
						<div class="topic__item edit col-2 col-green"><a href="#">Edit</a></div>
						<div class="topic__item delete col-2 col-red"><a href="#">Delete</a></div>
					</div>
					<div class="row topic">
						<div class="topic__item id col-1">1</div>
						<div class="topic__item name col-5">Какое-то Название</div>
						<div class="topic__item edit col-2 col-green"><a href="#">Edit</a></div>
						<div class="topic__item delete col-2 col-red"><a href="#">Delete</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>
<?php
include '../../app/include/footer.php';
?>