<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cpf = $_POST['cpf'];
    $senha = $_POST['password'];

    // Conectar ao banco de dados
    $conn = new mysqli('localhost', 'root', '', 'cadastro_carro');

    // Verificar conexão
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Preparar e executar consulta SQL
    $stmt = $conn->prepare("SELECT ContaID, senha FROM conta WHERE cpf = ?");
    $stmt->bind_param("s", $cpf);
    $stmt->execute();
    $stmt->store_result();

    // Verificar se o CPF existe
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $hashed_password);
        $stmt->fetch();

        // Verificar a senha
        if (password_verify($senha, $hashed_password))  {
            $_SESSION['user_id'] = $id;
            header("Location:http://localhost/Project/Project-Database-NK/Pesquisa/ConsultaCNH/consulta.php");
            exit;
        } else {
            echo "Senha incorreta.";
        }
    } else {
        echo "CPF não encontrado.";
    }

    $stmt->close();
    $conn->close();
}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" type="imagex/png" href="/Portifolio%20NKroo%20Projeto/NKroo%20Imagens/favicon.ico">
    <script defer src="login.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Login</title>
</head>
<body>
    <header>
        <div class="container" id="nav-container">
            <nav class="navbar navbar-expand-lg fixed-top">
                <a href="/Project-Database/Enter_Page/NKindex.html" class="logo">
                    <img src="https://i.ibb.co/pd3Byhr/Simplistic-Logo-Cinza.png" width="130px" height="45px" alt="Logo NK Solutions">
                </a>
                <div class="trilho" id="trilho">
                    <span>
                        <a id="contraste"><i class="fas fa-adjust"></i><span id="textocontraste">Alto Contraste</span></a>
                    </span>
                </div>
            </nav>
        </div>
    </header>
    <section id="login">
        <div id="logindiv" class="container">
            <div id="imagem">
                <img class="img-fluid" src="https://i.ibb.co/jHZnGXQ/bglogin-jpg.png" alt="Background Login">
            </div>
            <main id="main-signin">
                <form class="mx-lg-4" method="POST" action="login.php">
                    <div class="card" id="logincpf">
                        <h3>Indentifique-se no sistema</h3>
                        <a id="textocpf1">
                            <img id="iconcpf" src="https://sso.acesso.gov.br/assets/govbr/img/icons/id-card-solid.png" class="img-fluid" alt="CPF Icon">
                            <img id="iconcpfblack" src="https://i.ibb.co/60fDJ9f/id-card-solid.png" class="img-fluid" alt="CPF Icon Black">
                            Número do CPF
                        </a>
                        <div>
                            <p id="textocpf2">Digite seu <strong>CPF</strong> e sua <strong>Senha</strong> para <strong>acessar</strong> sua conta</p>
                            <div id="input1">
                                <label for="cpf">CPF</label>
                                <input id="cpf" name="cpf" placeholder="Digite seu CPF" required>
                            </div>
                            <div id="input2">
                                <label for="senha">Senha</label>
                                <input id="senha" name="password" type="password" placeholder="Digite sua Senha" required>
                            </div>
                        </div>
                        <div class="button-panel" id="login-button-panel">
                            <a href="file:///C:/xampp/htdocs/Project/Project-Database-NK/Pesquisa/IPVA/ipva.html"> <button id="enter-account-id" type="submit" tabindex="2">Continuar</button></a>
                        </div>
                        <div id="cadastro">
                            <p>Ainda não possui uma conta no sistema?
                                <a href="/Project-Database-NK/registerpage/register.php" id="botaocadastro">Registre-se</a>
                            </p>
                        </div>
                    </div>
                </form>
            </main>
        </div>     
    </section>
    
</body>
</html>