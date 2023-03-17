<?php
include "app/db/db.php";

$table = 'users';

$errMsg = '';

function userAuth($user)
{
	// пихаем в суперглобальный массив $_SESSION данные текущего юзера
	$_SESSION['id'] = $user['id'];
	$_SESSION['username'] = $user['username'];
	$_SESSION['admin'] = $user['admin'];

	if ($_SESSION['admin']) {
		header('location: ' . BASE_URL . 'admin/posts/index.php');
	}

	// отправляем юзера на главную страницу
	header('location: ' . BASE_URL);
}

// проверяем является ли метод запроса страницы - 'POST'
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit-reg'])) {

	// из суперглобального моссива $_POST забираем данные отправленной формы
	$username = trim($_POST['login']);
	$email = trim($_POST['email']);
	$admin = 0;
	$passF = trim($_POST['pass-first']);
	$passS = trim($_POST['pass-second']);

	// валидация инпутов формы
	if ($username === '' || $email === '' || $passF === '' || $passS === '') {
		$errMsg = 'Не все поля заполнены!';
	} elseif (mb_strlen($username) <= 2) {
		$errMsg	= 'Логин должен быть больше 2 символов!';
	} elseif ($passF !== $passS) {
		$errMsg	= 'Пароли не совпадают!';
	} else {
		// ищем идентичный email в базе данных
		$emailExist = selectOne($table, ['email' => $email]);

		if ($emailExist) {
			$errMsg = 'Эта почта уже используется!';
		} else {
			$pass = password_hash($passS, PASSWORD_DEFAULT);

			// формируем массив из отредактированных данных формы
			$post = [
				'username' => $username,
				'email' => $email,
				'password' => $pass,
				'admin' => $admin,
			];

			// регистрируем эти данные в БД
			$id = insert($table, $post);

			// запрашиваем из БД зарегистрированного юзера
			$user = selectOne($table, ['id' => $id]);

			userAuth($user);

			// $successMsg = '<b>' . $username . '</b>' . ' успешно зарегистрирован!';

		}
	}
} else {
	$username = '';
	$email = '';
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit-log'])) {
	$email = trim($_POST['email']);
	$pass = trim($_POST['pass']);

	if ($email === '' || $pass === '') {
		$errMsg = 'Не все поля заполнены!';
	} else {
		$existence = selectOne($table, ['email' => $email]);
		test($existence);

		if ($existence && password_verify($pass, $existence['password'])) {

			userAuth($existence);
		} else {
			$errMsg = 'Неверный логин или пароль!';
		}
	}
} else {
	$email = '';
}
