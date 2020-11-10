<?php


try {
    $con_string ="host=localhost port=5432 dbname=postgres user=postgres password=toor";
    $bdcon4 = pg_connect($con_string);

    $Nome = $_POST['nome'];
    $Telefone = $_POST['telefone'];
    $Nascimento = $_POST['nascimento'];
    $CEP = $_POST['cep'];
    $rua = $_POST['rua'];
    $bairro = $_POST['Bairro'];
    $cidade = $_POST['Cidade'];
    $uf = $_POST['uf'];
    $email = $_POST['email'];
    $refe = $_POST['refe'];







  		
     $result = pg_query($bdcon4, "INSERT INTO infor  VALUES ('$nome', '$Telefone','$Nascimento', '$CEP','$rua','$bairro','$cidade','$uf', '$email','$refe');");
 



  		echo "client cadastro sucesso ";
  	

  		

} catch (Exception $e) {
    echo $e;
    
}






?>
