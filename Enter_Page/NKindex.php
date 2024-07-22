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
    <link rel="stylesheet" type="text/css" href="Css/Imports.css">
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
                <div class="navbar-nav" id="navbar-itens">
                    <a href="#Noticias" class="nav-item nav-link" id="news-menu">Noticias</a>
                    <a href="#" class="nav-item nav-link" id="alert-menu">Sempre alerta</a>
                    <a href="#" class="nav-item nav-link" id="faq-menu">Dúvidas frequentes</a>
                    <a href="#" class="nav-item nav-link" id="contact-menu">Contatos</a>
                </div>
            </div>
            <div class="trilho" id="trilho">
                <span>
                    <a id="contraste"><i class="fas fa-adjust"></i><span id="textocontraste">Alto Contraste</span></a>
                </span>
            </div>
        </nav>
    </div>
</header>

<!--Fim do Header-->


<main>
    <!--Slider-->
    <div class="container-fluid">
        <div id="mainslider" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#mainslider" data-bs-slide-to="0" class="active" id="slider0"></li>
                <li data-bs-target="#mainslider" data-bs-slide-to="1" id="slider1"></li>
                <li data-bs-target="#mainslider" data-bs-slide-to="2" id="slider2"></li>
            </ol>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <a href="https://www.detran.pe.gov.br/golpe-no-pagamento-do-ipva-e-outros-tributos-relativos-ao-veiculo" target="_blank"> <img src="https://www.detran.pe.gov.br/images/2024/banner-principal/golpe-pagamentos-online-min.png#joomlaImage://local-images/2024/banner-principal/golpe-pagamentos-online-min.png?width=1140&height=300" class="d-block w-100" alt="Imagem 0 do Slider"></a>
                </div>
            

            
                <div class="carousel-item">
                    <a href="https://www.detran.pe.gov.br/cnh-rural" target="_blank"> <img src="https://www.detran.pe.gov.br/images/2024/banner-principal/cnh-rural-2024-resultado-min.png#joomlaImage://local-images/2024/banner-principal/cnh-rural-2024-resultado-min.png?width=1140&height=300" class="d-block w-100" alt="Imagem 1 do Slider"></a>
                </div>
            

                <div class="carousel-item">
                    <a href="https://www.detran.pe.gov.br/?view=article&id=2105:novo-servico-impressao-de-atpv-online&catid=30" target="_blank"> <img src="https://www.detran.pe.gov.br/images/2024/banner-principal/atpve-novoServico1.png#joomlaImage://local-images/2024/banner-principal/atpve-novoServico1.png?width=1140&height=300" class="d-block w-100" alt="Imagem 2 do Slider"></a>
                </div>
            
            </div>

            <a href="#mainslider" class="carousel-control-prev" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <a href="#mainslider" class="carousel-control-next" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

        </div>
    </div>
    <!--Fim do Slider-->
</main>
 <!--Consultas e Serviços-->
 <section id="services" class="container">
    <div class="container-serv">
        <div class="tab-buttons">
            <button class="tab-btn" content-id="veiculos">
                Veículos
            </button>
            <button id="hab-btn" class="tab-btn" content-id="condutores">
                Condutores
            </button>
        </div>
        <div id="veiculos" class="content show">
            <div class="content-wrapper">
                <div class="content-title registered">
                    <h3>REGISTRADO</h3>
                    <p>(VEÍCULO USADO, JÁ EMPLACADO)</p>
                </div>
                <div class="cards-group">
                    <div class="cards-box registered">
                        <i id="cardicon" class="bi bi-person-vcard-fill"></i>
                        <p>IPVA</p>
                    </div>
                    <div class="cards-box registered">
                        <a href="http://localhost/project/pesquisa/consulta.php">
                        <i id="cardicon" class="bi bi-credit-card-fill"></i>
                        <p>Consulta de CNH</p> </a>
                    </div>
                    <div class="cards-box registered">
                        <a href="http://localhost/project/pesquisa/NKPlaca.php">
                        <i id="cardicon" class="bi bi-search"></i>
                        <p>Consulta de Placa</p> </a>
                    </div>
                </div>
            </div>
            <div class="content-wrapper">
                <div class="content-title not-registered">
                    <h3>NÃO REGISTRADO</h3>
                    <p>(VEÍCULO NOVO, NÃO EMPLACADO)</p>
                </div>
                <div class="cards-group">
                    <div class="cards-box not-registered">
                        <i id="cardicon" class="bi bi-car-front-fill"></i> 
                        <p>Primeiro Registro</p>
                    </div>
                </div>
            </div>
        </div>
        <div id="condutores" class="content">
            <div class="content-wrapper-red">
                <div class="content-title registered">
                    <h3>CONDUTOR</h3>
                    <p>(JÁ É CONDUTOR)</p>
                </div>
                <div class="cards-group-red">
                    <div class="cards-box registered">
                        <i id="cardicon" class="bi bi-card-checklist"></i>  
                        <p>Pontos na carteira</p> 
                    </div> 
                    <div class="cards-box registered">
                        <i id="cardicon" class="bi bi-calendar-week-fill"></i>
                        <p>Vencimento da carteira</p>
                    </div>
                    <div class="cards-box registered">
                        <i id="cardicon" class="bi bi-ban"></i>
                        <p>Infrações</p>
                    </div>
                </div>
            </div>
            <div class="content-wrapper-red">
                <div class="content-title not-registered">
                    <h3>NÃO CONDUTOR</h3>
                    <p>(AINDA NÃO É CONDUTOR)</p>
                </div>
                <div class="cards-group-red">
                    <div class="cards-box not-registered">
                        <i id="cardicon" class="bi bi-sign-stop-lights-fill"></i>
                        <p>Primeiro Registro</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Fim do Consulta e Serviços-->


