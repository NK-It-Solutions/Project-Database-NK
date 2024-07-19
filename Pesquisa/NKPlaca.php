<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NK Solutions</title>
    <script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="NKPlaca.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" type="imagex/png" href="\Users\Waved\Documents\Projetos\Projeto Banco de dados Detran\Imagens\favicon.ico">
</head>
<body>

<!--Header-->

<header>
    <div class="container" id="nav-container">
        <nav class="navbar navbar-expand-lg fixed-top">
            <a href="#" class="navbar-brand">
                <img id="NKlogo" src="https://i.ibb.co/pd3Byhr/Simplistic-Logo-Cinza.png" alt="Logo da empresa NK Solutions">
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-links" aria-controls="navbar-links" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>             

            <div class="collapse navbar-collapse justify-content-center" id="navbar-links">
              
            </div>
            <div id="acessibilidade">
                <span>
                    <a href="#" id="contraste"><i class="fas fa-adjust"></i><span id="textocontraste">Alto Contraste</span></a>
                </span>
            </div>
        </nav>
    </div>
</header>
<div class="background-image">
    <section id="consultaCNH">
        <div class="container" id="consulta-container">
            <div class="consulta-title">
                <h2>CONSULTA DE PLACA</h2>
            </div>
            <div class="registrados active" id="registradosContent">
                <p>Quem possui veículo já registrado pelo NK pode obter as informações <br> necessárias para manter o veículo regularizado e também para realizar os <br> serviços de Comunicação de Venda ou Transferência de Propriedade.</p>
                <form method="post" action="NKPlaca.php" id="consultaForm">
                    <label for="cpf">PLACA:</label>
                    <input type="text" id="cpf" name="cpf">
                    <input id="consult" type="submit" value="Consultar">
                </form> 
            </div>
        </div>
    </section>
    <section id="resultado-consulta">
        <div class="container" id="resultado-container"></div>
    </section>
</div>





<script>
function removeRecord(id) {
    var element = document.getElementById("lembro-" + id);
    if (element) {
        element.style.display = "none";
    }
    checkRecords();
}

function removeAllRecords() {
    var records = document.querySelectorAll('.record');
    records.forEach(record => {
        record.style.display = 'none';
    });
    document.getElementById('registradosContent').style.display = 'block';
}

function checkRecords() {
    var records = document.querySelectorAll('.record');
    var allHidden = true;
    records.forEach(record => {
        if (record.style.display !== 'none') {
            allHidden = false;
        }
    });
    if (allHidden) {
        document.getElementById('registradosContent').style.display = 'block';
    }
}

document.getElementById('consultaForm').addEventListener('submit', function(event) {
    // Nenhuma ação aqui, pois o formulário será enviado normalmente
    // e o PHP processará o pedido
});
</script>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
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

    // Pega o valor do formulário
    $nome_procurado = $_POST['cpf'];

    $sql = "SELECT * FROM info_veiculo WHERE placa = ?"; 
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $nome_procurado);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Esconde o conteúdo de registrados usando JavaScript
        echo "<script>document.getElementById('registradosContent').style.display = 'none';</script>";
        
        // Inicie uma div para o conteúdo dos resultados
        echo "<script>document.getElementById('resultado-container').innerHTML = '';</script>";
        
        // Saída dos dados de cada linha
        while($row = $result->fetch_assoc()) {
            echo '<script>
            var record = \'<div id="lembro-' . $row["id"] . '" class="record">\';
            record += \'<div class="placa">Placa: ' . $row["placa"] . '<br></div>\';
            record += \'<div class="nome">Nome: ' . $row["nome_veiculo"] . '<br></div>\';
            record += \'<div class="ano_mod">Ano/Modelo: ' . $row["ano_modelo"] . '<br></div>\';
            record += \'<div class="marca">Marca: ' . $row["marca_modelo"] . '<br></div>\';
            record += \'<div class="ano_fab">Ano/Fabricação: ' . $row["ano_fabricacao"] . '<br></div>\';
            record += \'<div class="estado">Estado: ' . $row["estado"] . '<br></div>\';
            record += \'<div class="cor">Cor: ' . $row["cor_predominante"] . '<br></div>\';
            record += \'<button onclick="removeRecord(' . $row["id"] . ')">Remover</button>\';
            record += \'</div>\';
            document.getElementById("resultado-container").innerHTML += record;
            </script>';
        }
    } else {
        echo "<script>document.getElementById('resultado-container').innerHTML = '0 resultados';</script>";
    }
    $conn->close();
}
?>

</body>
</html>
