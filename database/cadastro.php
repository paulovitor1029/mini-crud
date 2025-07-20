<?php 
   
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $nome = trim($_POST['nome']);
        $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
        $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
        $cargo = $_POST['cargo'];

        if ($nome && $email) {
            try {
                $pdo = new PDO('sqlite:' .  __DIR__ . '/crud.sqlite');
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $query = "INSERT INTO usuarios (nome, email, senha, cargo) VALUES ('$nome', '$email', '$senha', '$cargo')";
                $pdo->exec($query);

                header('Location: ../dashboard.php');

            } catch (PDOException $e) {
                echo "Erro ao conectar ao banco de dados:" . $e->getMessage();
                exit;
            }
        } else {
            echo "Dados inválidos";
        }
    }
    $pdo = null;
?>