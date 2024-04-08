<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contatos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="bg-secondary text-white">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
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
                                <a class="nav-link" href="{{ route('site.cursos')}}">Cursos</a>
                                <a class="nav-link active" href="{{ route ('site.contato')}}">Contato</a>
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
                        <h3 class="card-title">Contatos da ETEC Zona Leste</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container text-center">
        <div class="row">
            <div class="col">
                <div class="card" style="width: 100%;">
                    <div class="card-body">
                        <h5 class="card-title">Nossos Contatos:</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">E-mail: </h6>
                        <p class="card-text">e211dir@cps.sp.gov.br</p>

                        <h6 class="card-subtitle mb-2 text-body-secondary"> Telefones: </h6>
                        <p class="card-text">(11) 2045-4025 | (11) 2045-4026 | (11) 2045-4009</p>

                        <a class="navbar-brand" href="https://www.instagram.com/eteczonalesteoficial/">
                            <img src="https://png.pngtree.com/png-clipart/20180524/ourmid/pngtree-instagram-social-media-icon-png-image_3572472.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                            Instagram
                        </a>
                        <a class="navbar-brand" href="https://www.facebook.com/Eteczonalesteoficial">
                            <img src="https://logodownload.org/wp-content/uploads/2014/09/facebook-logo-1-2.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                            Facebook
                        </a>
                        <a class="navbar-brand" href="https://www.youtube.com/@etecdazonaleste2949">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQRjRCZNMkdWjtDackqKh4rW-fPGRuDr53hDNweMxeOsg&s" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                            YouTube
                        </a>
                        
                    </div>
                </div>
                <div class="card" style="width: 100%;">
                    <div class="card-body">
                        <h5 class="card-title">Visite-nos:</h5>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3658.2589435852055!2d-46.47838692391547!3d-23.52318726019227!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce616495555555%3A0x8076d1577db86cf1!2sEtec%20da%20Zona%20Leste!5e0!3m2!1spt-BR!2sbr!4v1712488631880!5m2!1spt-BR!2sbr" 
                            width="70%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                        
                    </div>
                </div>
                <div class="card text-center bg-dark" data-bs-theme="dark">
                    <div class="card-header">
                        Leia Mais
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Veja Nossos Departamentos</h5>
                        <p class="card-text">Veja Nossos Departamentos Clicando Abaixo:</p>
                        <a href="{{ route('site.departamentos')}}" class="btn btn-danger">Clique!!</a> <br> <br>
                        <img src="https://www.eteczonaleste.com.br/wp-content/uploads/2023/09/Group-6-1-3.svg" alt="">
                    </div>
                    <div class="card-footer text-body-secondary">
                        Jobson Santiago - 3° DS - 2024
                    </div>
                </div>
            </div>

</body>

</html>