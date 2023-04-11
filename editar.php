
<?php

session_start();

$nome = $_SESSION['nome'];
$cpf = $_SESSION['cpf']; 
$email = $_SESSION['email']; 
$turma = $_SESSION['turma']; 
$materia = $_SESSION['materia']; 

?>

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
        <input type="text" name="nome" id="nome" value=<?php echo $_SESSION['nome']?> />
        <label for="cpf">CPF</label>
        <input type="text" name="cpf" id="cpf" value=<?php echo $_SESSION['cpf']?>/>
        <label for="email">EMAIL</label>
        <input type="text" name="email" id="email" value=<?php echo $_SESSION['email']?> />
        <label for="turma">TURMA</label>
        <input type="text" name="turma" id="turma" value=<?php echo $_SESSION['turma']?> />
        <label for="materia">MATERIA</label>
        <input type="text" name="materia" id="materia" value=<?php echo $_SESSION['materia']?>/>

        
   
 
       <button type="submit" class="btn">
       <b>Enviar</b>
       </button>
       </form>
    </div>




