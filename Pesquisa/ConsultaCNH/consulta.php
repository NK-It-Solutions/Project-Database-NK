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
    <link rel="stylesheet" type="text/css"  href="consulta2.css">
    <link rel="stylesheet" type="text/css"  href="footer2.css">
    <script defer src="consulta.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" type="imagex/png" href="\Users\Waved\Documents\Projetos\Projeto Banco de dados Detran\Imagens\favicon.ico">
</head>
<body>

<!--Header-->

<header>
    <div class="container" id="nav-container">
        <nav class="navbar navbar-expand-lg fixed-top">
            <a href="http://localhost/Project/Project-Database-NK/Enter_Page/NKindex.php" class="navbar-brand">
                <img id="NKlogo" src="https://i.ibb.co/pd3Byhr/Simplistic-Logo-Cinza.png" alt="Logo da empresa NK Solutions">
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-links" aria-controls="navbar-links" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>             

            <div class="collapse navbar-collapse justify-content-center" id="navbar-links">
              
            </div>
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
                <h2>CONSULTA DE CNH</h2>
            </div>
            <div class="registrados active" id="registradosContent">
                <p>Acompanhe o andamento de processos relativos a Veículos, Habilitação e Infrações, além de avisos sobre pendências e prazos.</p>
                <form method="post" action="consulta.php" id="consultaForm">
                    <label for="cpf">CPF:</label>
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
                <a href="https://www.instagram.com/fotografia.cauaamaral/" target="_blank"><i class="bi bi-instagram"></i></a>
                <a href="https://www.linkedin.com/in/leandro-melo-4656032b6/" target="_blank"><i class="bi bi-linkedin"></i></a>
                <a href="https://github.com/NK-It-Solutions" target="_blank"><i class="bi bi-github"></i></a>
                <a href="https://www.facebook.com" target="_blank"><i class="bi bi-facebook"></i></a>
            </div>
            <div class="sobre-footer">
                <p id="Sobre-destaque">Sobre a NK Solutions:</p>
                <a href="https://chat.whatsapp.com/InKndskXwFOL21TIdmgiwo">Consultoria</a>
                <a href="https://chat.whatsapp.com/InKndskXwFOL21TIdmgiwo">Serviços Web</a>
                <a href="https://chat.whatsapp.com/InKndskXwFOL21TIdmgiwo">Banco de dados</a>
                <a href="https://chat.whatsapp.com/InKndskXwFOL21TIdmgiwo">Aplicações</a>
            </div>
            <div class="contatos-footer">
                <p id="Contatosfooter">Contatos</p>
                <a href="mailto:contatoNKSolutions@gmail.com" target="_blank" class="footercontatos" id="email">
                        <i class="fa fa-envelope" style="font-size: 1.3em;"></i> <span id="emailcontato"> NKsolutions_@outlook.com</span></a>
                    <a href="https://chat.whatsapp.com/Bsa2g0ijhYR3rgc9xbQop3" target="_blank" class="footercontatos" id="whatsappcontato">
                        <i class="fa-brands fa-whatsapp" style="font-size: 1.3em;"></i> <span id="wpptexto">+55 81 99646-4232</span> </a>
                    <a class="footercontatosNB" id="telefone">
                        <i class="fa fa-phone" style="font-size: 1.3em;"></i> <span id="telefonecontato">+55 81 3251-2381</span></a>
                    <a href="mailto:HelpNKSolutions@gmail.com" target="_blank" class="footercontatos" id="ajudamobile">
                        <i class="fa fa-envelope" style="font-size: 1.3em;"></i> <span id="ajudamobilecontato">HelpNKSolutions@gmail.com</span></a>
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
    
    const tabs = document.querySelectorAll('.consulta-title');
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
    
    document.getElementById('consultaForm').addEventListener('submit', function(event) {
        // Nenhuma ação aqui, pois o formulário será enviado normalmente
        // e o PHP processará o pedido
    });
    </script>
    
    </body>
    </html>

    
</body>
</html>

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

    $sql = "SELECT * FROM cnh WHERE cpf = '$nome_procurado'"; 

    $result = $conn->query($sql);

    

    if ($result->num_rows > 0) {
        // Esconde o conteúdo de registrados usando JavaScript
        echo "<script>document.getElementById('registradosContent').style.display = 'none';</script>";
        
        // Inicie uma div para o conteúdo dos resultados
        echo "<script>document.getElementById('resultado-container').innerHTML = '';</script>";
        
        // Saída dos dados de cada linha
        while($row = $result->fetch_assoc()) {
            echo '<script>
            var record = \'<div id="lembro-' . $row["cnhid"] . '" class="record">\';
            record += \'<div class="nomecnh"><strong>Nome:<strong/> ' . $row["nome"] . '<br></div>\';
            record += \'<div class="telefone">telefone: ' . $row["telefone"] . '<br></div>\';
            record += \'<div class="n_regis">N. de Registro: ' . $row["n_registro"] . '<br></div>\';
            record += \'<div class="CEP_CNH">CEP: ' . $row["cep"] . '<br></div>\';
            record += \'<div class="estado">Estado: ' . $row["estado"] . '<br></div>\';
            record += \'<div class="pontos">Pontos: ' . $row["pontos"] . '<br></div>\';
            record += \'<div class="emissão">Emissão: ' . $row["emissao"] . '<br></div>\';
            record += \'<button onclick="removeRecord(' . $row["cnhid"] . ')">Remover</button>\';
            record += \'</div>\';
            document.getElementById("resultado-container").innerHTML += record;
            </script>';
        }
    } else {
        echo '<script>
        var noResultsMessage = \'<div class="no-results">\';
        noResultsMessage += \'<i class="fa fa-exclamation-circle" aria-hidden="true"></i> \';
        noResultsMessage += \'Nenhum resultado encontrado\';
        noResultsMessage += \'</div>\';
        document.getElementById("resultado-container").innerHTML = noResultsMessage;
        </script>';
    }
    $conn->close();
}
?>
