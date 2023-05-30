<?php

    function connectToDB() {
    $host = 'devkinsta_db';
    $dbname = 'feedback_form';

    $dbuser = 'root';
    $dbpassword = 'WaoDc0cvoNR1eUiM';
    $database = new PDO (
        "mysql:host=$host;dbname=$dbname",
        $dbuser,
        $dbpassword
    );
    return $database;
}