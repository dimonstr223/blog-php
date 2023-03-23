<?php
include ROOT . "/app/db/db.php";

if (!$_SESSION) {
	header('location: ' . BASE_URL . 'login.php');
}

$table = 'posts';
$errMsg = '';

// запрашиваем топики из бд
$topics = selectAll('topics');
$posts = selectAll($table);
$postsAdm = selectPostsWithUsers('posts', 'users');

// действия после нажатия submit кнопки
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['post_create'])) {
	// test($_FILES);

	if (!empty($_FILES['img']['name'])) {
		$imgName = time() . '_' . $_FILES['img']['name'];
		$tempFileName = $_FILES['img']['tmp_name'];
		$dest = "D:\projects\blog-php\assets\images\posts\\" . $imgName;
		$imgType = $_FILES['img']['type'];

		if (strpos($imgType, 'image') === false) {
			die('Файл не является картинкой');
		}

		$result = move_uploaded_file($tempFileName, $dest);

		if ($result) {
			$_POST['img'] = $imgName;
		} else {
			$errMsg = 'Ошибка загрузки изображения';
		}
	} else {
		$errMsg = 'Ошибка получения изображения';
	}

	$title = trim($_POST['title']);
	$content = trim($_POST['content']);
	$img = trim($_POST['img']);
	$topic = trim($_POST['topic']);
	$status = $_POST['status'] ?  1 : 0;

	if ($title === '' || $content === '') {
		$errMsg = 'Не все поля заполнены!';
	} elseif (mb_strlen($title) < 2) {
		$errMsg = 'Длина заголовка не менее 2 символов';
	} else {
		$post = [
			'id_user' => $_SESSION['id'],
			'title' => $title,
			'img' => $img,
			'content' => $content,
			'id_topic' => $topic,
			'status' => $status,
		];

		$item = insert($table, $post);
		header('location: ' . BASE_URL . 'admin/posts');
	}

	// test($_POST);
} else {
	$title = '';
	$content = '';
}
