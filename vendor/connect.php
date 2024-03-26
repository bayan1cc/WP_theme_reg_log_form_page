<?php

    $connect = mysqli_connect('localhost', 'root', '', 'start');

    if (!$connect) {
        die('Error connect to DataBase');
    }