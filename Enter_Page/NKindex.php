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
    <link rel="stylesheet" href="Css/Imports3.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" type="imagex/png" href="\xampp\htdocs\Project\Imagens\favicon.ico">
</head>
<body>

<!--Header-->

<header>
    <div class="container" id="nav-container">
        <nav class="navbar navbar-expand-lg">
            <a href="#" class="navbar-brand" id="LogoNK">
                <img id="NKlogo" src="https://i.ibb.co/pd3Byhr/Simplistic-Logo-Cinza.png" alt="Logo da empresa NK Solutions">
            </a>  

            <a href="#" class="navbar-brand" id="logo-dark">
                <img id="NKlogo-dark" src="https://i.ibb.co/CsrNTFX/Simplistic-Logo.png" alt="Logo da empresa NK Solutions Modo Dark">
            </a>


            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-links" aria-controls="navbar-links" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>             

            <div class="collapse navbar-collapse justify-content-center" id="navbar-links">
                <div class="navbar-nav" id="navbar-itens">
                    <a href="#Noticias" class="nav-item nav-link" id="news-menu">Noticias</a>
                    <a href="#fique-atento" class="nav-item nav-link" id="alert-menu">Fique Atento</a>
                    <a href="http://localhost/Project/Project-Database-NK/FAQ/faq.php" class="nav-item nav-link" id="faq-menu">Dúvidas frequentes</a>
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
    <div class="container-fluid" id="slider-NK">
        <div id="mainslider" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#mainslider" data-bs-slide-to="0" class="active" id="slider0"></li>
                <li data-bs-target="#mainslider" data-bs-slide-to="1" id="slider1"></li>
                <li data-bs-target="#mainslider" data-bs-slide-to="2" id="slider2"></li>
            </ol>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <a href="http://localhost/Project/Project-Database-NK/SempreAlerta/golpeipva/golpeipva.php" target="_blank"> <img src="https://www.detran.pe.gov.br/images/2024/banner-principal/golpe-pagamentos-online-min.png#joomlaImage://local-images/2024/banner-principal/golpe-pagamentos-online-min.png?width=1140&height=300" class="d-block w-100" alt="Imagem 0 do Slider"></a>
                </div>
            

            
                <div class="carousel-item">
                    <a href="http://localhost/Project/Project-Database-NK/SempreAlerta/cnhrural/cnhrural.php" target="_blank"> <img src="https://i.ibb.co/8gjPgCq/cnh-rural-2024-resultado-min-cleanup.png" class="d-block w-100" alt="Imagem 1 do Slider"></a>
                </div>
            

                <div class="carousel-item">
                    <a href="http://localhost/Project/Project-Database-NK/SempreAlerta/ATPV/ATPV.php" target="_blank"> <img src="https://www.detran.pe.gov.br/images/2024/banner-principal/atpve-novoServico1.png#joomlaImage://local-images/2024/banner-principal/atpve-novoServico1.png?width=1140&height=300" class="d-block w-100" alt="Imagem 2 do Slider"></a>
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
                    <p>(USUÁRIO COM VEÍCULO CADASTRADO)</p>
                </div>
                <div class="cards-group">
                    <div class="cards-box registered">
                        <a href="http://localhost/Project/Project-Database-NK/loginpage/login2.php">
                        <i id="cardicon" class="bi bi-person-vcard-fill"></i>
                        <p>IPVA</p> </a>
                    </div>
                    
                </div>
            </div>
            <div class="content-wrapper">
                <div class="content-title not-registered">
                    <h3>NÃO REGISTRADO</h3>
                    <p>(VEÍCULO NÃO REGISTRADO)</p>
                </div>
                <div class="cards-group">
                    <div class="cards-box not-registered">
                        <a href="http://localhost/Project/Project-Database-NK/registercar/registercar.php">
                        <i id="cardicon" class="bi bi-car-front-fill"></i> 
                        <p>Primeiro Registro</p> </a>
                    </div>
                    <div class="cards-box not-registered">
                        <a href="http://localhost/Project/Project-Database-NK/Pesquisa/ConsultaPLACA/NKPlaca.php">
                            <i id="cardicon" class="bi bi-search"></i>
                            <p>Consulta de Placa</p> </a>
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
                        <a href="http://localhost/Project/Project-Database-NK/loginpage/login1.php">
                            <i id="cardicon" class="bi bi-credit-card-fill"></i>
                            <p>Consulta de CNH</p> </a>
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
                        <a href="http://localhost/Project/Project-Database-NK/registerpage/register.php">
                        <i id="cardicon" class="bi bi-sign-stop-lights-fill"></i>
                        <p>Primeiro Registro</p> </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="ConsultaCNH">
        <div class="consulta-container" id="registrar-conta">
            <h2>Registre-se agora</h2>
            <p>Faça sua conta com total segurança <br> e integridade dos seus dados.</p>
            <div id="acc-btn">
                <a href="http://localhost/Project/Project-Database-NK/registerpage/register.php"><button class="btnacc">Registrar conta</button></a> <!--Importante-->
            </div>
        </div>

        <div class="consulta-container" id="registrar-carro">
            <h2>Cadastre seu veículo</h2>
            <p>Faça cadastro das informações sobre<br> seu veículo de forma segura.</p>
            <div id="vei-btn">
                <a href="http://localhost/Project/Project-Database-NK/registercar/registercar.php"><button class="btnvei">Cadastrar veículo</button></a> <!--Importante-->
            </div>
        </div>

        <div class="consulta-container" id="sobre-legis">
            <h2>Sobre a lesgislação</h2>
            <p>Todas as informações sobre nossa <br>lesgislação e toda sua criação.</p>
            <div id="legis-btn">
                <a href="https://www.detran.pe.gov.br/images/cartilhas/decreto_Lei_n_23__de_24_de_maio_de_1969.pdf"><i class="bi bi-file-earmark-pdf-fill"></i></a> <!--Importante-->
            </div>
        </div>

    </div>

    <div id="ConsultaCNH-mobile">
        <div class="consulta-container-mobile" id="registrar-conta-mobile">
            <h2>Registre-se agora</h2>
            <p>Faça sua conta com total segurança <br> e integridade dos seus dados.</p>
            <div id="acc-btn">
                <a href="http://localhost/Project/Project-Database-NK/registerpage/register.php"><button class="btnacc">Registrar conta</button></a> <!--Importante-->
            </div>
        </div>

        <div class="consulta-container-mobile" id="registrar-carro-mobile">
            <h2>Cadastre seu veículo</h2>
            <p>Faça cadastro das informações sobre<br> seu veículo de forma segura.</p>
            <div id="vei-btn">
                <a href="http://localhost/Project/Project-Database-NK/registercar/registercar.php"><button class="btnvei">Cadastrar veículo</button></a> <!--Importante-->
            </div>
        </div>

        <div class="consulta-container-mobile" id="sobre-legis-mobile">
            <h2>Sobre a lesgislação</h2>
            <p>Todas as informações sobre nossa <br>lesgislação e toda sua criação.</p>
            <div id="legis-btn">
                <a href="https://www.detran.pe.gov.br/images/cartilhas/decreto_Lei_n_23__de_24_de_maio_de_1969.pdf"><i class="bi bi-file-earmark-pdf-fill"></i></a> <!--Importante-->
            </div>
        </div>

    </div>
