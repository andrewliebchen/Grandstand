<?php require 'init.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>Grandstand for <?php echo $config['sprintly']['product_name'] ?></title>

  <meta name="viewport" content="width=device-width,initial-scale=1">

  <link href="stylesheets/css/application.css" rel="stylesheet" type="text/css"> 

  <script src="http://code.jquery.com/jquery-latest.js"></script>
  <script src="javascripts/vendor/jquery.isotope.min.js"></script>
  <script src="javascripts/vendor/dropdown.js"></script>
  <script src="javascripts/application.js"></script>
</head>

<body class="is-loading">
  <header>
    <h1><a href="/"><?php echo $config['sprintly']['product_name'] ?></a></h1>
    <div id="users" class="filters dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown">All users</a>
      <ul class="dropdown-menu" role="menu">
      </ul>
    </div>
    </div>
    <div id ="statuses" class="filters dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown">All statuses</a>
      <ul class="dropdown-menu" role="menu">
        <li role="menuitem"><a class="filter all active" data-filter=".item">All statuses</a></li>
        <li role="menuitem"><a class="filter" data-filter=".someday">Someday</a></li>
        <li role="menuitem"><a class="filter" data-filter=".backlog">Backlog</a></li>
        <li role="menuitem"><a class="filter" data-filter=".in-progress">Current</a></li>
      </ul>
    </div>
    <div id="types" class="filters dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown">All types</a>
      <ul class="dropdown-menu" role="menu">
        <li role="menuitem"><a class="filter all active" data-filter=".item">All types</a></li>
        <li role="menuitem"><a class="filter" data-filter=".story">Story</a></li>
        <li role="menuitem"><a class="filter" data-filter=".task">Task</a></li>
        <li role="menuitem"><a class="filter" data-filter=".defect">Defect</a></li>
      </ul>
    </div>
    <div id="scores" class="filters dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown">All scores</a>
      <ul class="dropdown-menu" role="menu">
        <li role="menuitem"><a class="filter all active" data-filter=".item">All scores</a></li>
        <li role="menuitem"><a class="filter" data-filter=".no-score">No score</a></li>
        <li role="menuitem"><a class="filter" data-filter=".S">Small</a></li>
        <li role="menuitem"><a class="filter" data-filter=".M">Medium</a></li>
        <li role="menuitem"><a class="filter" data-filter=".L">Large</a></li>
        <li role="menuitem"><a class="filter" data-filter=".XL">X-Large</a></li>
      </ul>
    </div>
    <a class="shuffle">&#8635; Shuffle</a>
  </header>
  <div id="mask">
    <div class="runner"></div>
  </div>
  <div id="items"></div>
</body>
</html>
