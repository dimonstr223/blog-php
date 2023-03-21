<?php
include ROOT . "/app/db/db.php";

$table = 'topics';
$errMsg = '';
// запрашиваем из БД текущий топик
$topics = selectAll($table);

// проверяем является ли метод запроса страницы - 'POST'
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['topic-submit'])) {
	// из суперглобального моссива $_POST забираем данные отправленной формы
	$name = trim($_POST['name']);
	$description = trim($_POST['description']);

	// валидация инпутов формы
	if ($name === '' || $description === '') {
		$errMsg = 'Не все поля заполнены';
	} elseif (mb_strlen($name) <= 2) {
		$errMsg = 'Название должно быть больше 2 символов';
	} else {
		// ищем идентичный topic в базе данных
		$existance = selectOne($table, ['name' => $name]);

		if ($existance) {
			$errMsg = 'Такой топик уже существует';
		} else {
			// формируем массив из отредактированных данных формы
			$topic = [
				'name' => $name,
				'description' => $description,
			];

			// регистрируем эти данные в БД
			$id = insert($table, $topic);

			header('location: ' . BASE_URL . 'admin/topics/index.php');
		}
	}
} else {
	$name = '';
	$description = '';
}

// ОБНОВЛЕНИЕ ТОПИКА
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
	$item = selectOne($table, ['id' => $_GET['id']]);

	$id = $item['id'];
	$name = $item['name'];
	$description = $item['description'];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['topic-edit'])) {

	$id = trim($_POST['id']);
	$name = trim($_POST['name']);
	$description = trim($_POST['description']);

	// валидация инпутов формы
	if ($name === '' || $description === '') {
		$errMsg = 'Не все поля заполнены';
	} elseif (mb_strlen($name) <= 2) {
		$errMsg = 'Название должно быть больше 2 символов';
	} else {
		// формируем массив из отредактированных данных формы
		$topic = [
			'id' => $id,
			'name' => $name,
			'description' => $description,
		];

		// обновляем эти данные в БД
		$id = update($table, $id, $topic);

		header('location: ' . BASE_URL . 'admin/topics/index.php');
	}
}

// УДАЛЕНИЕ ТОПИКА
if ($_SERVER['REQUEST_METHOD'] === 'GET' && $_GET['del_id']) {
	$id = $_GET['del_id'];
	delete($table, $id);
	header('location: ' . BASE_URL . 'admin/topics/index.php');
}
