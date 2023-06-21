<html>
<head>
    <title>Página de Logout</title>
</head>
<body>
    <h1>Página de Logout</h1>

    

    <p>Logout realizado com sucesso!</p>
    <p>Clique no botão abaixo para retornar à página de login.</p>

<form method="post" action="login.php">
<input type="submit" value="Voltar ao Login">
</form>
</body>
</html>


<?php
    // Iniciar ou retomar a sessão
    session_start();

    // Destruir todas as variáveis de sessão
    session_destroy();

    // Redirecionar para a página de login
    header('Location: login.php');
    exit;
    ?>
