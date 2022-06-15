<?php 

session_start();
$_GET;
$_POST;


$Json = '[
	{
		"dia": 1,
		"valor": 22174.1664
	},
	{
		"dia": 2,
		"valor": 24537.6698
	},
	{
		"dia": 3,
		"valor": 26139.6134
	},
	{
		"dia": 4,
		"valor": 0.0
	},
	{
		"dia": 5,
		"valor": 0.0
	},
	{
		"dia": 6,
		"valor": 26742.6612
	},
	{
		"dia": 7,
		"valor": 0.0
	},
	{
		"dia": 8,
		"valor": 42889.2258
	},
	{
		"dia": 9,
		"valor": 46251.174
	},
	{
		"dia": 10,
		"valor": 11191.4722
	},
	{
		"dia": 11,
		"valor": 0.0
	},
	{
		"dia": 12,
		"valor": 0.0
	},
	{
		"dia": 13,
		"valor": 3847.4823
	},
	{
		"dia": 14,
		"valor": 373.7838
	},
	{
		"dia": 15,
		"valor": 2659.7563
	},
	{
		"dia": 16,
		"valor": 48924.2448
	},
	{
		"dia": 17,
		"valor": 18419.2614
	},
	{
		"dia": 18,
		"valor": 0.0
	},
	{
		"dia": 19,
		"valor": 0.0
	},
	{
		"dia": 20,
		"valor": 35240.1826
	},
	{
		"dia": 21,
		"valor": 43829.1667
	},
	{
		"dia": 22,
		"valor": 18235.6852
	},
	{
		"dia": 23,
		"valor": 4355.0662
	},
	{
		"dia": 24,
		"valor": 13327.1025
	},
	{
		"dia": 25,
		"valor": 0.0
	},
	{
		"dia": 26,
		"valor": 0.0
	},
	{
		"dia": 27,
		"valor": 25681.8318
	},
	{
		"dia": 28,
		"valor": 1718.1221
	},
	{
		"dia": 29,
		"valor": 13220.495
	},
	{
		"dia": 30,
		"valor": 8414.61
	}
]';

$array = json_decode($Json, true);
//print_r($array);

    

    // O menor valor de faturamento ocorrido em um dia do mês;
	$tentativa = 0;
    foreach($array as $value){
        if($_POST['input'] == $value['dia']){
			$dia = strval($value['dia']);
            echo "Dia selecionado... ($dia) <br>";

            $valores[] = $value['valor'];
			
            $menor = min($valores);

            

            echo "O menor dos valores faturados no dia $dia é de $menor .";
            break;
        }
        
    }

function maiorMenor($array){
	foreach($array as $value){

    	$valores[] = $value['valor'];
	}	

	//print_r($valores);

	$menor = min($valores);
	echo "<br> O menor dos valores faturados no mês foi de $menor .";

	$maior = max($valores);
	echo "<br> O maior dos valores faturados no mês foi de $maior .";
	
			
}
maiorMenor($array);




//dias que excederam a média
$soma = 0;
$dias = 0;
function maioresMedia($array, $soma, $dias){

	foreach($array as $value){


		if($value['valor'] != 0){
			$soma = $soma + $value['valor'];
			$dias++;
			
		}
	}
	$media = $soma / $dias;

	echo "<br>A média mensal dos faturamentos é de $media.";
	$diasMaiores = 0;
	foreach($array as $value){

		if($value['valor'] > $media){
			$diasMaiores++;
		}

	}
	echo "<br> $diasMaiores dias excederam a média de $media.";
}

maioresMedia($array, $soma, $dias);
        
    
    




?>