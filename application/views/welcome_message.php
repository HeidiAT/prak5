<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Hello, CodeIgniter</title>
</head>
<body>

<div id="container">
	<h1>Hello, CodeIgniter!</h1>
	<br>
	<h2>Ini program pertama saya yang dibuat dengan menggunakan PHP Framework CodeIgniter</h2>

			<h1>Links</h1>
			<a href="<?= base_url() ?>index.php/biodata">Tentang Saya</a> <br>
			<a href="<?= base_url() ?>index.php/tentangkharisma">Tentang KHARISMA</a> <br>
			<a href="<?= base_url() ?>index.php/web">Tentang Web</a> <br>
			<a href="<?= base_url() ?>index.php/resep">Lima Resep Kuliner</a>
</body>
</html>
