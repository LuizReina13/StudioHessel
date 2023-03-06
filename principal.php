<!-- Pagina principal onde se mantem a estrutura como um esqueleto (sidebar e header) e as mudanças ocorrem no container dentro do body
subindo as paginas separadamentes-->

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Meta tags-->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap e CSS-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/style.css" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />

    <title> Studio Hessel</title>
</head>


<body>
    <div class="main-container d-flex">
        <div class="sidebar" id="side_nav">
            <div class="header-box px-2 pt-3 pb-4 d-flex justify-content-between">
                <h1 class="fs-4"><span class="bg-white text-dark rounded shadow px-2 me-2">SH</span> <span class="text-white">Studio Hessel</span></h1>
                <button class="btn d-md-none d-block close-btn px-1 py-0 text-white"><i class="fal fa-stream"></i></button>
            </div>
        <!--Sidebar-->
        <ul class="list-unstyled px-2">
        <li id="dashboard_btn" class="active"><a href="#" class="text-decoration-none px-3 py-2 d-block"><i class="fal fa-home"></i> Dashboard</a></li>
        <li id="alunos_btn" class=""><a href="#" class="text-decoration-none px-3 py-2 d-block"><i class="fal fa-users"></i> Alunos</a></li>
        <li id="fichas_btn" class=""><a href="#" class="text-decoration-none px-3 py-2 d-block"><i class="fal fa-dumbbell"></i> Fichas</a></li>
        <li id="avaliacoes_btn" class=""><a href="#" class="text-decoration-none px-3 py-2 d-block"><i class="fal fa-address-card"></i> Avaliações</a></li>
        </ul>
        <hr class="h-color mx-2">

        <ul class="list-unstyled px-2">
            <li id="contatos_btn" class=""><a href="#" class="text-decoration-none px-3 py-2 d-block"><i class="fal fa-bars"></i> Contatos</a></li>
            <li id="notificacoes_btn" class=""><a href="#" class="text-decoration-none px-3 py-2 d-block"><i class="fal fa-bell"></i> Notificações</a></li>
        </ul>
        </div>
        <!--Navbar cabecalho-->
        <div class="content">
            <nav class="navbar navbar-expand-md navbar-dark bg-dark">
                <div class="container-fluid">
                    <div class="d-flex justify-content-between d-md-none d-block">
                  <a class="navbar-brand fs-4" href="#">Studio Hessel</a>
                  <button class="btn px-1 py-0 open-btn text-white"><i class="fal fa-stream"></i></button>
                  </div>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a id="close_btn" class="nav-link active" aria-current="page" href="#">Sair</a>
                      </li>
                    </ul>
                  </div>
                </div>
            </nav>
            <!--Container onde muda os conteudos-->
            <div id="container" class="dashboard-content px-3 py-4">
            </div>
        </div>
    </div>

    <!--Scripts-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="assets/custom.js"></script>
  </body>
</html>