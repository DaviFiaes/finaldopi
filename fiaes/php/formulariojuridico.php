<?php

if(isset($_POST["submit"]))
{
  // print_r("Nome" . $_POST["nome"]);
  // print ("<br>");
  // print_r("Email" . $_POST["email"]);
  // print ("<br>");
  // print_r("Telefone:" . $_POST["telefone"]);
  // print_r("<br>")
  // print_r("sexo:" . $_POST["genero"]);
  // print_r("<br>")
  // print_r("Data de Nascimento:" . $_POST["data_nascimento"]);
  // print_r("<br>")
  // print_r("Estado:" . $_POST["estado"]);
  // print_r("<br>")
  // print_r("Cidade:" . $_POST["cidade"]);
  // print_r("<br>")
  // print_r("Sangue:" . $_POST["sangue"]);

  include_once("config.php");

  $nome = $_POST["nome"];
  $cnpj = $_POST["cnpj"];
  $senha = $_POST["senha"];
  
$result = mysqli_query($conexao, "INSERT INTO cad_pj(nome,cnpj,senha)
VALUES ('$nome','$cpnj','$senha')");

header("Location: formulariojuridico.php");

$resultado = $conexao->query($result);
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro Juridico</title>
</head>


<style>
  body {
    font-family: Arial, Helvetica, sans-serif;
   background: white;
  }

  .box {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: rgba(206, 107, 107);
    padding: 15px;
    border-radius: 15px;
    width: 450px;
    color: white;
  }

  fieldset {
    border: 3px solid whitesmoke;
    border-radius: 10px;
  }

  legend {
    border: 1px solid white;
    padding: 10px;
    text-align: center;
    color: rgb(206, 107, 107) ;
    border-radius: 8px;
    color: white;
  }

  .inputBox {
    position: relative;
  }

  .inputUser {
    background: none;
    border: none;
    border-bottom: 1px solid white;
    color: white;
    font-size: 15px;
    width: 100%;
    letter-spacing: 2px;
  }

  .labelInput {
    position: absolute;
    top: 0;
    left: 0;
    pointer-events: none;
    transition: .5s;
  }

  .inputUser:focus~.labelInput,
  .inputUser:valid~.labelInput {
    top: -20px;
    font-size: 12px;
    color: white;
  }

  #data_nascimento {
    border: none;
    padding: 8px;
    border-radius: 10px;
    outline: none;
  }

  #submit {
    background:white;
    width: 100%;
    padding: 15px;
    color: rgb(206, 107, 107);
    font-size: 15px;
    cursor: pointer;
    border-radius: 10px;
  }

  #submit:hover {
    background: rgb(206, 107, 107);
    color: white;
    transition: 0.5s;
  }


  .bolinha {
    display: block;
    align-items: center;
    justify-content: space-between;
  }

    .voltar{
  text-decoration: none;
  color: whitesmoke;
  display: inline-block;
  background-color: rgba(206, 107, 107);
  padding: 10px 5px;
  border-radius: 3px;
    

  }
</style>


<body>
  <a class="voltar" href="../gotasdevida.php">Voltar</a>
  <div class="box">
    <form action="formulario.php" method="POST">
      <fieldset>
        <legend>
          <p>Cadastro</p>
        </legend>
        <br>
        <div class="inputBox">
          <input type="text" name="nome" id="nome" class="inputUser" required>
          <label for="nome" class="labelInput">Nome Completo</label>
        </div>
        <br><br>

        <div class="inputBox">
          <input type="text" name="email" id="email" class="inputUser" required>
          <label for="email" class="labelInput">Email</label>
        </div>
        <br><br>
        <div class="inputBox">
          <input type="text" name="cnpj" id="cnpj" class="inputUser">
          <label for="cnpj" class="labelInput">CNPJ</label>
        </div>
        <br><br>
        <!-- SANGUE -->
        <p>Tipo Sanguíneo</p>
        <br>
        <input type="submit" name="submit" id="submit">


    <?php
       if(!empty($resultado)){
         echo "Seus dados foram salvos com sucesso!";
      }
    ?>


      </fieldset>
    </form>
  </div>

</body>

</html>