</section>
<!-- Fim do Consulta e Serviços-->


<!--PopUp do IPVA-->
<ul id="notification-wrapper">
    <li class="push-notification" style="height: fit-content;">
        <div class="push-acessibilidade w-100">
            <div class="push-notification-feedback" style="display: flex; flex-direction: column; height: fit-content;">
                <span class="fw-bold px-5">Prazo pagamento IPVA 2024</span>
                <hr class="m-1">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Finais de placa</th>
                            <th scope="col">6ª parcela</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="col-6 text-center">1 ou 2</td>
                            <td class="col-6 text-center">5 de Julho</td>
                        </tr>
                        <tr>
                            <td class="col-6 text-center">3 ou 4</td>
                            <td class="col-6 text-center">10 de Julho</td>
                        </tr>
                        <tr>
                            <td class="col-6 text-center">5 ou 6</td>
                            <td class="col-6 text-center">15 de Julho</td>
                        </tr>
                        <tr>
                            <td class="col-6 text-center">7 ou 8</td>
                            <td class="col-6 text-center">20 de Julho</td>
                        </tr>
                        <tr>
                            <td class="col-6 text-center">9 ou 0</td>
                            <td class="col-6 text-center">25 de Julho</td>
                        </tr>
                    </tbody>
                </table>
                <a class="link-dtl-servico" href="http://localhost/Project/Project-Database-NK/loginpage/login2.php">Confira aqui o calendário completo.</a>
                <button type="button" class="close-notification" aria-label="Fechar notificação" style="position: absolute; top: 0px; height: 24px;">
                    <img src="https://www.detran.pe.gov.br/templates/detranpe/images/times-solid.svg" alt="Icone fechar" style="border-radius: 0px 0px 0px 4px; padding: 6px 10px;">
                </button>
            </div>
        </div>
    </li>
