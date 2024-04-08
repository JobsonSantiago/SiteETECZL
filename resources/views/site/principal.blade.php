<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Página Principal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="bg-secondary text-white">
    <!-- importando bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <div class="container text-center bg-dark">
        <div class="row">
            <div class="col">
                <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
                    <div class="container-fluid">
                        <img src="https://www.eteczonaleste.com.br/wp-content/uploads/2023/09/Group-6-1-3.svg" alt=""> &nbsp;
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                                <!-- menu-->
                            <div class="navbar-nav">
                                <a class="nav-link active" aria-current="page" href="{{ route('site.index')}}">Principal</a>
                                <a class="nav-link" href="{{ route('site.cursos')}}">Cursos</a>
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
    <div class="container text-center bg-white text-dark">
        <div class="row">
            <div class="col">
                <br>
                <h3>Conheça a Etec Zona Leste: Excelência em Educação Técnica na Região da Zona Leste de São Paulo</h3> <br>
                    <!--carrossel-->
                <div id="carouselExampleCaptions" class="carousel slide">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://www.eteczonaleste.com.br/wp-content/uploads/2023/09/image-21-1.jpg" width="4000px" class="img-fluid" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://www.eteczonaleste.com.br/wp-content/uploads/2023/09/image-21-1.jpg" width="3000px" class="img-fluid" alt="...">

                        </div>
                        <div class="carousel-item">
                            <img src="https://www.eteczonaleste.com.br/wp-content/uploads/2023/09/image-21-1.jpg" width="3000px" class="img-fluid" alt="...">

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
                    <h5>A Escola Técnica da Zona Leste é uma instituição pública, localizada na Av. Aguia de Haia, 2633
                        - A.E Carvalho.</h5>
                </div>
                <div class="col">
                    &nbsp
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
            <div class="container text-center">
                <div class="row">
                    <div class="col">
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="https://lh3.googleusercontent.com/p/AF1QipMdskwzTqtMN8jbqpl37MAh_hJ1cDjVNXGb10nL=s680-w680-h510" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Descubra um futuro brilhante na ETEC Zona Leste</h5>
                                        <p class="card-text">Na ETEC Zona Leste, a excelência educacional é a nossa
                                            prioridade máxima. Nossos cursos técnicos são ministrados por professores
                                            altamente qualificados, proporcionando uma educação satisfatória que combina
                                            conhecimentos acadêmicos sólidos com habilidades práticas essenciais para o
                                            mercado de trabalho.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="https://lh3.googleusercontent.com/p/AF1QipO9YzKBoeKAQR6GmVUF257NeSEivVXwgri_l9L8=s680-w680-h510" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Aprendizados além da sala de aula</h5>
                                        <p class="card-text">Buscamos levar o conhecimento para além da sala de aula tradicional. Incentivamos o cultivo de conexões por meio de networking e oportunidades de carreira.
                                            Além do sucesso acadêmico, nos preocupamos com o desenvolvimento pessoal de nosso corpo estudantil, oferecemos suporte abrangente, orientação vocacional e programas extracurriculares.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="https://www.eteczonaleste.com.br/wp-content/uploads/2024/03/8115dc6b-d87e-4827-8788-99beab8ec8c6.jpeg" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Infraestrutura Moderna</h5>
                                        <p class="card-text">Contamos com uma infraestrutura moderna, laboratórios e salas equipadas com televisões, computadores, notebooks, impressoras 3D e
                                            muitos outros componentes propícios aos projetos que desenvolvemos durante a jornada dos estudantes.
                                            Na ETEC Zona Leste, você encontrará um ambiente favorável para o impulsionar seu crescimento acadêmico e profissional.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    &nbsp
                </div>
                <div class="col">
                    <h4>Nossos Cursos</h4>
                </div>
                <div class="col">
                    &nbsp
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
                <!-- cards cursos-->
            <div class="row">
                <div class="col">
                    <div class="card" style="width: 100%">
                        <img src="https://blog.xpeducacao.com.br/wp-content/uploads/2022/07/analise-e-desenvolvimento-de-sistemas-o-que-faz.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Desenvolvimento de Sistemas</h5>
                        </div>
                    </div>
                    <div class="card" style="width: 100%;">
                        <img src="https://www.eteczonaleste.com.br/wp-content/uploads/2023/11/charlesdeluvio-OqxPH8c1UFE-unsplash-1-1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Contabilidade</h5>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 100%;">
                        <img src="https://www.eteczonaleste.com.br/wp-content/uploads/2023/11/tyler-franta-iusJ25iYu1c-unsplash-scaled.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Logistica</h5>
                        </div>
                    </div>
                    <div class="card" style="width: 100%;">
                        <img src="https://www.eteczonaleste.com.br/wp-content/uploads/2023/11/tingey-injury-law-firm-yCdPU73kGSc-unsplash-scaled.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Serviços Juridicos</h5>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 100%;">
                        <img src="https://www.eteczonaleste.com.br/wp-content/uploads/2023/11/campaign-creators-gMsnXqILjp4-unsplash-scaled.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Recursos Humanos</h5>
                        </div>
                    </div>
                    <div class="card" style="width: 100%;">
                        <img src="https://www.eteczonaleste.com.br/wp-content/uploads/2023/11/tyler-franta-iusJ25iYu1c-unsplash-scaled.jpg" class="card-img-top" alt="...">

                        <div class="card-body">
                            <h5 class="card-title">Administração</h5>
                        </div>
                    </div>
                </div>
            </div>
                <!-- footer com link para a pagina cursos-->
            <div class="container text-center bg-white text-dark">
                <div class="row">
                    <div class="col">
                        &nbsp
                    </div>
                    <div class="card text-center bg-dark" data-bs-theme="dark">
                        <div class="card-header">
                            Leia Mais
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Veja Nossos Cursos</h5>
                            <p class="card-text">Veja Nossos Cursos Clicando Abaixo:</p>
                            <a href="{{ route('site.cursos')}}" class="btn btn-danger">Clique!!</a>
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