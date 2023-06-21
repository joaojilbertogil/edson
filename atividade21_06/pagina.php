<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login de Acesso</title>
    <link rel="stylesheet" href="estilos_login.css">
</head>
<body bgcolor="#87CEFA">
    <div class="container">
        <h3>Login do Banco</h3>
        
        <form name="login" method="post" action="login_verifica.php">
            <div class="form_grupo">
                <label for="usuario">Usuário</label>
                <input type="text" name="usuario" maxlength="30" required>
            </div>
            <div class="form_grupo">
                <label for="senha">Senha:</label>
                <input type="password" name="senha" maxlength="20" required>

            </div>
             <input type="submit" name="acessar" value="Acessar" >
        </form>
         <p aling="center"><a href="criar_conta.php">Criar Conta</a></p>
         <p><a href="logout.php">Sair</a></p>
    </div>

   
   


    <?php 
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    
        $usuario = $_POST["usuario"];
        $senha = $_POST["senha"];

        echo "<h2>Seu Úsuario é: $usuario</h2>"; 
        echo "<h2>Sua Senha é: $senha</h2>"; 
        
    }
    
    ?>
    
</body>
</html>