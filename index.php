<?php
$preco = 50;

if($preco >= 20){

       echo "Nao posso comprar!";
}else{
    echo 'Posso comprar!';     
}

$nota = 8.5;
echo "<br>";
if($nota >= 7){
    echo 'Aprovado';
}else if($nota >= 4){
    echo 'Recuperação';
}else{
    echo 'Reprovado';

    }
    echo "<br>";
    $contador = 0;


    while ($contador <= 10) {
        echo $contador++;
        echo "<br>";
    }

    for   ($i = 10; $i <=50; $i++){
        echo "<br>";  
        echo $i;
    }
            


?>