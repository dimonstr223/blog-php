<?php
include "app/db/db.php";

$table = 'users';

if (isset($_POST['login'])) {
	$user = $_POST['login'];
	$email = $_POST['email'];
	$pass = password_hash($_POST['pass-second'], PASSWORD_DEFAULT);
	$admin = 0;

	$post = [
		'username' => $user,
		'email' => $email,
		'password' => $pass,
		'admin' => $admin,
	];

	$id = insert($table, $post);

	$lastInsert = selectOne($table, ['id' => $id]);
	test($lastInsert);
}
