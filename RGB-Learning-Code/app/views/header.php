<!DOCTYPE html>
<html lang="de">
<head>
	<title><?php echo $title; ?></title>
	<meta charset="utf-8">

	<link rel="shortcut icon" href="<?php echo pics_url('favicon.ico'); ?>" type="image/png" />

	<link rel="stylesheet" href="<?php echo css_file('reset'); ?>" type="text/css">
	<link rel="stylesheet" href="<?php echo css_file('style'); ?>" type="text/css">
	<link rel="stylesheet" href="<?php echo css_file('helper'); ?>" type="text/css">
</head>
<body>
	<div id="wrapper">
		<header>
			<h1>Homepage AG - Lernen</h1>
		</header>
		<nav>
			<ul>
				<li><?php echo anchor(base_url(), 'Home'); ?></li>
				<li><?php echo anchor(base_url('HTML_CSS'), 'HTML & CSS'); ?></li>
				<li><?php echo anchor(base_url('PHP'), 'PHP'); ?></li>
				<li><?php echo anchor(base_url('PHP_OOP'), 'PHP OOP'); ?></li>
				<li><?php echo anchor(base_url('codeigniter'), 'Codeigniter'); ?></li>
				<li><?php echo anchor(base_url('exercises'), 'Übungen'); ?></li>
				<li><?php echo anchor('https://github.com/Train132/RGB-Learning', 'Alle Beispiele'); ?></li>
			</ul>
		</nav>
		<section id="main_section">
