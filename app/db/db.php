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

// test(selectAll('users', $params));
// test(selectOne('users'));
// test(insert('users', $arrData));
// test(update('users', 2, $arrData));
test(delete('users', 9));
