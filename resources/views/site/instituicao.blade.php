<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Instituição</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="bg-secondary text-white">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <div class="container text-center bg-dark">
        <div class="row">
            <div class="col">
                <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
                    <div class="container-fluid">
                        <!-- importando bootstrap-->
                        <img src="https://www.eteczonaleste.com.br/wp-content/uploads/2023/09/Group-6-1-3.svg" alt=""> &nbsp;
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                            <div class="navbar-nav">
                                <a class="nav-link" aria-current="page" href="{{ route('site.index')}}">Principal</a>
                                <a class="nav-link" href="{{ route('site.cursos')}}">Cursos</a>
                                <a class="nav-link" href="{{ route ('site.contato')}}">Contato</a>
                                <a class="nav-link" href="{{ route('site.departamentos')}}">Departamentos</a>
                                <a class="nav-link active" href="{{ route ('site.instituicao')}}">Instituição</a>
                                <a class="nav-link" href="{{ route ('site.oportunidades')}}">Oportunidades</a>
                                <a class="nav-link" href="{{ route ('site.vestibulinho')}}">Vestibulinho</a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- carrossel-->
    <div class="container text-center bg-white text-dark">
        <div class="row">
            <div class="col">
                <br>
                <h3>Conheça a Instituição da Etec Zona Leste</h3> <br>
                <div id="carouselExampleCaptions" class="carousel slide">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://i.ytimg.com/vi/HDUT3DwQb0Y/maxresdefault.jpg" width="4000px" class="img-fluid" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="container text-center bg-white text-dark">
        <div class="row">
            <div class="col">
                &nbsp
            </div>
            <div class="col">
                &nbsp
            </div>
            <div class="col">
                &nbsp
            </div>
        </div>
        <div class="container text-center bg-white text-dark">
            <div class="row">
                <div class="col">
                    &nbsp
                </div>
                <div class="col">

                </div>
                <div class="col">
                    &nbsp
                </div>
            </div>
        </div>
        <!-- cards informações-->
        <div class="container text-center bg-white text-dark">
            <div class="row">
                <div class="col">
                    <div class="card mb-3">
                        <div class="card-body">

                            <h3 style="text-align: left;">Nossa História</h3><br>

                            <h5 style="text-align: left;" class="card-text">
                                Localizada estrategicamente na Avenida Águia de Haia, na Zona Leste de São Paulo, a Etec Zona Leste se destaca como um importante polo educacional na região.
                                Sua história remonta ao compromisso com a excelência educacional e o desenvolvimento profissional dos estudantes.
                            </h5> <br>

                            <h5 style="text-align: left;" class="card-text">
                                Sua história remonta ao compromisso com a excelência educacional e o desenvolvimento profissional dos estudantes.
                                Fundada em 2002, a Etec Zona Leste rapidamente se estabeleceu como uma instituição de referência no ensino técnico e tecnológico.
                            </h5> <br>

                            <h5 style="text-align: left;" class="card-text">
                                Desde o início, sua missão foi proporcionar oportunidades de aprendizado que preparassem os alunos para os desafios do mercado de trabalho, além de incentivá-los a buscar a excelência acadêmica.
                                Ao longo dos anos, a escola tem evoluído e se adaptado às demandas da sociedade e do mercado, ampliando sua oferta de cursos e modernizando suas instalações. Com uma equipe dedicada de professores e funcionários, a Etec Zona Leste oferece uma variedade de cursos técnicos em áreas como informática,
                                administração, eletrônica, entre outros, proporcionando aos alunos uma formação sólida e atualizada.
                            </h5> <br>

                            <h5 style="text-align: left;" class="card-text">
                                Além da excelência acadêmica, a Etec Zona Leste também se destaca por suas atividades extracurriculares, que incluem projetos de pesquisa, competições acadêmicas, eventos culturais e esportivos. Essas atividades complementam o currículo escolar,
                                promovendo o desenvolvimento integral dos estudantes e estimulando o trabalho em equipe, a liderança e a criatividade.
                            </h5> <br>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    &nbsp
                </div>
                <div class="col">
                    &nbsp
                </div>
                <div class="col">
                    &nbsp
                </div>
            </div>

            <div class="container text-center bg-white text-dark">
                <div class="row">
                    <div class="col">
                        <div class="card mb-3">
                            <div class="card-body">

                                <h3 style="text-align: left;">Nossa Infraestrutura</h3> <br>

                                <h5 style="text-align: left;" class="card-text">
                                    Localizada estrategicamente na Avenida Águia de Haia, na Zona Leste de São Paulo, a Etec Zona Leste se destaca como um importante polo educacional na região.
                                    Sua história remonta ao compromisso com a excelência educacional e o desenvolvimento profissional dos estudantes.
                                </h5> <br>

                                <h5 style="text-align: left;" class="card-text">
                                    Sua história remonta ao compromisso com a excelência educacional e o desenvolvimento profissional dos estudantes.
                                    Fundada em 2002, a Etec Zona Leste rapidamente se estabeleceu como uma instituição de referência no ensino técnico e tecnológico.
                                </h5> <br>

                                <h5 style="text-align: left;" class="card-text">
                                    Desde o início, sua missão foi proporcionar oportunidades de aprendizado que preparassem os alunos para os desafios do mercado de trabalho, além de incentivá-los a buscar a excelência acadêmica.
                                    Ao longo dos anos, a escola tem evoluído e se adaptado às demandas da sociedade e do mercado, ampliando sua oferta de cursos e modernizando suas instalações. Com uma equipe dedicada de professores e funcionários, a Etec Zona Leste oferece uma variedade de cursos técnicos em áreas como informática,
                                    administração, eletrônica, entre outros, proporcionando aos alunos uma formação sólida e atualizada.
                                </h5> <br>

                                <h5 style="text-align: left;" class="card-text">
                                    Além da excelência acadêmica, a Etec Zona Leste também se destaca por suas atividades extracurriculares, que incluem projetos de pesquisa, competições acadêmicas, eventos culturais e esportivos. Essas atividades complementam o currículo escolar,
                                    promovendo o desenvolvimento integral dos estudantes e estimulando o trabalho em equipe, a liderança e a criatividade.
                                </h5> <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container text-center bg-white text-dark">
                <div class="row">
                    <div class="col">
                        <div class="card mb-3">
                            <div class="card-body">


                                <h3 style="text-align: left;">Pátio</h3>
                                <h5 style="text-align: left;" class="card-text">
                                    Em 6 de abril de 2002, foi inaugurada a ETEC da Zona Leste de São Paulo, um centro de ensino que oferece uma gama diversificada de cursos técnicos e superiores.
                                    Localizada na Avenida Águia de Haia, 2683, Cidade A.E. Carvalho, São Paulo, a escola possui uma infraestrutura completa.
                                </h5> <br>

                                <h3 style="text-align: left;">Cozinha</h3> <br>

                                <h3 style="text-align: left;">Laboratórios</h3> <br>

                                <h3 style="text-align: left;">Biblioteca</h3> <br>

                                <h3 style="text-align: left;">Prédio Administrativo</h3> <br>

                                <h3 style="text-align: left;">Sala Maker</h3> <br>
                                <h5 style="text-align: left;" class="card-text">
                                    Com seu espaço voltado à tecnologia e construção de projetos, a Sala Maker possui notebooks, impressoras 3D, drones, óculos de realidade aumentada e ferramentas para a construção de projetos manuais.
                                    Além de ser um ótimo ambiente para estudar com os colegas, o ambiente possui uma diversidade de mesas e cadeiras dispostas, assim comportando um bom número de alunos e seus respectivos projetos.
                                </h5> <br>

                                <h3 style="text-align: left;">Quadras</h3> <br>
                                <h5 style="text-align: left;" class="card-text">
                                    O espaço oferece duas quadras poliesportivas aos estudantes, sendo uma ao ar livre, para o aproveitamento de dias ensolarados e, outra coberta, garantindo a prática das atividades mesmo em condições climáticas não-favoráveis.
                                    Essas instalações são utilizadas de maneira versátil, servindo como cenário nas aulas dinâmicas de Educação Física ou em eventos como gincanas, interclasses, festas juninas, pós-aulas e feiras tecnológicas.
                                </h5> <br>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container text-center bg-white text-dark">
                    <div class="row">
                        <div class="col">
                            &nbsp
                        </div>
                        <!-- footer com link para a pagina oportunidades-->
                        <div class="card text-center bg-dark" data-bs-theme="dark">
                            <div class="card-header">
                                Leia Mais
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Veja Nossas Oportunidades</h5>
                                <p class="card-text">Veja Nossas Oportunidades Clicando Abaixo:</p>
                                <a href="{{ route('site.oportunidades')}}" class="btn btn-danger">Clique!!</a> <br> <br>
                                <img src="https://www.eteczonaleste.com.br/wp-content/uploads/2023/09/Group-6-1-3.svg" alt="">
                            </div>
                            <div class="card-footer text-body-secondary">
                                Jobson Santiago - 3° DS - 2024
                            </div>
                        </div>
                        <div class="col">
                            &nbsp
                        </div>
                    </div>
                </div>
</body>

</html>