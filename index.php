<?php 
    
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1 id="title">CRUD Teste</h1>

    <div id="form-container">
        <h2 style="text-align: center; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; margin: 0 0 20px 0; padding-top: 0;">
        Cadastro
        </h2>
        <form id="formCad" action="/database/cadastro.php" method="post" onsubmit="return validarCargo()">
            <input type="text" name="nome" placeholder="Digite seu nome" required>
            <input type="email" name="e-mail" placeholder="Digite seu E-mail" required>
            <input type="password" name="senha" placeholder="Crie uma senha forte" required>

            <select name="cargo" id="cargo" required>
                <option value="" selected>Selecione</option>
                <option value="func">Funcionário</option>
                <option value="cli">Cliente</option>
                <option value="emp">Empresa</option>
            </select>
            <button type="submit">Cadastrar</button>
        </form>
    </div>

    <script>
        function validarCargo() {
            const select = document.getElementById('cargo');
            if (select.value === "") {
                alert('Por favor, slecione uma opção válida');
                select.focus();
                return false;
            }
            return true;
        }
    </script>
</body>
</html>