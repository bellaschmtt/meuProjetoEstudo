<?php
    include "../include/functions.php";
    include "../include/MySql.php";

    //variaveis
    $email = $nome  = $senha = $terms = "";
    $emailErr = $nomeErr = $senhaErr = $termsErr = $msgErr = "";

    if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['cadastro'])){
        if (empty($_POST['nome'])){
            $nomeErr = "Nome é obrigatório!";
        } else {
            $nome = test_input($_POST["nome"]);
        }
	    if (empty($_POST['email'])){
            $emailErr = "Email é obrigatório!";
        } else {
            $email = test_input($_POST["email"]);
        }
	    if (empty($_POST['senha'])){
            $senhaErr = "Senha é obrigatório!";
        } else {
            $senha = test_input($_POST["senha"]);
        }
        if (empty($_POST['terms'])){
            $termsErr = false;
        } else {
            $terms = true;
        }
        //verificar se existe um usuario
        if ($email && $nome && $senha){
            $sql = $pdo->prepare("SELECT * FROM cadastro WHERE email = ?");
            if ($sql->execute(array($email))){
                if ($sql->rowCount() > 0){
                    $msgErr = "Usuário já cadastrado!";
                }else{
                    $sql = $pdo->prepare("INSERT INTO CADASTRO (codigoUser, nome, email, senha, terms)
                                          values (null, ?,?,?,?)");
                    if ($sql->execute(array($nome, $email, md5($senha), $terms))){
                        $msgErr = "Dados cadastrados com sucesso!";
                        header('location: login.php');
                    }else{
                        $msgErr = "Dados não cadastrados!";
                    }                     
                }
            }else{
                $msgErr = "Erro no comando SELECT";
            }
        }else{
            $msgErr = "Dados não cadastrados!";
        }
    }
?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>

    <!-- FAVICON -->
    <link rel="shortcut icon" href="#" type="image/x-icon">

    <!-- CSS -->
    <link rel="stylesheet" href="../css/styleFormulario.css"> 
    <!-- <link rel="stylesheet" href="../CSS/styleHeader.css">
    <link rel="stylesheet" href="CSS/styleFooter.css"> -->

    <!-- FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- font-family: 'Mulish', sans-serif; -->
</head>

<body>
    <div class="container">
        <form method="POST" action="" class="form">
            <h1>Cadastro</h1>

            <label for="email">Nome Completo:</label>
            <br>
            <input type="text" name="nome" value="<?php echo $nome?>">
            <span class="obrigatorio">* <?php echo $nomeErr ?></span>
            <br>

            <label for="senha">Email:</label>
            <br>
            <input type="text" name="email" value="<?php echo $email?>">
            <span class="obrigatorio">* <?php echo $emailErr ?></span>
            <br>
            
            <label for="senha">Senha:</label>
            <br>
            <input type="password" name="senha" value="<?php echo $senha?>">
            <span class="obrigatorio">* <?php echo $senhaErr ?></span>
            <br>
            <br>
            <label for="terms">Terms:</label>
            <input class="terms" type="checkbox" name="administrador">
            <br><br>
            <input class="botao" type="submit" value="Salvar" name="cadastro">
            <span class="obrigatorio"><?php echo $msgErr ?></span>
            <p>Já uma conta?<a href="login.php">Entre aqui</a></p>
        </form>
    </div>
   
</body>
</html>
