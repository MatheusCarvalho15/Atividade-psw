<?php

SESSION_START();

$_SESSION['nome'] = $_POST['nome'];
$_SESSION['cpf'] = $_POST['cpf'];
$_SESSION['email'] = $_POST['email'];
$_SESSION['turma'] = $_POST['turma'];
$_SESSION['materia'] = $_POST['materia'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl.css">
    <title>Document</title>
</head>

<body>

    <?php

    include "header.html";

    ?>


    <div class="container-principal">
            <div class="form-box">
               
                    <div class="linhas-forms">
                        <div class="input-group">
                            <label for="nome"> Nome Completo</label>
                            <p><?php echo $_SESSION['nome']; ?></p>
                        </div>
                        <div class="input-group">
                            <label for="turma"> Turma</label>
                            <p><?php echo $_SESSION['cpf']; ?></p>
                        </div>
                    </div>
                    <div class="linhas-forms">
                        <div class="input-group">
                            <label for="numero-matricula"> Matricula</label>
                            <p><?php echo $_SESSION['email']; ?></p>
                        </div>
                        <div class="input-group">
                            <label for="materia-preferida"> Materia preferida </label>
                            <p><?php echo $_SESSION['turma']; ?></p>
                        </div>
                        <div class="input-group">
                            <label for="cpf"> CPF </label>
                            <p><?php echo $_SESSION['materia']; ?></p>
                        </div>
                        <br>
                    
                    </div>
                </div>
                <div class="caixa_resutado">
                <button><a href="editar.php"> Editar dados </a> </p></button>

        
    <?php

    include "footer.html";

    ?>

</body>

</html>