</ul>

<!--Fim do PopUP-->


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
                    <h4>NK comprova que pão de forma resulta em teste de bafômetro positivo</h4>
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
                    <h4>Quer modificar o veículo? CTB prevê que customizações sejam autorizadas pela NK</h4>
                    <a href="https://agenciadenoticias.ms.gov.br/quer-modificar-o-veiculo-ctb-preve-que-customizacoes-sejam-autorizadas-pelo-detran/" target="_blank">Leia mais</a>
                </div>
                <div class="posted-date">
                    <p>Postado em 14/07/2024</p>
                </div>
            </div>
        </div>
    </div>
</div>
</section><!--Fim da Section de notícias--> 


<!--Section de Fique Atento-->
<div class="container" id="atent-cont">
    <div class="title-alerts">
        <h2>FIQUE ATENTO</h2>
    </div>
    <section id="fique-atento">
        <a href="http://localhost/Project/Project-Database-NK/FiqueAtentoAbas/base.php" class="card blue">
            <div class="card-header">
                <i class="bi bi-display-fill"></i>
                <span>Cursos</span>
            </div>
            <img src="https://www.detran.pe.gov.br/images/img-alert-03.png" alt="Fiscalização Image">
            <div class="card-body" id="body-blue">
                <h3>Conheça a área de Cursos</h3>
                <ul>
                    <li>Pilotagem defensiva</li>
                    <li>Mecânica básica para iniciantes</li>
                    <li>Reciclagem para condutores Infratores</li>
                    <li>Curso preventivo de reciclagem</li>
                    <li>Cursos para atividades remuneradas</li>
                
                </ul>
            </div>
        </a>
    
        <a href="http://localhost/Project/Project-Database-NK/FiqueAtentoAbas/indexo.php" class="card yellow">
            <div class="card-header">
                <i class="bi bi-shield-shaded"></i>
                <span>Fiscalização</span>
            </div>
            <img src="https://www.detran.pe.gov.br/images/img-alert-02.png" alt="Fiscalização Image">
            <div class="card-body" id="body-yellow">
                <h3>Conheça a área de Fiscalização</h3>
                <ul>
                    <li>Defesa/Recurso</li>
                    <li>Identificação de condutor Infrator</li>
                    <li>Veículos Recolhidos</li>
                    <li>Liberação de Documentos Recolhidos</li>
                    <li>Leilões</li>
                    <li>CNH Suspensa ou Cassada</li>
                </ul>
            </div>
        </a>
        <div class="card-container" id="follow-insta">
            <div class="card" style="width: 18rem;">
                <a href="https://www.instagram.com/fotografia.cauaamaral/"><img src="https://i.ibb.co/th6d63c/chamada-instagram-DETRAN-PE-cleanup.png" class="card-img-top" alt="follow instagram"></a>
            </div>

        </div>
