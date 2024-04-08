<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cursos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="bg-secondary text-white">
        <!-- importando bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <!-- menu-->
    <div class="container text-center">
        <div class="row">
            <div class="col">
                <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
                    <div class="container-fluid">
                        <img src="https://www.eteczonaleste.com.br/wp-content/uploads/2023/09/Group-6-1-3.svg" alt=""> &nbsp;
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                            <div class="navbar-nav">
                                <a class="nav-link" aria-current="page" href="{{ route('site.index')}}">Principal</a>
                                <a class="nav-link active" href="{{ route('site.cursos')}}">Cursos</a>
                                <a class="nav-link" href="{{ route ('site.contato')}}">Contato</a>
                                <a class="nav-link" href="{{ route('site.departamentos')}}">Departamentos</a>
                                <a class="nav-link" href="{{ route ('site.instituicao')}}">Instituição</a>
                                <a class="nav-link" href="{{ route ('site.oportunidades')}}">Oportunidades</a>
                                <a class="nav-link" href="{{ route ('site.vestibulinho')}}">Vestibulinho</a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <div class="container text-center ">
        <div class="row">
            <div class="col">
                <div class="card text-center">

                    <div class="card-body">
                        <h3 class="card-title">Conheça os Cursos da ETEC Zona Leste</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container text-center">
        <div class="row">
            <div class="col">
                        <!-- cards informações dos cursos-->
                <div class="card" style="width: 100%">
                    <center>
                        <div class="card" style="width: 50%">
                            <img src="https://blog.xpeducacao.com.br/wp-content/uploads/2022/07/analise-e-desenvolvimento-de-sistemas-o-que-faz.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Desenvolvimento de Sistemas</h5>

                                <p class="card-text">O TÉCNICO EM DESENVOLVIMENTO DE SISTEMAS é o profissional que desenvolve sistemas computacionais utilizando ambientes de desenvolvimento e
                                    linguagens de programação específica. Auxilia no dimensionamento de requisitos e funcionalidades em projetos de sistemas.
                                    Realiza testes funcionais de programas de computador e aplicativos. Executa manutenção de programas de computador. Modela, implementa e mantém bancos de dados. </p>
                            </div>
                        </div>
                        <div class="card" style="width: 50%;">
                            <img src="https://www.eteczonaleste.com.br/wp-content/uploads/2023/11/charlesdeluvio-OqxPH8c1UFE-unsplash-1-1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Contabilidade</h5>

                                <p class="card-text">O TÉCNICO EM CONTABILIDADE é o profissional que executa processos administrativos e contábeis.
                                    Classifica documentos contábeis fiscais e não fiscais. Ajuda na preparação dos documentos necessários para a abertura ou o encerramento de uma empresa.
                                    Calcula tributos federais, estaduais e municipais. Presta atendimento à fiscalização e apresenta documentos, livros e relatórios contábeis.
                                    Emite notas fiscais, gera boletos bancários e guias para o pagamento dos tributos.</p>
                            </div>
                        </div>
                        <div class="card" style="width: 50%;">
                            <img src="https://www.eteczonaleste.com.br/wp-content/uploads/2023/11/tyler-franta-iusJ25iYu1c-unsplash-scaled.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Logistica</h5>

                                <p class="card-text">O TÉCNICO EM LOGÍSTICA é o profissional que colabora na gestão dos processos de planejamento,
                                    operação e controle de programação nas áreas de produção de bens e serviços, de compras, de armazenagem, de estoques, de movimentação e de expedição.
                                    Viabiliza o transporte e a distribuição de materiais e produtos, coordena a manutenção de máquinas e de equipamentos e executa as funções, utilizando tecnologia de informação.
                                    Identifica metodologias, sistemas, procedimentos, equipamentos e estabelece critérios para seleção e utilização adequada.</p>

                            </div>
                        </div>
                        <div class="card" style="width: 50%;">
                            <img src="https://www.eteczonaleste.com.br/wp-content/uploads/2023/11/tingey-injury-law-firm-yCdPU73kGSc-unsplash-scaled.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Serviços Juridicos</h5>

                                <p class="card-text">O TÉCNICO EM SERVIÇOS JURÍDICOS é o profissional que atua diretamente na rotina de escritórios de advocacia e demais organizações que dispõem de setor ou departamento jurídico,
                                    dando suporte e apoio técnico-administrativo ao profissional do direito. É responsável pelo acompanhamento, gerenciamento e arquivo de processos de natureza jurídica. Presta atendimento receptivo ao público. </p>

                            </div>
                        </div>
                        <div class="card" style="width: 50%;">
                            <img src="https://www.eteczonaleste.com.br/wp-content/uploads/2023/11/campaign-creators-gMsnXqILjp4-unsplash-scaled.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Recursos Humanos</h5>

                                <p class="card-text">O TÉCNICO EM RECURSOS HUMANOS é o profissional que executa rotinas administrativas de pessoal com base na Legislação Trabalhista e Previdenciária. Auxilia no controle e avaliação de subsistemas de gerenciamento e contribui para a implementação das estratégias organizacionais.
                                    Administra pessoal, promove ações de treinamento, identifica e sugere plano de benefícios. Descreve e classifica postos de trabalho, aplica questionários e processa informações acerca dos trabalhadores.
                                    Atua nos processos de recrutamento, seleção e integração, assessora as relações de trabalho e sistemas de avaliação de desempenho.</p>
                            </div>
                        </div>
                        <div class="card" style="width: 50%;">
                            <img src="https://www.eteczonaleste.com.br/wp-content/uploads/2023/11/tyler-franta-iusJ25iYu1c-unsplash-scaled.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Administração</h5>

                                <p class="card-text">O TÉCNICO EM ADMINISTRAÇÃO é o profissional que participa da gestão dos recursos mercadológicos, humanos, financeiros, materiais e produtivos. Executa as rotinas administrativas, controla materiais, acompanha níveis de eficiência e produtividade
                                    e presta atendimento a clientes. Trabalha em equipe, otimiza recursos, propõe inovações e adota postura ética na condução das relações e atividades.</p>
                            </div>
                        </div>
                </div>
                <center>
            </div>
            <!-- footer com link para a pagina departamentos-->
            <div class="card text-center bg-dark" data-bs-theme="dark">
                <div class="card-header">
                    Leia Mais
                </div>
                <div class="card-body">
                    <h5 class="card-title">Entre em Contato</h5>
                    <p class="card-text">Entre em Contato Conosco Clicando Abaixo:</p>
                    <a href="{{ route('site.contato')}}" class="btn btn-danger">Clique!!</a> <br> <br>
                    <img src="https://www.eteczonaleste.com.br/wp-content/uploads/2023/09/Group-6-1-3.svg" alt="">
                </div>
                <div class="card-footer text-body-secondary">
                    Jobson Santiago - 3° DS - 2024
                </div>
            </div>
        </div>

</body>

</html>