<?php 
    
    $dbHoot = 'root';
    $dbPasword = '';
    $dbname = 'usuario_cliente';
    $dbhost = 'localhost';
    try{
        $pdo = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbHoot, $dbPasword);
    }
    catch(PDOException $e){
        echo $e->getMessage();
    }
?>