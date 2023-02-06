<?php

function getSettings()
{
    $settings = [
        'host' => 'localhost',
        'port' => '8889',
        'name' => 'tp2',
        'username' => 'user',
        'password' => 'secret',
        'charset' => 'utf8'
    ];
    try {
        $pdo = new PDO(
            sprintf(
                'mysql:host=%s;dbport=%s;dbname=%s;charset=%s',
                $settings['host'],
                $settings['port'],
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