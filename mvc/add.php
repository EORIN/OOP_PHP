<?php

require 'DatabaseModel.php';

$dbi = new DatabaseModel();
$dbi->add($_POST['username'], $_POST['email'], $_POST['password']);