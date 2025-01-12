<?php


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/engrenagem.png" type="image/x-icon">
    <link rel="stylesheet" href="style/style.css" media="all">
    <link rel="stylesheet" href="style/portrait.css" media="screen and (orientation: portrait)">
   
    <title>Entrar ou inscrever-se</title>
    <script src="scripts/scriptProgrammerLogin.js" defer></script>
</head>
<body>
       
    <header id="nav">
        <img src="images/Settings.png" alt="">
        <nav >
            <a href="index.html" class="nav">Home</a>
           

            <a href="Orçamento.html" class="nav">Faça um orçamento</a>
            <a href="loginer.html" class="nav" id="conosco">Entrar</a>
        </nav>
        <a href="bur.html" id="burguinho"><img src="images/cardapio.png" alt="" ></a>
    </header>
    <main>
        <section class="transt">
            <div id="vid">
                <h2>Faça seu Login ou se Inscreva</h2>
                <h1 class="title">
                    Se Inscreva na Settings
                </h1>
                <p class="cll">Caso Já tenha uma conta clique no link abaixo.</p>
                <p><a href="loginnovacontaprogramador.html" class="acountconditionals">Já tenho uma conta</a></p>
            </div>
        
        <div class="login" id="loginc">
           <form action="newaccount.php" method="POST" autocomplete="on">
           
            <div>
                <label for="name">Nome:</label>
                <input type="text" name="Name" id="name" required maxlength="100" size="50" placeholder="Nome">
            </div>
            <div><label for="useremail">
                Email:
                </label>
                <input type="email" name="useremail" id="useremail" required maxlength="100" size="50" placeholder="Email">
            </div>
            <div>
                <label for="pin">
                    Senha:
                </label>
                <div class="eye" id="eyere"><img src="images/olho.png" alt="" class="eye" id="Everelson"></div>
                <input type="password" name="pin" id="pinc"required maxlength="20" minlength="8" size="50" placeholder="Senha">
                <label for="" id="Error"></label>
            </div>

            <div>
                <a href="newaccount.html"><input type="submit" id="submit" value="Increver-se"></a>
            </div>
           </form>
           
        </div>
    </section>
</main>
</body>
</html>