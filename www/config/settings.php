<?php

function getSettings()
{
    $settings = [
        'host' => 'localhost',
        //'port' => '3306',
        'name' => 'tp2',
        'username' => 'root',
        'password' => '',
        'charset' => 'utf8'
    ];
    try {
        $pdo = new PDO(
            sprintf(
                'mysql:host=%s;dbname=%s;charset=%s',
                $settings['host'],
                $settings['name'],
                $settings['charset']
            ),
            $settings['username'],
            $settings['password']
        );
    } catch (PDOException $e) {
        echo "Échec de connexion.";
        exit;
    }
}

?>