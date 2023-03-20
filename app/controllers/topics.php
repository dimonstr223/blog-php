<?php
include "../../path.php";

include "../../app/db/db.php";

$table = 'topics';
$errMsg = '';

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
			$post = [
				'name' => $name,
				'description' => $description,
			];
			// test($post);
			// exit();

			// регистрируем эти данные в БД
			$id = insert($table, $post);

			// запрашиваем из БД зарегистрированного юзера
			$user = selectOne($table, ['id' => $id]);

			header('location: ' . BASE_URL . 'admin/topics/index.php');
		}
	}
} else {
	$name = '';
	$description = '';
}
