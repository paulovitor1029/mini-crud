<?php 
    
    try {
        $pdo = new PDO('sqlite:db/crud.sqlite');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Erro ao conectar ao banco de dados:" . $e->getMessage();
        exit;
    }

?>