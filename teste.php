<?php


try {
    $con_string ="host=localhost port=5432 dbname=postgres user=postgres password=toor";
    $bdcon4 = pg_connect($con_string);

    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $nascimento = $_POST['nascimento'];
    $CEP = $_POST['cep'];
    $rua = $_POST['rua'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $uf = $_POST['uf'];
    $email = $_POST['email'];
    $re = $_POST['refe'];








     $result = pg_query($bdcon4,"INSERT INTO infor  VALUES ('$nome','$telefone','$nascimento', '$CEP','$rua','$bairro','$cidade','$email', '$uf','$re');");




  		echo "client cadastro sucesso ";




} catch (Exception $e) {
    echo $e;

}






?>
