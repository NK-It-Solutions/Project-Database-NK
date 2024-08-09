
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="register1.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" type="imagex/png" href="/xampp/htdocs/Project-Database-NK/Imagens/favicon.ico">
    <script defer src="register.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Registro</title>
</head>
<body>
    <header>
        <div class="container" id="nav-container">
            <nav class="navbar navbar-expand-lg fixed-top">
                <a href="http://localhost/Project/Project-Database-NK/Enter_Page/NKindex.php" class="logo">
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
            <main id="main-signin">
                <form class="mx-lg-4" action="register.php" method="POST">
                    <div class="card" id="logincpf">
                        <h3>Crie sua conta no sistema</h3>
                        <a id="textocpf1">
                            <img id="iconcpf" src="https://sso.acesso.gov.br/assets/govbr/img/icons/id-card-solid.png" class="img-fluid">
                            <img id="iconcpfblack" src="https://i.ibb.co/60fDJ9f/id-card-solid.png" class="img-fluid">
                            Dados do registro
                        </a>
                        <div class="row">
                            <p id="textocpf2">Digite seus dados para <strong>criar</strong> sua conta</p>
                            <div class="col-sm-6 col-xl-4">
                                <label>Nome</label>
                                <input type="text" name="nome" class="form-control" placeholder="Digite seu Nome" required>
                            </div>
                            <div class="col-sm-6 col-xl-4">
                                <label>CPF</label>
                                <input type="text" name="cpf" class="form-control" placeholder="Digite seu CPF" required>
                            </div>
                            <div class="col-sm-6 col-xl-4">
                                <label>E-mail</label>
                                <input type="email" name="email" class="form-control" placeholder="Digite seu E-mail" required>
                            </div>
                            <div class="col-sm-6 col-xl-3">
                                <label>Telefone</label>
                                <input type="text" name="telefone" class="form-control" placeholder="Digite seu Telefone">
                            </div>
                            <div class="col-sm-6 col-md-3 col-xl-3">
                                <label>Estado</label>
                                <select name="estado" class="form-control" required>
                                    <option value="">Selecione o estado</option>
                                    <option value="AC">AC - Acre</option>
                                    <option value="AL">AL - Alagoas</option>
                                    <option value="AP">AP - Amapá</option>
                                    <option value="AM">AM - Amazonas</option>
                                    <option value="BA">BA - Bahia</option>
                                    <option value="CE">CE - Ceará</option>
                                    <option value="DF">DF - Distrito Federal</option>
                                    <option value="ES">ES - Espírito Santo</option>
                                    <option value="GO">GO - Goiás</option>
                                    <option value="MA">MA - Maranhão</option>
                                    <option value="MT">MT - Mato Grosso</option>
                                    <option value="MS">MS - Mato Grosso do Sul</option>
                                    <option value="MG">MG - Minas Gerais</option>
                                    <option value="PA">PA - Pará</option>
                                    <option value="PB">PB - Paraíba</option>
                                    <option value="PR">PR - Paraná</option>
                                    <option value="PE">PE - Pernambuco</option>
                                    <option value="PI">PI - Piauí</option>
                                    <option value="RJ">RJ - Rio de Janeiro</option>
                                    <option value="RN">RN - Rio Grande do Norte</option>
                                    <option value="RS">RS - Rio Grande do Sul</option>
                                    <option value="RO">RO - Rondônia</option>
                                    <option value="RR">RR - Roraima</option>
                                    <option value="SC">SC - Santa Catarina</option>
                                    <option value="SE">SE - Sergipe</option>
                                    <option value="TO">TO - Tocantins</option>
                                </select>
                            </div>
                            <div class="col-sm-6 col-md-3 col-xl-3">
                                <label>CEP</label>
                                <input type="text" name="cep" class="form-control" placeholder="Digite seu CEP" required>
                            </div>
                            <div class="col-sm-12 col-md-6 col-xl-3">
                                <label>Senha</label>
                                <input type="password" name="senha" class="form-control" placeholder="Digite sua Senha" required>
                            </div>
                        </div>
                        <div class="button-panel" id="login-button-panel">
                            <button type="submit" name="submit" class="btn btn-primary" id="enter-account-id" tabindex="2">Continuar</button>
                        </div>
                        <div id="cadastro">
                            <p>Já possui conta no sistema? <a href="http://localhost/Project/Project-Database-NK/loginpage/login1.php" id="botaocadastro">Entre</a></p>
                        </div>
                    </div>
                </form>
            </main>
        </div>     
    </section>
    <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cadastro_carro";

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $cpf = $_POST["cpf"];
    $telefone = $_POST["telefone"];
    $email = $_POST["email"];
    $estado = $_POST["estado"];
    $cep = $_POST["cep"];
    $senha = password_hash($_POST['senha'], PASSWORD_BCRYPT);

    $sql = "INSERT INTO conta (Nome, CPF, Telefone, Email, Estado, CEP, Senha) 
            VALUES ('$nome', '$cpf', '$telefone', '$email','$estado', '$cep', '$senha')";

if ($conn->query($sql) === TRUE) {
    echo '<div style="padding: 10px; background-color: #dff0d8; color: #3c763d; border: 1px solid #d6e9c6; border-radius: 5px; font-family: Arial, sans-serif;">
            <strong>Sucesso!</strong> Registro criado com sucesso.
          </div>';
    } 
else {
    echo '<div style="padding: 10px; background-color: #f2dede; color: #a94442; border: 1px solid #ebccd1; border-radius: 5px; font-family: Arial, sans-serif;">
            <strong>Erro!</strong> Não foi possível criar o registro.
          </div>';
    }
}
$conn->close();
?>
</body>
</html>