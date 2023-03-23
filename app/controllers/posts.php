<?php
include ROOT . "/app/db/db.php";

$table = 'posts';
$errMsg = '';

// запрашиваем топики из бд
$topics = selectAll('topics');
$posts = selectAll($table);
$postsAdm = selectPostsWithUsers('posts', 'users');

// действия после нажатия submit кнопки
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['post_create'])) {
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
