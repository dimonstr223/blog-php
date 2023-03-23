<?php

require('connect.php');
include ROOT . "/path.php";


// метод запускат сессию
session_start();

function test($value)
{
	echo '<pre>';
	print_r($value);
	echo '</pre>';

	exit();
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

	return $pdo->lastInsertId();
}

// ОБНОВЛЕНИЕ ДАННЫХ В ТАБЛИЦЕ
function update($table, $id, $params)
{
	global $pdo;

	$i = 0;
	$str = '';

	foreach ($params as $key => $value) {
		if ($i === 0) {
			$str = $str . $key . " = '" . $value . "'";
		} else {
			$str = $str . ', ' . $key . " = '" . $value . "'";
		}
		$i++;
	}

	$sql = "UPDATE $table SET $str WHERE id = $id";

	$query = $pdo->prepare($sql);
	$query->execute($params);

	errorCheck($query);
}

// УДАЛЕНИЕ ДАННЫХ ИЗ ТАБЛИЦЫ
function delete($table, $id)
{
	global $pdo;

	$sql = "DELETE FROM $table WHERE id = $id";

	$query = $pdo->prepare($sql);
	$query->execute();
}

// JOIN ТАБЛИЦ В MYSQL
function selectPostsWithUsers($table1, $table2)
{
	global $pdo;
	$sql = "
		SELECT
		t1.id,
		t1.title,
		t1.img,
		t1.content,
		t1.status,
		t1.id_topic,
		t1.created_date,
		t2.username
		FROM $table1 AS t1 JOIN $table2 AS t2 ON t1.id_user = t2.id
	";
	$query = $pdo->prepare($sql);
	$query->execute();
	errorCheck($query);
	return $query->fetchAll();
}
