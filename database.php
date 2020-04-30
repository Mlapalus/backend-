<?php
    
    $HOST = '127.0.0.1';
    $DB_NAME = 'lingtonbeauty';
    $USER = 'root';
    $PASS = 'root';
    $PORT = '3306';

    echo $HOST;
    try {
        $db = new PDO("mysql:host=" . $HOST . ";dbname=" . $DB_NAME, $USER, "");
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo 'Connected';
    } catch(PDOException $e) {
        echo $e;
    }