<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?= \App\App::getInstance()->title; ?></title>
    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= URI ?>css/main.css" rel="stylesheet">
    <?php
    $styles = isset($styles) ? $styles : [];
    foreach ($styles as $s): ?>
        <link rel="stylesheet" href="<?=$s?>">
    <?php endforeach; ?>
</head>

<body>

<nav class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="/blog/public">Project name</a>
        </div>
    </div>
</nav>