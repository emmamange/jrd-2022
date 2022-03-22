<?php


if (isset($_GET['action'])) {
    if ($_GET['action']=='affiches') {
        require 'views/header.php';
        require 'views/affiches.php';
        require 'views/footer.php';
    } else {
        require 'views/header.php';
        require 'views/home.php';
        require 'views/footer.php';
    }
} else {
    require 'views/header.php';
    require 'views/home.php';
    require 'views/footer.php';
}
