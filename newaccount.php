<?php 
    require('php/config.php');
    if(isset($_POST)){
        $nome = $_POST['Name'];
        $pin = $_POST['pin'];
        $email = $_POST['useremail'];
        $query = "INSERT INTO user (Nome, Pin, Email) VALUES ('$nome', '$pin', '$email')";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/engrenagem.png" type="image/x-icon">
    <link rel="stylesheet" href="style/style.css" media="all">
    <link rel="stylesheet" href="style/portrait.css" media="screen and (orientation: portrait)">
   
    <title>Conta Criada</title>
</head>
<body>
    <header>
        <img src="images/Settings.png" alt="">
        <nav>
            <a href="index.html" class="nav">Home</a>
           
            <a href="Orçamento.html" class="nav">Faça um orçamento</a>
            <a href="loginer.html" class="nav" id="conosco">Entrar</a>
        </nav>
        <a href="bur.html" id="burguinho"><img src="images/cardapio.png" alt="" ></a>
    </header>
    <main>
        <section>
            <h2>Registrada</h2>
            <h1 class="title">Nova conta criada.</h1>
            <p class="KWON"></p>
            <a href="entreEmContato.html" class="CHUTED">Proximo</a>
        </section>
    </main>
</body>
</html>