<?php
require 'constants.php';

$connection = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);

IF(MYSQLI_ERROR($connection)){
    DIE(MYSQLI_ERROR($connection));
}