<?php

if (isset($_GET['url'])) {
	$url = rtrim($_GET['url'], '/');
	$url = explode('/', $url);
	$file = $url[0] . '.php';
} else {
	$file = 'default' . '.php';
};

if (file_exists($file)) {
	require_once $file;
} else {
	require_once 'default.php';
}

?>