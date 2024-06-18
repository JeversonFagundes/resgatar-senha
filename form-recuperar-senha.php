<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>recuperar senha</title>

</head>

<body>

<h1>Recuperar senha</h1>

<p>Digite o seu email para que você possa criar uma nova senha</p>
<p>Será enviado um email com um link de recuperação que você usará para criar uma nova senha.    </p>

<form action="recuperar.php" method="post">

<label for="email">Email:</label>
<input type="email" name="email" id="email"><br><br>

<input type="submit" value="Enviar email de verifcação">
</form>
    
</body>

</html>