<?php

require 'path.php';

session_start();

unset($_SESSION['id']);
unset($_SESSION['username']);
unset($_SESSION['admin']);

header('location: ' . BASE_URL);
