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
    <link rel="stylesheet" type="text/css" href="NKPlaca1.css">
    <link rel="stylesheet" type="text/css" href="footer2.css">
    <script defer src="placa.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" type="imagex/png" href="\Users\Waved\Documents\Projetos\Projeto Banco de dados Detran\Imagens\favicon.ico">
</head>
<body>

<!--Header-->

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
        

    
            <section id="resultado-consulta">
                <div class="container" id="resultado-container">
                    
            
                </div>
        </div>        
    </section>
    
</div>    

<section id="Contatos">
    <footer>
        <div class="background-footer">
            <div class="logos-footer">
                <a class="logos-footer-color" href="https://www.instagram.com/fotografia.cauaamaral/" target="_blank"><i class="bi bi-instagram"></i></a>
                <a class="logos-footer-color" href="https://www.linkedin.com/in/leandro-melo-4656032b6/" target="_blank"><i class="bi bi-linkedin"></i></a>
                <a class="logos-footer-color" href="https://github.com/NK-It-Solutions" target="_blank"><i class="bi bi-github"></i></a>
                <a class="logos-footer-color" href="https://www.facebook.com" target="_blank"><i class="bi bi-facebook"></i></a>
            </div>
            <div class="sobre-footer">
                <p id="Sobre-destaque">Sobre a NK Solutions:</p>
                <a class="sobre-footer-color" href="https://chat.whatsapp.com/InKndskXwFOL21TIdmgiwo">Consultoria</a>
                <a class="sobre-footer-color" href="https://chat.whatsapp.com/InKndskXwFOL21TIdmgiwo">Serviços Web</a>
                <a class="sobre-footer-color" href="https://chat.whatsapp.com/InKndskXwFOL21TIdmgiwo">Banco de dados</a>
                <a class="sobre-footer-color" href="https://chat.whatsapp.com/InKndskXwFOL21TIdmgiwo">Aplicações</a>
            </div>
            <div class="contatos-footer">
                <p id="Contatosfooter">Contatos</p>
                <a class="logos-footer-color" href="mailto:contatoNKSolutions@gmail.com" target="_blank" class="footercontatos" id="email">
                        <i class="fa fa-envelope" style="font-size: 1.3em;"></i> <span class="sobre-footer-color" id="emailcontato"> NKsolutions_@outlook.com</span></a>
                    <a class="logos-footer-color" href="https://chat.whatsapp.com/Bsa2g0ijhYR3rgc9xbQop3" target="_blank" class="footercontatos" id="whatsappcontato">
                        <i class="fa-brands fa-whatsapp" style="font-size: 1.3em;"></i> <span class="sobre-footer-color" id="wpptexto">+55 81 99646-4232</span> </a>
                    <a class="logos-footer-color" class="footercontatosNB" id="telefone">
                        <i class="fa fa-phone" style="font-size: 1.3em;"></i> <span class="sobre-footer-color" id="telefonecontato">+55 81 3251-2381</span></a>
                    <a class="logos-footer-color" href="mailto:HelpNKSolutions@gmail.com" target="_blank" class="footercontatos" id="ajudamobile">
                        <i class="fa fa-envelope" style="font-size: 1.3em;"></i> <span class="sobre-footer-color" id="ajudamobilecontato">HelpNKSolutions@gmail.com</span></a>
            </div>
            <div class="copyright">
                <p>Copyright &copy; NK Solutions</p>
            </div>
        </div>
    </footer>
</section>







<!--Scripts-->
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
            record += \'<div class="combuistivel">Combustível: ' . $row["combustivel"] . '<br></div>\';
            record += \'<div class="chassi">Chassi: ' . $row["chassi"] . '<br></div>\';
            record += \'<div class="estado">Estado: ' . $row["estado"] . '<br></div>\';
            record += \'<div class="cor">Cor: ' . $row["cor_predominante"] . '<br></div>\';
            record += \'<div class="potencia">Potência em CV: ' . $row["potencia"] . '<br></div>\';
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
