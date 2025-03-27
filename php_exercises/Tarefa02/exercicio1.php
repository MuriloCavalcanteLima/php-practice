<?php 

session_start();
$_GET;
$_POST;


//ECHO Strval($_POST['input']);

//Sequência de Fibonacci
$valor = $_POST['input'];

$numeros = [0 => 0, 1 => 1];

$indice = 0;
function contadorFibonacci($valor, $indice, $numeros){
    echo "processo iniciado <br>";
    while($indice < $valor){
            echo "processo rodando <br>";
            //selecionar valor do ultimo indice
            $ultimo = $numeros[ count($numeros) - 1 ];
        
            //selecionar valor do penultimo indice
            $penultimo = $numeros[ count($numeros) - 2 ];
            // somar e acrescentar o valor somado
            $novo = $ultimo + $penultimo;
        
            $numeros[] = $novo;

            //registrar loop
            $indice++;

            //checar se o valor está na sequência (se a qtd de numeros gerados for maior que o input e o vvalor não estiver no array):
            if( in_array($valor , $numeros)){
               echo $mesage = 'O valor está na sequência de Fibonacci';
               if(true){
                break;
               }
            } else{
                echo $mesage = 'O valor não está na sequência de Fibonacci.';
                if(true){
                    break;
                   }
            };
            
    }      
    
}

contadorFibonacci($valor, $indice, $numeros);

?>