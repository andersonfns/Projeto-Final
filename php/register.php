<?php
// Incluir arquivo de configuração
require_once "config.php";
 
// Defina variáveis e inicialize com valores vazios
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";
 
// Processando dados do formulário quando o formulário é enviado
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validar nome de usuário
    if(empty(trim($_POST["username"]))){
        $username_err = "Por favor coloque um nome de usuário.";
    } elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["username"]))){
        $username_err = "O nome de usuário pode conter apenas letras, números e sublinhados.";
    } else{
        // Prepare uma declaração selecionada
        $sql = "SELECT id FROM users WHERE username = :username";
        
        if($stmt = $pdo->prepare($sql)){
            // Vincule as variáveis à instrução preparada como parâmetros
            $stmt->bindParam(":username", $param_username, PDO::PARAM_STR);
            
            // Definir parâmetros
            $param_username = trim($_POST["username"]);
            
            // Tente executar a declaração preparada
            if($stmt->execute()){
                if($stmt->rowCount() == 1){
                    $username_err = "Este nome de usuário já está em uso.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Ops! Algo deu errado. Por favor, tente novamente mais tarde.";
            }

            // Fechar declaração
            unset($stmt);
        }
    }
    
    // Validar senha
    if(empty(trim($_POST["password"]))){
        $password_err = "Por favor insira uma senha.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "A senha deve ter pelo menos 6 caracteres.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validar e confirmar a senha
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Por favor, confirme a senha.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "A senha não confere.";
        }
    }
    
    // Verifique os erros de entrada antes de inserir no banco de dados
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare uma declaração de inserção
        $sql = "INSERT INTO users (username, password) VALUES (:username, :password)";
         
        if($stmt = $pdo->prepare($sql)){
            // Vincule as variáveis à instrução preparada como parâmetros
            $stmt->bindParam(":username", $param_username, PDO::PARAM_STR);
            $stmt->bindParam(":password", $param_password, PDO::PARAM_STR);
            
            // Definir parâmetros
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Tente executar a declaração preparada
            if($stmt->execute()){
                // Redirecionar para a página de login
                header("location: login.php");
            } else{
                echo "Ops! Algo deu errado. Por favor, tente novamente mais tarde.";
            }

            // Fechar declaração
            unset($stmt);
        }
    }
    
    // Fechar conexão
    unset($pdo);
}
?>
 
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
       @import url("https://fonts.gooleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap");

       *{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}

body, input{
    font-family:Arial, Helvetica, sans-serif;
}

.container{
    position: relative;
    width: 100%;
    min-height: 100vh;
    background-color: #fff;
    overflow: hidden;
}

.container:before{
    content: '';
    position: absolute;
    width: 2000px;
    height: 2000px;
    border-radius: 50%;
    background: linear-gradient(-45deg, #4481eb, #04befe);
    top: -10%;
    right: 48%;
    transform: translateY(-50%);
    z-index: 6;
}

.form-container{
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
}

.signin-signup{
    position: absolute;
    top: 50%;
    left: 75%;
    transform: translate(-50%, -50%);
    width: 50%;
    display: grid;
    grid-template-columns: 1fr;
    z-index: 5;
}

form{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    padding: 0 5rem;
    overflow: hidden;
    grid-column: 1 / 2 ;
    grid-row: 1 / 2 ;
}

form.sign-up-form{
    z-index: 2;
}

.title{
    font-size: 2.2rem;
    color: #444;
    margin-bottom: 10px;
}

.input-field{
    max-width: 300px;
    width: 100%;
    height: 55px;
    background-color: #f0f0f0;
    margin: 10px 0;
    border-radius: 55px;
    display: grid;
    grid-template-columns: 8% 90%;
    padding: 0 .4rem;
}

.input-field{
    text-align: center;
    line-height: 55px;
    color: #acacac;
    font-size: 1.1rem;
}

.input-field input{
    background: none;
    outline: none;
    border: none;
    line-height: 1;
    font-weight: 600;
    font-size: 1.1rem;
    columns: #333;
}

.input-field input::placeholder{
    color: #aaa;
    font-weight: 500;
}

.btn{
    width: 150px;
    height: 49px;
    border: none;
    outline: none;
    border-radius: 49px;
    cursor: pointer;
    background-color: #5995fd;
    color: #fff;
    text-transform: uppercase;
    font-weight: 600;
    margin: 10px 0;
    transition: .5s;
}

btn:houver{
    background-color: #4d84e2;                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         ;
}

.social-text{
    padding: .7rem 0;
    font-size: 1rem;
}

.social-media{
    display: flex;
    justify-content: center;
}

.social-icon{
    height: 46px;
    width: 46px;
    border: 1px solid #333;
    margin: 0 0.45rem;
    display: flex;
    justify-content: center;
    align-items: center;
    text-decoration: none;
    color: #333;
    font-size: 1.1rem;
    border-radius: 50%;
    transition: 0.3s;
}

.social-icon:hover{
    color: #4481eb;
    border-color: #4481eb;
}

.panels-container{
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    display: grid;
    grid-template-columns: repeat(2, 1fr);
}

.panel{
    display: flex;
    flex-direction: column;
    align-items: flex-end;
    justify-content: space-around;
    text-align: center;
    z-index: 7;
}

.left-panel{
    pointer-events: all;
    padding: 3rem 17% 2rem 12%;
}

.right-panel{
    pointer-events: none;
    padding: 3rem 12% 2rem 17%;
}

.panel .content{
    color: #fff;
    transition: .9s .6s ease-in-out;
}

.panel h3{
    font-weight: 600;
    line-height: 1;
    font-size: 1.5rem;
}

.panel p{
    font-size: 0.95rem;
    padding: 0.7rem 0;
}

.image{
    width: 100%;
    transition: .9s .6s ease-in-out;
}

    </style>
</head>
<body>
    </div>   
    <div class="container">
    <div class="form-container">
    <div class="signin-signup">
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="sign-up-form" id="signup">
    <h2 class="title">Cadastro</h2>
    <div class="input-field">
        <i class="fas fa-user"></i>
        <input type="text" name="username" placeholder="Username" <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
        </div>
        <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" placeholder="Password"<?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>">
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
        </div>
        <div class="input-field">
        <i class="fas fa-lock"></i>
                <input type="password" name="confirm_password" placeholder="Confirm-password" name="confirm_password" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $confirm_password; ?>">
                <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
        </div>
        <div class="form-group">
        <input type="submit" class="btn btn-primary" value="Criar Conta">
                <input type="reset" class="btn btn-secondary ml-2" value="Apagar Dados">
</div>
        <p>Já tem uma conta? <a href="login.php">Entre aqui</a>.</p>
</form>
</div>
</div>

<div class="panels-container">

        <div class="panel right-panel">
            <div class="content">
                <h3>Ainda não é registrado?</h3>
                <p>Caso esteja registrado, logue para ter acesso a mais informações.</p>
            </div>
            <img src="..preprojetotcc/imagens/signup.png" class="image" alt="">
        </div>
</div>
</div> 
</body>
</html>