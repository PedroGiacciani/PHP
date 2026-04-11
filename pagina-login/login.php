<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <section>
            <h1>Seja bem vindo!!</h1>
            <form action="valida.php" method="POST" autocomplete="on">
                <input type="email" name="email" id="iemail" placeholder="Digite seu e-mail de usuário" autocomplete="email"> <br>
                <input type="password" name="senha" id="isenha" placeholder="Digite sua senha" autocomplete="current-password"> <br>
                <input type="submit" value="Log in" id="enviar">
            </form>
            <div id="links">
                <p>Não possui uma conta? <a href="#">Cadastre aqui!</a></p>
                <a href="#">Esqueci minha senha</a>
            </div>
            <?php if(isset($_GET['erro'])):?>
                <p class="error-alert">Usuário ou senha incorretos !!</p>
            <?php endif;?>
        </section>
    </main>
</body>
</html>