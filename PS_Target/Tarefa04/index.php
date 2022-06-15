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
            text-align:center;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <?php

    //Dados
        $nome_regioes= array('SP', 'RJ', 'MG', 'ES' , 'Outros');
        $regioes = array();
        $regioes['sp'] = 67836.43  ;
        $regioes['rj'] = 36678.66  ;
        $regioes['MG'] =  29229.88;
        $regioes['es'] = 27165.48 ;
        $regioes['outros'] = 19849.53  ;

        // calcule o percentual de representação que cada estado teve dentro do valor total mensal da distribuidora

            //Calculando total:
                
            $soma = 0;

            foreach($regioes as $value){
                $soma = $soma+$value;
            }
            echo " O valor total mensal da distribuidora é de  $soma <br>";
            

            //calculando %;
            $i = 0;
            foreach($regioes as $value){
                $porcentagem = intval($value / $soma * 100);
                
                
                echo "<br> O valor percentual de $nome_regioes[$i] em relação a soma total mensal é  aproximadamente: $porcentagem%";
                $i++;
            }
            
    ?>
</body>
</html>