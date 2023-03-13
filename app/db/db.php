<?php

require('connect.php ');


function test($value)
{
	echo '<pre>';
	print_r($value);
	echo '</pre>';
}

// ПРОВЕРКА ВЫПОЛНЕНИЯ ЗАПРОСА К БД
function errorCheck($query)
{
	$errInfo = $query->errorInfo();

	if ($errInfo[0] !== PDO::ERR_NONE) {
		echo $errInfo[2];
		exit();
	}
}

// ЗАПРОС НА ПОЛУЧЕНИЕ ДАННЫХ ОДНОЙ ТАБЛИЦЫ
function selectAll($table, $params = [])
{
	global $pdo;

	$sql = "SELECT * FROM $table";

	if (!empty($params)) {
		$i = 0;
		foreach ($params as $key => $value) {
			if (!is_numeric($value)) {
				$value = "'" . $value . "'";
			}

			if ($i === 0) {
				$sql = $sql . " WHERE $key=$value";
			} else {
				$sql = $sql . " AND $key=$value";
			}

			$i++;
		}
	}
	// test($sql);
	// exit();

	$query = $pdo->prepare($sql);
	$query->execute();

	errorCheck($query);

	return $query->fetchAll();
}

// ПОЛУЧЕНИЕ ОДНОГО ЭЛЕМЕНТА ТАБЛИЦЫ
function selectOne($table, $params = [])
{
	global $pdo;

	$sql = "SELECT * FROM $table";

	if (!empty($params)) {
		$i = 0;
		foreach ($params as $key => $value) {
			if (!is_numeric($value)) {
				$value = "'" . $value . "'";
			}

			if ($i === 0) {
				$sql = $sql . " WHERE $key=$value";
			} else {
				$sql = $sql . " AND $key=$value";
			}

			$i++;
		}
	}
	// $sql = $sql . ' LIMIT 1';

	$query = $pdo->prepare($sql);
	$query->execute();

	errorCheck($query);

	return $query->fetch();
}

$params = [
	'admin' => 1,
	'username' => 'user1'
];

// ЗАПИСЬ ДАННЫХ В ТАБЛИЦУ
function insert($table, $params)
{
	global $pdo;

	$i = 0;
	$column = '';
	$mask = '';

	foreach ($params as $key => $value) {
		if ($i === 0) {
			$column = $column . $key;
			$mask = $mask . "'" . $value . "'";
		} else {
			$column = $column . ", $key";
			$mask = $mask . ", '$value'";
		}
		$i++;
	}

	$sql = "INSERT INTO $table ($column) VALUES ($mask)";

	// test($sql);
	// exit();
	$query = $pdo->prepare($sql);
	$query->execute($params);

	errorCheck($query);
}

$arrData = [
	'admin' => '0',
	'username' => 'user8',
	'email' => 'test8@mail.com',
	'password' => '12345'
];

// test(selectAll('users', $params));
// test(selectOne('users'));
test(insert('users', $arrData));
