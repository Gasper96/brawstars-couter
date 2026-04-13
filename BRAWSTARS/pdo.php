<?php

try {
    $pdo = new PDO("mysql:host=localhost;dbname=brawstars;charset=utf8mb4","root",""); 
}catch (PDOException $e){
    echo "conexão mal sucedida!".$e->getMessage();
};
?>