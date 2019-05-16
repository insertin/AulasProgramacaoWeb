<?php

if (empty($_POST['nome'])or empty($_POST['senha'])
or empty($_POST['email'])
or empty($_POST['observacao'])){
    echo "<script>
    alert('Existem campos que são obrigatorio que não foram prenchidos, por gentileza clique em enviar. OBRIGADO! xD');";
    echo "javascript:window.location=
    'index.php';</script>";
}



$nome = $_POST['nome'];

$email = $_POST['email'];

$senha = $_POST['senha'];

$observacao = $_POST['observacao'];


if(strlen ($nome) >=10 ){
    echo $nome."<br>";
    echo strlen($nome)."<br>";
}else{
    echo "<script>
    alert('Nome Muito curto');";
    echo "javascript:window.location=
    'index.php';</script>";
}

echo $email."<br>";
echo $senha."<br>";
echo $observacao."<br>";
?>