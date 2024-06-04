<?php
require 'config/database.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Application</title>
    <link rel="stylesheet" href="<?= ROOT_URL ?>css/style.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
</head>
<body>
    <nav>
    <div class="container nav_container">
        <a href="<?= ROOT_URL ?>" class="nav_log">Home</a>
        <ul class="nav_items">
        <li><a href="<?= ROOT_URL ?>blog.php">Blog</a></li>
        <li class="nav_profile">
            <div class="avatar">
                <img src ="./images/avatar1.jpg">
            </div>
                <ul>
                    <li><a href="<?= ROOT_URL ?>admin/index.php">Dashboard</a></li>
                    <li><a href="<?= ROOT_URL ?>logout.php">logout</a></li>
                </ul>   
        </li>
    </ul>
    </div>
    </nav>