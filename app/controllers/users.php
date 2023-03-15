<?php
include "app/db/db.php";

$errMsg = '';
$successMsg = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$table = 'users';

	$user = trim($_POST['login']);
	$email = trim($_POST['email']);
	$admin = 0;
	$passF = trim($_POST['pass-first']);
	$passS = trim($_POST['pass-second']);

	if ($user === '' || $email === '' || $passF === '' || $passS === '') {
		$errMsg = 'Не все поля заполнены!';
	} elseif (mb_strlen($user) <= 2) {
		$errMsg	= 'Логин должен быть больше 2 символов!';
	} elseif ($passF !== $passS) {
		$errMsg	= 'Пароли не совпадают!';
	} else {
		$emailExist = selectOne($table, ['email' => $email]);

		if ($emailExist) {
			$errMsg = 'Эта почта уже используется!';
		} else {
			$pass = password_hash($passS, PASSWORD_DEFAULT);

			$post = [
				'username' => $user,
				'email' => $email,
				'password' => $pass,
				'admin' => $admin,
			];

			$id = insert($table, $post);

			$lastInsert = selectOne($table, ['id' => $id]);

			$successMsg = '<b>' . $user . '</b>' . ' успешно зарегистрирован!';
		}
	}
} else {
	$user = '';
	$email = '';
}
