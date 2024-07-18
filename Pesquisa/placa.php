<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NK Solutions</title>
    <link rel="stylesheet" type="text/css" href="placa.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>

<section id="introdução">
</section>

<nav>
    <div class="container">
        <div class="tabela">
            <button class="tab_btn">REGISTRADOS</button>
            <button class="tab_btn">NÃO REGISTRADOS</button>
        </div>
        <div class="conteudobox">
            <div class="registrados">
                <p>Quem possui veículo já registrado pelo NK pode obter as informações <br> necessárias para manter o veículo regularizado e também para realizar os <br> serviços de Comunicação de Venda ou Transferência de Propriedade.</p>

                <form id="formplaca" method="post" action="placa.php">
                    <label for="cpf">Placa:</label>
                    <input type="text" id="cpf" name="cpf">
                    <input type="submit" value="Consultar">
                </form>
            </div>
            <div class="registrados">
                <p>Quem comprou um veículo novo (0 km) pode obter as informações <br> necessárias para realizar o serviço de Primeiro Registro (Primeiro <br> Emplacamento).</p>

                <div class="register-container">
                    <h2>Registrar Veículo</h2>
                    <p>Informações relativas à CNH com segurança<br> para seus dados.</p>
                    <div id="regisbtn">
                        <a href="/Projetos/Projeto%20Banco%20de%20dados%20Detran/mainpage/consulta/consulta.html"><button class="btnregis">Registrar</button></a>
                    </div>
                </div>
            </div>    
        </div>
        <script>
function removeRecord(id) {
    var element = document.getElementById("lembro-" + id);
    if (element) {
        element.style.display = "none";
    }
}

function removeAllRecords() {
    var records = document.querySelectorAll('.record');
    records.forEach(record => {
        record.style.display = 'none';
    });
}

const tabs = document.querySelectorAll('.tab_btn');
const all_content = document.querySelectorAll('.registrados');

tabs.forEach((tab, index) => {
    tab.addEventListener('click', () => {
        tabs.forEach(tab => { tab.classList.remove('active') });
        tab.classList.add('active');

        all_content.forEach(content => { content.classList.remove('active') });
        all_content[index].classList.add('active');

        if (tab.textContent === 'REGISTRADOS', 'REGISTER-CONTAINER') {
            removeAllRecords();
        }
    });
});
</script>
    </nav>
    
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

    $nome_procurado = $_POST['cpf'];

    // Preparando a consulta para evitar SQL Injection
    $sql = "SELECT * FROM info_veiculo WHERE placa = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $nome_procurado);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Saída dos dados de cada linha
        while ($row = $result->fetch_assoc()) {
            echo '<div id="lembro-' . $row["id"] . '" class="record">';
            echo '<div class="nome">Nome: ' . htmlspecialchars($row["nome_veiculo"]) . '</div>';
            echo '<div class="placa">Placa: ' . htmlspecialchars($row["placa"]) . '</div>';
            echo '<div class="ano_mod">Ano/Modelo: ' . htmlspecialchars($row["ano_modelo"]) . '</div>';
            echo '<div class="ano_fab">Ano/Fabricação: ' . htmlspecialchars($row["ano_fabricacao"]) . '</div>';
            echo '<div class="estado">Estado: ' . htmlspecialchars($row["estado"]) . '</div>';
            echo '<div class="marca">Marca: ' . htmlspecialchars($row["marca_modelo"]) . '</div>';
            echo '<div class="cor">Cor: ' . htmlspecialchars($row["cor_predominante"]) . '</div>';
            echo '<button onclick="removeRecord(' . $row["id"] . ')">Remover</button>';
            echo '</div>'; // Fechando a div .record
        }
    } else {
        echo "0 resultados";
    }

    $conn->close();
}
?>
</body>
</html>
