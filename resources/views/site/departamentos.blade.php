<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Departamentos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="app/resources/css/dep.css" />

</head>

<body class="bg-secondary text-white">
    <!-- importando bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <div class="container text-center">
        <!-- menu-->
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
                                <a class="nav-link" href="{{ route('site.cursos')}}">Cursos</a>
                                <a class="nav-link" href="{{ route ('site.contato')}}">Contato</a>
                                <a class="nav-link active" href="{{ route('site.departamentos')}}">Departamentos</a>
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
                        <h3 class="card-title">Departamentos da ETEC Zona Leste</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container text-center">


        <div class="row">
            <!-- cards informações-->
            <div class="col">

                <div class="card text-bg-dark">
                    <img id="cabecalhodep" src="https://ultimatum.com.br/wp-content/uploads/2021/01/Saiba-como-realizar-uma-reuniao-produtiva-em-seu-escritorio-ou-departamento-juridico-principal-01.jpg" class="img-thumbnail" alt="..." style="max-width: 100%; height: auto; filter: brightness(30%);">
                    <div class="card-img-overlay">
                        <br>
                        <h1 class="card-title">APM – Associação de Pais e Mestres:</h1>
                        <a class="btn btn-danger" href="#apm" role="button">Leia</a>
                    </div>
                </div>

                <div id="apm" class="card" style="width: 100%;">
                    <div class="card-body">
                        <p class="card-text">A Associação de Pais e Mestres (APM) é uma instituição privada, auxiliar da escola, e tem por finalidade apoiar o processo de gestão escolar, a assistência ao aluno e a integração escola-família-comunidade.
                            Trata-se de uma entidade com objetivos sociais e educativos, sem fins lucrativos.
                            Para alcançar seus objetivos, as APMs desenvolvem projetos, conforme plano anual, visando ao apoio nas áreas educacional, assistencial, de gestão, conservação e manutenção, convivência e comunicação.
                            A parceria entre a APM e o CEETEPS é instrumentalizada por Acordo de Cooperação e obedece a minuta-padrão do Decreto nº 67.345/2022.</p>


                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Seg</th>
                                    <th scope="col">Qua</th>
                                    <th scope="col">Sex</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>08h00min. às 09h30min.</td>
                                    <td>08h00min. às 09h30min.</td>
                                    <td>08h00min. às 09h30min.</td>
                                </tr>
                                <tr>
                                    <td>14h30min. às 15h30min.</td>
                                    <td>14h30min. às 15h30min.</td>
                                    <td>14h30min. às 15h30min.</td>
                                </tr>
                                <tr>
                                    <td>9h30min. às 20h30min.</td>
                                    <td>19h30min. às 20h30min. </td>
                                    <td>19h30min. às 20h30min. </td>
                                </tr>
                            </tbody>
                        </table>
                        <h4>Equipe:</h4>
                        <p> Diretora de Serviços Acadêmicos – Solange Mariano Borim <br>
                            Agente Técnico e Administrativo – Diva Neide Bortoli <br>
                            Agente Técnico e Administrativo – Ênio Ramos Araújo <br>
                            Agente Técnico e Administrativo – Edilene Mary Schimith </p>

                    </div>
                </div>
                <div class="card" style="width: 100%;">
                    <div class="card text-bg-dark">
                        <img src="https://direcionalescolas.com.br/wp-content/uploads/2018/01/o-coordenador-pedagogico-como-articulador-do-projeto-politico-pedagogico-e-a-contribuicao-da-pedagogia-freireana-para-sua-pratica.jpg" alt="..." style="max-width: 100%; height: auto; filter: brightness(30%);">
                        <div class="card-img-overlay">
                            <br>
                            <h1 class="card-title">Coordenação de Cursos:</h1>
                            <a class="btn btn-danger" href="#codcursos" role="button">Leia</a>
                        </div>
                    </div>
                    <div id="codcursos" class="card-body">
                        <h4 class="card-title">Coordenação de Cursos:</h4>
                        <p class="card-text">As Coordenações de Curso são responsáveis pelo conjunto de ações destinadas ao planejamento do ensino, à supervisão de sua execução,
                            ao controle das atividades docentes em relação às diretrizes didáticas pedagógicas e administrativas, bem como pela otimização dos recursos físicos e
                            didáticos disponíveis para os cursos mantidos pelas Etecs.</p>

                        <h4>Coordenador Novotec:</h4>
                        <p> Giovanna Littiere (Novotec Administração) <br>
                            Leandro (Novotec Logística) <br>
                            <b>Marcelo Collado (Novotec Desenvolvimento de Sistemas)</b> <br>
                            Cibelle Ferreria Francoso (Novotec RH) <br>
                            Jeferson Roberto de Lima (Novotec Desenvolvimento de Sistemas AMS) <br>
                        </p>

                        <h4>Coordenador Curso Técnico:</h4>

                        <p> Monyse Tesser Panacci (Técnico em Adminstração / Técnico em Contabilidade) <br>
                            Ediney Ciasi Barreto (Técnico em Desenvolvimento de Sistemas) <br>
                            Silvano Lack de Brito (Técnico em Logística / Técnico em Serviços Jurídicos) <br>
                        </p>

                    </div>
                </div>
                <div class="card" style="width: 100%;">
                    <div class="card text-bg-dark">
                        <img src="https://media.gazetadopovo.com.br/2020/02/04113925/02.04-JOSI-960x540.jpg" alt="..." style="max-width: 100%; height: auto; filter: brightness(30%);">
                        <div class="card-img-overlay">
                            <br>
                            <h1 class="card-title">Direção:</h1>
                            <a class="btn btn-danger" href="#direcao" role="button">Leia</a>
                        </div>
                    </div>
                    <div id="direcao" class="card-body">
                        <h4 class="card-title">Equipe Direção:</h4>
                        <p class="card-text">A Direção Escolar é o departamento executivo encarregado da organizar as atividades administrativas e pedagógicas da Etec. Suas atribuições, indicação e designação,
                            são realizadas de acordo com o Capítulo IV, Seção I do Regimento Comum das Etecs (Deliberação CEETEPS nº 87, de 08 de dezembro de 2022).</p>

                        <h4>Atribuições da Direção Escolar</h4>
                        <p style="text-align: left;"> De acordo com o artigo 20 do Regimento Comum das Etecs, o Diretor de Etec, sem prejuízo de outras constantes em documento próprio do CEETEPS e da legislação, terá as seguintes atribuições: <br>

                            1 – garantir as condições para o desenvolvimento da gestão democrática do ensino, na forma prevista pela legislação e neste Regimento; <br>
                            2 – promover a elaboração do projeto político-pedagógico da escola; <br>
                            3 – coordenar a elaboração, o acompanhamento, a avaliação e o controle da execução do Plano Plurianual de Gestão;<br>
                            4 – gerenciar os recursos físicos, materiais, humanos e financeiros para atender às necessidades da escola a curto, médio e longo prazos; <br>
                            5 – coordenar o planejamento, execução, controle e avaliação das atividades da escola com o objetivo de garantir a melhoria dos processos; <br>
                            6 – garantir o cumprimento dos conteúdos curriculares, das cargas horárias e dos dias letivos previstos na legislação vigente; <br>
                            7 – garantir os meios para a recuperação de alunos de menor rendimento e em progressão parcial, seja ela na forma presencial ou virtual. <br>
                            8 – assegurar o cumprimento da legislação, bem como dos regulamentos, diretrizes e normas emanadas da administração superior e da Administração Central do CEETEPS; <br>
                            9 – expedir diplomas, certificados e outros documentos escolares, responsabilizando-se por sua autenticidade e exatidão; <br>
                            10 – promover estudos fundamentados por indicadores institucionais e gerenciar ações visando à oferta de cursos e seu contínuo aprimoramento, assim como de programas, dos recursos físicos, materiais e humanos que compõem a escola; <br>
                            11 – administrar e responsabilizar-se pelo patrimônio do CEETEPS, observadas as normas e diretrizes legais e infralegais aplicáveis, fomentando estratégias para controle, manutenção, preservação e desfazimento dos bens inservíveis; <br>
                            12 – promover ações para a integração escola-família e comunidade-empresa, apoiado em indicadores de fontes reconhecidas; <br>
                            13 – coordenar a elaboração de projetos, submetendo-os à aprovação dos órgãos competentes, acompanhar seu desenvolvimento e avaliar seus resultados; <br>
                            14 – criar condições e estimular experiências inovadoras para o aprimoramento do processo educacional; <br>
                            15 – integrar as ações dos serviços prestados pela escola; <br>
                            16 – criar procedimentos que favoreçam a comunicação e o fluxo de informações junto à Comunidade Escolar; <br>
                            17 – convocar para as reuniões ordinárias e extraordinárias, de forma presencial ou virtual, os representantes dos órgãos colegiados discentes, docentes, servidores e membros dos demais segmentos da comunidade escolar; <br>
                            18 – desempenhar outras atividades correlatas e afins. <br>
                        </p>

                        <h4>Diretora</h4>
                        <p>Amanda Bueno </p>

                        <h4>Assessor Técnico Administrativo II </h4>
                        <p>Patrick Moreno da Silva </p>

                    </div>
                </div>
                <!-- footer com link para a pagina instituição-->
                <div class="card text-center bg-dark" data-bs-theme="dark">
                    <div class="card-header">
                        Leia Mais
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Conheça nossa Instituição: </h5>
                        <p class="card-text">Conheça nossa Instituição Clicando Abaixo:</p>
                        <a href="{{ route('site.instituicao')}}" class="btn btn-danger">Clique!!</a> <br> <br>
                        <img src="https://www.eteczonaleste.com.br/wp-content/uploads/2023/09/Group-6-1-3.svg" alt="">
                    </div>
                    <div class="card-footer text-body-secondary">
                        Jobson Santiago - 3° DS - 2024
                    </div>
                </div>
            </div>

</body>

</html>