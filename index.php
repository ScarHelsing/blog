<?php

$dsn = 'mysql:host=localhost;dbname=blog';
$user = 'root';
$pass = 'neptune320';
$opt = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
];
$pdo = new PDO($dsn, $user, $pass, $opt) or die('Cannot connect to database');

$act = isset($_GET['act']) ? $_GET['act'] : 'list';

switch ($act):
    case 'list':
        $records = [];
        $sel = $pdo->query('SELECT * FROM entry');
        while ($row = $sel->fetch()) {
            $row['date'] = date('Y-m-d H:i:s', $row['date']);
            $records[] = $row;
        }
        require('templates/list.php');
        break;
    case 'view-entry':
        require ('templates/entry.php');
        break;
endswitch;


