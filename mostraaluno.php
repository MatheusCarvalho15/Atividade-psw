<?php

SESSION_START

$_SESSION['nome'] = $_POST['nome'];
$_SESSION['cpf'] = $_POST['cpf'];
$_SESSION['email'] = $_POST['email'];
$_SESSION['turma'] = $_POST['turma'];
$_SESSION['mat'] = $_POST['mat'];


echo "Nome: $nome<br>";
echo "Cpf: $cpf<br>";
echo "email: $email<br>";
echo "turma: $turma<br>";
echo "materia: $mat<br>";


?>



<a href="editar.php"><div><button type="submit" class="btn">

<b>alterar</b></div></a>


</body>
</html>

