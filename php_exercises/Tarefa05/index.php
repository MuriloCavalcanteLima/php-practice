<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    body{
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 100vw;
            height: 100vh;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <div>
        <h1>
            Insira uma palavra para inverter suas letras:
        </h1>
    </div>
    <form action="exercicio5.php" method="POST">
        <input type="text" name="input" placeholder="insira uma palavra">
        <button type="submit">inverter caracteres</button>
    </form>
</body>
</html>