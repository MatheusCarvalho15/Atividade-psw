


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="able.css">
</head>
<body>
  

    <div class="container">
        <form action="mostraaluno.php" method="post">
        <label for="nome">NOME</label>
        <input type="text" name="nome" id="nome" value=<?php echo $_GET['nome']?> />
        <label for="cpf">CPF</label>
        <input type="text" name="cpf" id="cpf"/>
        <label for="email">EMAIL</label>
        <input type="text" name="email" id="email" />
        <label for="turma">TURMA</label>
        <input type="text" name="turma" id="turma" />
        <label for="materia">MATERIA</label>
        <input type="text" name="mat" id="materia"/>

        
   
 
       <button type="submit" class="btn">
       <b>Enviar</b>
       </button>
       </form>
    </div>