<div class="loader">
  <div class="truckWrapper">
    <div class="truckBody">
      <svg
        xmlns="http://www.w3.org/2000/svg"
        fill="none"
        viewBox="0 0 198 93"
        class="trucksvg"
      >
        <path
          stroke-width="3"
          stroke="#282828"
          fill="#F83D3D"
          d="M135 22.5H177.264C178.295 22.5 179.22 23.133 179.594 24.0939L192.33 56.8443C192.442 57.1332 192.5 57.4404 192.5 57.7504V89C192.5 90.3807 191.381 91.5 190 91.5H135C133.619 91.5 132.5 90.3807 132.5 89V25C132.5 23.6193 133.619 22.5 135 22.5Z"
        ></path>
        <path
          stroke-width="3"
          stroke="#282828"
          fill="#7D7C7C"
          d="M146 33.5H181.741C182.779 33.5 183.709 34.1415 184.078 35.112L190.538 52.112C191.16 53.748 189.951 55.5 188.201 55.5H146C144.619 55.5 143.5 54.3807 143.5 53V36C143.5 34.6193 144.619 33.5 146 33.5Z"
        ></path>
        <path
          stroke-width="2"
          stroke="#282828"
          fill="#282828"
          d="M150 65C150 65.39 149.763 65.8656 149.127 66.2893C148.499 66.7083 147.573 67 146.5 67C145.427 67 144.501 66.7083 143.873 66.2893C143.237 65.8656 143 65.39 143 65C143 64.61 143.237 64.1344 143.873 63.7107C144.501 63.2917 145.427 63 146.5 63C147.573 63 148.499 63.2917 149.127 63.7107C149.763 64.1344 150 64.61 150 65Z"
        ></path>
        <rect
          stroke-width="2"
          stroke="#282828"
          fill="#FFFCAB"
          rx="1"
          height="7"
          width="5"
          y="63"
          x="187"
        ></rect>
        <rect
          stroke-width="2"
          stroke="#282828"
          fill="#282828"
          rx="1"
          height="11"
          width="4"
          y="81"
          x="193"
        ></rect>
        <rect
          stroke-width="3"
          stroke="#282828"
          fill="#DFDFDF"
          rx="2.5"
          height="90"
          width="121"
          y="1.5"
          x="6.5"
        ></rect>
        <rect
          stroke-width="2"
          stroke="#282828"
          fill="#DFDFDF"
          rx="2"
          height="4"
          width="6"
          y="84"
          x="1"
        ></rect>
      </svg>
    </div>
    <div class="truckTires">
      <svg
        xmlns="http://www.w3.org/2000/svg"
        fill="none"
        viewBox="0 0 30 30"
        class="tiresvg"
      >
        <circle
          stroke-width="3"
          stroke="#282828"
          fill="#282828"
          r="13.5"
          cy="15"
          cx="15"
        ></circle>
        <circle fill="#DFDFDF" r="7" cy="15" cx="15"></circle>
      </svg>
      <svg
        xmlns="http://www.w3.org/2000/svg"
        fill="none"
        viewBox="0 0 30 30"
        class="tiresvg"
      >
        <circle
          stroke-width="3"
          stroke="#282828"
          fill="#282828"
          r="13.5"
          cy="15"
          cx="15"
        ></circle>
        <circle fill="#DFDFDF" r="7" cy="15" cx="15"></circle>
      </svg>
    </div>
    <div class="road"></div>

    <svg
      xml:space="preserve"
      viewBox="0 0 453.459 453.459"
      xmlns:xlink="http://www.w3.org/1999/xlink"
      xmlns="http://www.w3.org/2000/svg"
      id="Capa_1"
      version="1.1"
      fill="#000000"
      class="lampPost"
    >
      <path
        d="M252.882,0c-37.781,0-68.686,29.953-70.245,67.358h-6.917v8.954c-26.109,2.163-45.463,10.011-45.463,19.366h9.993
c-1.65,5.146-2.507,10.54-2.507,16.017c0,28.956,23.558,52.514,52.514,52.514c28.956,0,52.514-23.558,52.514-52.514
c0-5.478-0.856-10.872-2.506-16.017h9.992c0-9.354-19.352-17.204-45.463-19.366v-8.954h-6.149C200.189,38.779,223.924,16,252.882,16
c29.952,0,54.32,24.368,54.32,54.32c0,28.774-11.078,37.009-25.105,47.437c-17.444,12.968-37.216,27.667-37.216,78.884v113.914
h-0.797c-5.068,0-9.174,4.108-9.174,9.177c0,2.844,1.293,5.383,3.321,7.066c-3.432,27.933-26.851,95.744-8.226,115.459v11.202h45.75
v-11.202c18.625-19.715-4.794-87.527-8.227-115.459c2.029-1.683,3.322-4.223,3.322-7.066c0-5.068-4.107-9.177-9.176-9.177h-0.795
V196.641c0-43.174,14.942-54.283,30.762-66.043c14.793-10.997,31.559-23.461,31.559-60.277C323.202,31.545,291.656,0,252.882,0z
M232.77,111.694c0,23.442-19.071,42.514-42.514,42.514c-23.442,0-42.514-19.072-42.514-42.514c0-5.531,1.078-10.957,3.141-16.017
h78.747C231.693,100.736,232.77,106.162,232.77,111.694z"
      ></path>
    </svg>
  </div>
</div>

    </section>
</div>    
<!--Fim da Section de Fique atento-->

<!--Footer-->
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

<!--Fim do footer-->

<script src="JS/scripts.js"></script> <!--Arquivo do JS-->

</body>
</html>