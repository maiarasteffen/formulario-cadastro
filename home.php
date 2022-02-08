<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SITE EXEMPLO</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(to right, rgb(54, 1, 12), rgb(209, 82, 82));
            text-align: center;
            color: white;
        }
        .container {
            padding: 100px;
            justify-content: center;
            align-items: center;
            flex-direction: row;
        }
        a{
            text-decoration: none;
            color: white;
            border: 3px solid #700404;
            border-radius: 10px;
            padding: 10px;
        }
        a:hover{
            background-color: #700404;
        }
    </style>
</head>
<body>
    <h1 class="text-center" style="font-size: 45px; padding: 10px;">FORMULÁRIO DE CADASTRO</h1></h1>
    <div class="container">
    <br>
    <br>
    <h2>Faça seu Login:</h2>
    <br>
    <div style="top: 50%; left: 50%; border-radius: 10px;">
        <a href="login.php">Login</a>
    </div>
    <br>
    <br>
    <br>
    <h2>Ou cadastre-se:</h2>
    <br>
    <div  style="top: 50%; left: 50%; border-radius: 10px;">
        <a href="formulario.php">Cadastre-se</a>
    </div>
    </div>

</body>
</html>