<!--Section de Noticias-->

<section id="Noticias">

<div class="container" id="container-news">
    <div class="news-section">
        <div class="title-news">
            <h2>NOTÍCIAS</h2>
        </div>
        <div class="cards-news">
            <div class="news-card">
                <div class="image-section">
                        <a href="https://www.correiobraziliense.com.br/brasil/2024/07/6900908-detran-comprova-que-pao-de-forma-resulta-em-teste-de-bafometro-positivo.html" target="_blank">
                            <img src="https://midias.correiobraziliense.com.br/_midias/jpg/2024/07/16/675x450/1_07_bread-38921820.jpg?20240717212318?20240717212318" alt="noticia pão de forma bafometro detran">
                        </a>    
                </div>
                <div class="content-news">
                    <h4>Detran comprova que pão de forma resulta em teste de bafômetro positivo</h4>
                    <a href="https://www.correiobraziliense.com.br/brasil/2024/07/6900908-detran-comprova-que-pao-de-forma-resulta-em-teste-de-bafometro-positivo.html" target="_blank">Leia mais</a>
                </div>
                <div class="posted-date">
                    <p>Postado em 17/07/2024</p>
                </div>
            </div>

            <div class="news-card">
                <div class="image-section">
                        <a href="https://www.noticiasmanha.com.br/2024/07/18/noticias/cnh-graca-solicitar/" target="_blank">
                            <img src="https://www.noticiasmanha.com.br/wp-content/webp-express/webp-images/uploads/2024/07/CNH-de-GRACA-com-35-MIL-vagas-disponibilizadas-como-se-inscrever-Confira-1024x683.jpg.webp" alt="noticia CNH grátis detran">
                        </a>    
                </div>
                <div class="content-news">
                    <h4>CNH de GRAÇA com 3,5 MIL vagas disponibilizadas; como se inscrever? Confira</h4>
                    <a href="https://www.noticiasmanha.com.br/2024/07/18/noticias/cnh-graca-solicitar/" target="_blank">Leia mais</a>
                </div>
                <div class="posted-date">
                    <p>Postado em 19/07/2024</p>
                </div>
            </div>

            <div class="news-card">
                <div class="image-section">
                        <a href="https://agenciadenoticias.ms.gov.br/quer-modificar-o-veiculo-ctb-preve-que-customizacoes-sejam-autorizadas-pelo-detran/" target="_blank">
                            <img src="https://agenciadenoticias.ms.gov.br/wp-content/uploads/2024/07/vistoria-veiculos-3-foto-rachid-waqued-3-730x480.jpg" alt="noticia modificar veículo detran">
                        </a>    
                </div>
                <div class="content-news">
                    <h4>Quer modificar o veículo? CTB prevê que customizações sejam autorizadas pelo Detran</h4>
                    <a href="https://agenciadenoticias.ms.gov.br/quer-modificar-o-veiculo-ctb-preve-que-customizacoes-sejam-autorizadas-pelo-detran/" target="_blank">Leia mais</a>
                </div>
                <div class="posted-date">
                    <p>Postado em 14/07/2024</p>
                </div>
            </div>
        </div>
    </div>
</div>
<<<<<<< HEAD
<!--Fim da Section de notícias--> 

<section id="fique-atento">




</section>
=======

>>>>>>> e28af2b29ed86481fb9bef6094bc9a186299a2c1



</section>

<script src="JS/scripts.js"></script> <!--Arquivo do JS-->
</body>
</html>