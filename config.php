<?php
$dbhost = 'localhost';
$dbusername = 'root';
$dbpassword = '';
$dbname = 'formulario-antonio';

$cnn = new mysqli($dbhost,$dbusername,$dbpassword,$dbname);

// if($cnn -> connect_errno)
// {
//     echo "failed conection";
// }

// else{
//     echo "conection accept";
// }

// Pegando os dados do Fomulário
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$sexo = $_POST['genero'];
$data_nasc = $_POST['data_nascimento'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$endereco = $_POST['endereco'];
// preparando a consulta SQL
$sql = "INSERT INTO usuario (nome,email,telefone,sexo,data_nasc,cidade,estado,endereco) VALUES(?,?,?,?,?,?,?,?)";
$stmt = $cnn->prepare($sql);
$stmt->bind_param("ssssssss",$nome,$email,$telefone,$sexo,$data_nasc,$cidade,$estado, $endereco);

// execução do insert

if($stmt->execute()){ //só isso j executaria: $stmt->execute()
    echo "Registro criado com sucesso";
    }  
    else{
        echo "Erro: ".$sql."<br>".$conn ->error;
    }
?>