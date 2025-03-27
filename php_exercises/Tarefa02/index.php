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
    <title>Exercício 1</title>
</head>
<body>
    <div>
        <h1>Digite um valor numérico e descubra se ele faz parte da escala de Fibonacci.</h1> <br>
    </div>
    <div>
        <form action="exercicio1.php" method="POST">
            <input type="text" name="input" id="input">
            <input type="submit">
        </form>
    </div>

    <div class="resposta">
        <?php 
            if(isset($mesage))
            echo $mesage;
        ?>

    </div>

</body>
</html>