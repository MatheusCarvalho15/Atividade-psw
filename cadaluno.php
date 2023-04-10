
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <header>
        <div class="logo">
        <img src="images.png" alt="">

        </div>
        <div class="main">
        <h1>Cadastro do Aluno</h1>

        </div>

            <div class="pesquisa">
               <img src="procurar.png" alt="">
            </div>
            <div class="ferramentas">
                 <img src="menu-hamburguer.png" alt="">
            </div>

        </div>
        
    </header>

    <div class="container">
        <form action="mostraaluno.php" method="post">
        <label for="nome">NOME</label>
        <input type="text" name="nome" id="nome" />
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
  

    <footer>

    </footer>
</body>
</html>
