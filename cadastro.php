
<?php


// Pegando os dados do Fomulário
//     $nome = $_POST['nome'];
//     $email = $_POST['email'];
//     $telefone = $_POST['telefone'];
//     $sexo = $_POST['genero'];
//     $data_nasc = $_POST['data_nascimento'];
//     $cidade = $_POST['cidade'];
//     $estado = $_POST['estado'];
//     $endereco = $_POST['endereco'];
// // preparando a consulta SQL
//     $sql = "INSERT INTO usuario (nome,email,telefone,sexo,data_nasc,cidade,estado,endereco) VALUES(?,?,?,?,?,?,?,?)";
//     $stmt = $cnn->prepare($sql);
//     $stmt->bind_param("ssssssss",$nome,$email,$telefone,$sexo,$data_nasc,$cidade,$estado, $endereco);

//     // execução do insert

//     if($stmt->execute()){ //só isso j executaria: $stmt->execute()
//         echo "Registro criado com sucesso";
//         }  
//         else{
//             echo "Erro: ".$sql."<br>".$conn ->error;
//         }
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cadastro.css">
    <title>CADASTRO | TY</title>
</head>
<body>
  <div class="box">
    <form action="config.php" method="POST">
        <fieldset>
            <legend><b>Formulário de Cadastro</b></legend>
        <br> 
         
        <div class="inputbox">
            <input type="text" name="nome" id="nome" class="inputUser" required>
            <label for="nome" class="labelInput">Nome Completo</label>
        </div>
        <br><br>
        <div class="inputbox">
            <input type="text" name="email" id="email" class="inputUser" required>
            <label for="email" class="labelInput">Email</label>
        </div>
        <br><br>
        <div class="inputbox">
            <input type="tell" name="telefone" id="telefone" class="inputUser" required>
            <label for="telefone" class="labelInput">Telefone</label>
        </div>
        <br><br>
        <p>Sexo:</p>
        <br>
        <input type="radio" id="feminino" name="genero" value="Feminino" required>
        <label for="feminino">Feminino</label>
            <br>
        <input type="radio" id="masculino" name="genero" value="masculino" required>
        <label for="masculino">Masculino</label>
        <br>
        <input type="radio" id="outro" name="genero" value="outro" required>
        <label for="outro">Outro</label>
        <br><br>
        <div class="inputbox">
            <label for="data_nascimento"><b>Data de Nascimento:</b></label>
            <input type="date" name="data_nascimento" id="data_nascimento" class="inputUser" required>
        </div>
        <br><br>
        <div class="inputbox">
            <input type="text" name="cidade" id="cidade" class="inputUser" required>
            <label for="cidade" class="labelInput">Cidade</label>
        </div>
        <br><br>
        <div class="inputbox">
            <input type="text" name="estado" id="estado" class="inputUser" required>
            <label for="estado" class="labelInput">Estado</label>
        </div>
        <br><br>
        <div class="inputbox">
            <input type="text" name="endereco" id="endereco" class="inputUser" required>
            <label for="endereco" class="labelInput">Endereço</label>
        </div>
        <br><br>
            <input type="submit" name="submit" id="submit">
        
    </fieldset>
    </form> 
</div>  
</body>
</html>