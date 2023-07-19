<?php
date_default_timezone_set('America/Sao_Paulo');
    $pdo = new PDO('mysql:host=localhost;dbname=nome_do_projeto','root','senha');

    if(isset($_POST['acao'])){
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $momento_registro = date('Y-m-d H:m:s');
    $sql = $pdo->prepare("INSERT INTO `clientes` VALUES (null,?,?,?)");

    $sql->execute(array($nome,$sobrenome,$momento_registro));
        echo 'Cliente cadastrado com sucesso!';
    }
   
 /*Codigo para atualizar o cadastro do cliente

    $id =3;
    //OR funciona como "ou"
    //AND funciona como"e"

    $sql = $pdo->prepare("UPDATE `clientes` SET nome='joao',sobrenome='Pereira' WHERE nome='Mario'
    OR nome='Tiago'");
    if($sql->execute()){
        echo 'Meu cliente foi atualizado com sucesso!';
    }
    */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="/assets/imagens/favicon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Cadastro banco de dados</title>
</head>
<body>
  
<div class="container text-center">
  <div class="row">
    <div class="col">
    <div class="formulario">
        CADASTRO DE CLIENTES <br><br>
    <form method="post">
        Nome:
        <input type="text" name="nome" required/>

        Sobrenome:
        <input type="text" name="sobrenome" required/>
        <div type="button" class="btn btn-outline-primary ">
            Enviar!
        
        </div>
    </form>
    </div>
    </div>
    </div>
    <br><br><br>

    <div class="container text-center">
    <div class="row">
      <div class="col">
        <div class="relogio">
        <div>
            <span id="horas">00</span>
            <span class="tempo">Horas</span>
        </div>

        <div>
            <span id="minutos">00</span>
            <span class="tempo">Minutos</span>
        </div>

        <div>
            <span id="segundos">00</span>
            <span class="tempo">Segundos</span>
        </div>
         </div>
        </div>
        </div>
        </div>



    <script src="script/script.js"></script>
</body>
</html>