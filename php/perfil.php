<?php

    session_start();

    ob_start();

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="imagens/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Perfil</title>
</head>

<body>
<style>
    html, body {
    width: 100%;
    height: 100%;
    margin: 0px;
    padding: 0;
}
.box {
    display: flex;
    width: 100px;
    height: 100px;
    position: relative;
}
.avatar::after {
    opacity: 0;
    font-family: FontAwesome;
    content: "\f040";
    color: #fff;
    font-size: 2.5rem;
    position: absolute;
    display: flex;
    justify-content: center;
    align-items: center;
    top: 4px;
    left: 4px;
    width: 92px;
    height: 92px;
    z-index: 2;
    background-color: rgba(0,0,0,0.5);
    border-radius: 50%;
    cursor: pointer;
    transition: 350ms ease-in-out;
}
.avatar:hover::after {
    opacity: 1;
}

.avatar {
    box-sizing: border-box;
    border: 4px solid silver;
    border-radius: 50%;
    overflow: hidden;
}

.menu {
    position: absolute;
    opacity: 0;
    width: 100px;
    height: auto;
    background-color: #fff;
    box-shadow: 0 0 10px 0 rgba(0,0,0,0.5);
    box-sizing: border-box;
    padding: 0.5rem;
    border-radius: 0.5rem;
    top: 60%;
    left: 60%;
    z-index: -1;
    transition: 350ms ease-in-out;
}
.box input {
    display: none;
}
.box input:checked + div.menu {
    opacity: 1;
    z-index: 999;
}
</style>
<link rel="stylesheet" type="text/css" media="screen" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

<div class="box">
    <label class="avatar" for="btn">
        <img src="http://placecage.com/100/100" alt="">
    </label>
    <input type="checkbox" id="btn">
    <div class="menu">
        <a href="#"><i class="fa fa-upload"> <span>upload</span></i></a>
        <br>
        <a href="#"><i class="fa fa-edit"> <span>edite</span></i></a>
    </div>
</div>
    <div class="container">

        <?php

        if (isset($_SESSION['id']) and (isset($_SESSION['username']))) {
            echo "Bem vindo " . $_SESSION['username'] . "<br>";
            echo "<a href='../paginainicial.php'>Sair</a><br>";

            echo "<h1>Perfil</h1>";

            include_once "conexao.php";

            $query_usuario = "SELECT id, username FROM users WHERE id=:id LIMIT 1";
            $result_usuario = $conn->prepare($query_usuario);
            $result_usuario->bindParam(':id', $_SESSION['id'], PDO::PARAM_INT);
            $result_usuario->execute();

            if (($result_usuario) and ($result_usuario->rowCount() != 0)) {
                $row_usuario = $result_usuario->fetch(PDO::FETCH_ASSOC);
                //var_dump($row_usuario);
                extract($row_usuario);

                echo "<dl class='row'>";
                echo "<dt class='col-sm-3'>ID:</dt><dd class='col-sm-9'> $id </dd>";
                echo "<dt class='col-sm-3'>Nome:</dt><dd class='col-sm-9'> $username </dd>";
                echo "</dl>";
            } else {
                $_SESSION['msg'] = "<div class='alert alert-danger' role='alert'>Erro: Necessário realizar o login para acessar a página 1!</div>";
                header("Location: ../pagianinicial.php");
            }
        } else {
            $_SESSION['msg'] = "<div class='alert alert-danger' role='alert'>Erro: Necessário realizar o login para acessar a página!</div>";
            header("Location: ../paginainicial.php");
        }
        ?>
</body>

</html>
