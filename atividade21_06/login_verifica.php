<?php
session_start();

if (!isset($_SESSION['usuario']) || !isset($_SESSION['senha'])) {
    header('Location: pagina.php');
    exit;
}
?>

<html>
<head>
    <title>Website PHP - Sessão</title>
    <link rel="stylesheet" type="text/css" href="estilos_login.css">
</head>
<body>
    <h1>Dados Salvos na Sessão</h1>
    <p><strong>Usuário:</strong> <?php echo $_SESSION['usuario']; ?></p>
    <p><strong>Senha:</strong> <?php echo $_SESSION['senha']; ?></p>
    <a href="logout.php" class="button">Sair</a>
</body>
</html>