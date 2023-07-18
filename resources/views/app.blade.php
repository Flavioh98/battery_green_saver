<!doctype html>
<html lang="pt-BR">

<head>
    <title>Battery Green Saver</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <!-- Biblioteca de ícones -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- CSS do plugin lightbox -->
    <link rel="stylesheet" href="{{url('/')}}/css/lightbox.min.css">

    <!-- AOS animate CSS  -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- CSS personalizado -->
    <link rel="stylesheet" href="{{url('/')}}/css/style.css">
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-xl navbar-dark fixed-top fundo-verde">
            <div class="container-fluid padd-padrao">
                <a class="navbar-brand" href="#">
                    <img src="{{url('/')}}/imagens/LogoPrincipal.png" width="60" alt="">
                    Battery Green Saver</a>
                <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Página Inicial</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#noticias">Notícias</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#coleta">Pontos de Coleta</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#cadastro">Cadastre-se</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="{{route('politica')}}">Política de Privacidade</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    </header>

    <main class="mt-5 pt-5">
        <div class="container-flui padd-padrao mt-10 pt-10">
            <h1 data-aos="fade-right" data-aos-duration="1000" >Battery Green Saver</h1>
            <!-- <p data-aos="fade" data-aos-duration="3000">Dev by</p> -->
        </div>

        <nav class="navbar navbar-light bg-light">
            <div class="container-fluid">
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </nav>

        <!-- banner superior - carousel  -->
        <div id="banner-top" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#banner-top" data-bs-slide-to="0" class="active" aria-current="true"
                    aria-label="First slide"></li>
                <li data-bs-target="#banner-top" data-bs-slide-to="1" aria-label="Second slide"></li>
                <li data-bs-target="#banner-top" data-bs-slide-to="2" aria-label="Third slide"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img src="{{url('/')}}/imagens/BateriaPreta.JPEG" class="w-100 d-block" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h2>Descarte de Pilhas</h2>
                        <p>Descartar corretamente faz bem!</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{url('/')}}/imagens/CelularConector.JPEG" class="w-100 d-block" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h2>Pilha Verde</h2>
                        <p>Green Pilha</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{url('/')}}/imagens/PilhaAmarela.JPEG" class="w-100 d-block" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h2>Descarte Verde</h2>
                        <p>Separar ao descartar</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#banner-top" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bg-preto" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#banner-top" data-bs-slide="next">
                <span class="carousel-control-next-icon bg-preto" aria-hidden="true"></span>
                <span class="visually-hidden">Próximo</span>
            </button>
        </div>
        <!-- final banner topo  -->

        <!-- Início Seção Notícias -->
        <section id="noticias" class="mt-5 pt-5 mb-2">
            <h2 class="sub-titulo mb-5 border-bottom border-5 border-secondary">Como fazer o descarte de pilhas e
                baterias do jeito certo?</h2>
            <div class="container" data-aos="fade-left">
                <div class="row">
                    <div class="col-md-12 m-12 m-md-0 bg-primary p-2 text-white">
                        <h3></h3>
                        <p class="fs-5">
                            Saiba que não faltam centros de coleta responsáveis pelo descarte de pilhas e baterias,
                            sendo que essa é uma etapa importante para a preservação do meio ambiente. Graças a esses
                            produtos, os eletroeletrônicos passaram a ser portáteis e ajudam a facilitar a rotina de
                            muitas famílias.
                        </p>
                        <p class="fs-5">
                            Com a ajuda dessas fontes de energia, várias praticidades melhoraram a vida das pessoas,
                            como as pilhas colocadas em relógios de pulsos e as baterias usadas nos aparelhos auditivos.
                            Porém, esses materiais precisam ser descartados adequadamente e separados dos demais
                            resíduos da casa com cuidado.
                        </p>
                        <p class="fs-5">
                            <strong>Uso e descarte de pilhas e baterias</strong> é uma questão delicada, por conta dos
                            problemas ambientais causados pela destinação incorreta.
                        </p>
                        <p class="fs-5">
                            As pilhas e baterias são compostas por substâncias químicas e metais pesados e se forem
                            disponibilizadas em locais inadequados podem causar contaminação tanto do solo quanto das
                            águas.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section id="noticias" class="mt-5 pt-5 mb-2">
            <h2 class="sub-titulo mb-5 border-bottom border-5 border-secondary">Descarte mais comum de pilhas e baterias
            </h2>
            <div class="container" data-aos="fade-left">
                <div class="row">
                    <div class="col-md-12 m-12 m-md-0 bg-primary p-2 text-white">
                        <h3></h3>
                        <p class="fs-5">
                            Para entender como é feito o <strong>descarte de pilhas e baterias</strong>, é preciso ter
                            em mente que elas não podem ser descartadas junto do lixo doméstico, mesmo que a prefeitura
                            faça esse tipo de coleta. Assim, o descarte inadequado costuma contribuir para que os
                            resíduos perigosos envenenem o solo e até a água potável.
                        </p>
                        <p class="fs-5">
                            Essa contaminação é muito perigosa, porque o contato direto com esses materiais tóxicos
                            provoca o surgimento de doenças no organismo, prejudicando desde o pulmão até o sistema
                            nervoso central. Devido ao alto grau de toxicidade, o descarte de pilhas e baterias tem tido
                            cada vez mais relevância.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section id="noticias" class="mt-5 pt-5 mb-2">
            <h2 class="sub-titulo mb-5 border-bottom border-5 border-secondary">Consequências do descarte incorreto</h2>
            <div class="container" data-aos="fade-left">
                <div class="row">
                    <div class="col-md-12 m-12 m-md-0 bg-primary p-2 text-white">
                        <h3></h3>
                        <p class="fs-5">
                            O <strong>descarte de pilhas e baterias</strong> junto ao lixo comum acaba indo para um
                            aterro sanitário, onde os objetos podem ser esmagados ou perfurados ao longo da coleta e do
                            processamento dos outros resíduos. Por conta disso, pilhas e baterias são as principais
                            causadoras de incêndios nos depósitos a céu aberto e nos centros de reciclagem.
                        </p>
                        <p class="fs-5">
                            As baterias que são descartadas em lixeiras domésticas acabam pegando fogo ou explodindo
                            quando são danificadas por máquinas de separação de lixos, por exemplo. Dependendo da
                            dimensão desse estrago, pessoas são retiradas de suas casas, e a região é esvaziada até que
                            seja seguro retornar.
                        </p>
                        <p class="fs-5">
                            Vale lembrar que, enquanto estão funcionando, pilhas e baterias não trazem nenhum tipo de
                            risco para você ou sua família. O grande problema está no interior delas, por conta dos
                            metais pesados, que não podem ser danificados ou estourados, para que sejam descartados da
                            forma mais adequada possível.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section id="noticias" class="mt-5 pt-5 mb-2">
            <h2 class="sub-titulo mb-5 border-bottom border-5 border-secondary">Consequências do descarte incorreto</h2>
            <div class="container" data-aos="fade-left">
                <div class="row">
                    <div class="col-md-12 m-12 m-md-0 bg-primary p-2 text-white">
                        <h3></h3>
                        <p class="fs-5">
                            O <strong>descarte de pilhas e baterias</strong> junto ao lixo comum acaba indo para um
                            aterro sanitário, onde os objetos podem ser esmagados ou perfurados ao longo da coleta e do
                            processamento dos outros resíduos. Por conta disso, pilhas e baterias são as principais
                            causadoras de incêndios nos depósitos a céu aberto e nos centros de reciclagem.
                        </p>
                        <p class="fs-5">
                            As baterias que são descartadas em lixeiras domésticas acabam pegando fogo ou explodindo
                            quando são danificadas por máquinas de separação de lixos, por exemplo. Dependendo da
                            dimensão desse estrago, pessoas são retiradas de suas casas, e a região é esvaziada até que
                            seja seguro retornar.
                        </p>
                        <p class="fs-5">
                            Vale lembrar que, enquanto estão funcionando, pilhas e baterias não trazem nenhum tipo de
                            risco para você ou sua família. O grande problema está no interior delas, por conta dos
                            metais pesados, que não podem ser danificados ou estourados, para que sejam descartados da
                            forma mais adequada possível.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section id="noticias" class="mt-5 pt-5 mb-2">
            <h2 class="sub-titulo mb-5 border-bottom border-5 border-secondary">Dicas para o descarte correto de pilhas
                e baterias</h2>
            <div class="container" data-aos="fade-left">
                <div class="row">
                    <div class="col-md-12 m-12 m-md-0 bg-primary p-2 text-white">
                        <h3></h3>
                        <p class="fs-5">
                            Na hora de fazer o <strong>descarte correto de pilhas e baterias usadas</strong>, é
                            importante armazenar esses materiais separados dos outros tipos de resíduos. O recomendado é
                            que você embale esses itens em um plástico bem resistente, evitando que eles tenham contato
                            com a umidade.
                        </p>
                        <p class="fs-5">
                            Para evitar que esses objetos causem vazamentos indesejados, consulte <strong>onde descartar
                                pilhas e baterias</strong> em postos de coleta e armazenamento na região em que você
                            mora. Saiba que as empresas que fabricam esses materiais têm obrigação de instalar esses
                            locais, assim como é sua responsabilidade fazer o descarte correto.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Final seção Notícias  -->


        <!-- Início seção Pontos de Coleta  -->
        <section id="coleta" class="mt-5 pt-5 mb-2" data-aos="fade-up" data-aos-duration="1000">
            <h2 class="sub-titulo border-5 border-bottom border-secondary">
                COLETA DE PILHAS E BATERIAS
            </h2>
            <p class="text-center">Saiba mais informações sobre o serviço de coleta de pilhas e baterias</p>

            <div class="container">
                <div class="row">
                    <div class="col-md-4 m-3 m-md-0">

                        <p>
                            <button class="btn btn-secondary w-100" type="button" data-bs-toggle="collapse" data-bs-target="#contentId" aria-expanded="false"
                                    aria-controls="contentId">
                                    Região Central
                            </button>
                        </p>
                        
                        <div class="collapse" id="contentId"> 

                            <div class="card">
                                <div class="card-header bg-secondary text-center text-white">
                                </div> 
                                
                                <div class="card-body">
                                    <ul class="list-group list-group-flush text-center">
                                        @foreach($Central as $localCentro)
                                            <li class="list-group-item"><strong>{{$localCentro->Nome}}</strong>
                                                <p>{{$localCentro->Endereco}}</p>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                                
                            </div> 
                        </div>
                    </div>

                    <div class="col-md-4 m-3 m-md-0">
                    
                        <p>
                            <button class="btn btn-secondary w-100" type="button" data-bs-toggle="collapse" data-bs-target="#contentId" aria-expanded="false"
                                    aria-controls="contentId">
                                    Região Leste
                            </button>
                        </p>
                        
                        <div class="collapse" id="contentId">
                            <div class="card">
                                <div class="card-header bg-secondary text-center text-white">
                                </div>

                                <div class="card-body">
                                    <ul class="list-group list-group-flush text-center">
                                    @foreach($Leste as $localLeste)
                                            <li class="list-group-item"><strong>{{$localLeste->Nome}}</strong>
                                                <p>{{$localLeste->Endereco}}</p>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>

                            </div>    
                        </div>
                    </div>

                    <div class="col-md-4 m-3 m-md-0">

                        <p>
                            <button class="btn btn-secondary w-100" type="button" data-bs-toggle="collapse" data-bs-target="#contentId" aria-expanded="false"
                                    aria-controls="contentId">
                                    Região Norte
                            </button>
                        </p>
                        
                        <div class="collapse" id="contentId"> 
                            <div class="card">
                                <div class="card-header bg-secondary text-center text-white">
                                </div>

                                <div class="card-body">
                                    <ul class="list-group list-group-flush text-center">
                                    @foreach($Norte as $localNorte)
                                            <li class="list-group-item"><strong>{{$localNorte->Nome}}</strong>
                                                <p>{{$localNorte->Endereco}}</p>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 m-3 m-md-0">
                        <p>
                            <button class="btn btn-secondary w-100" type="button" data-bs-toggle="collapse" data-bs-target="#contentId" aria-expanded="false"
                                    aria-controls="contentId">
                                    Região Oeste
                            </button>
                        </p>
                        
                        <div class="collapse" id="contentId"> 
                            <div class="card">
                                <div class="card-header bg-secondary text-center text-white">
                                </div>

                                <div class="card-body">
                                    <ul class="list-group list-group-flush text-center">
                                    @foreach($Oeste as $localOeste)
                                            <li class="list-group-item"><strong>{{$localOeste->Nome}}</strong>
                                                <p>{{$localOeste->Endereco}}</p>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>


                         <div class="col-md-4 m-3 m-md-0">

                            <p>
                            <button class="btn btn-secondary w-100" type="button" data-bs-toggle="collapse" data-bs-target="#contentId" aria-expanded="false"
                                    aria-controls="contentId">
                                    Região Sudeste
                            </button>
                        </p>
                        
                        <div class="collapse" id="contentId"> 
                            <div class="card">
                                <div class="card-header bg-secondary text-center text-white">
                                </div>

                                <div class="card-body">
                                    <ul class="list-group list-group-flush text-center">
                                    @foreach($Sudeste as $localSudeste)
                                            <li class="list-group-item"><strong>{{$localSudeste->Nome}}</strong>
                                                <p>{{$localSudeste->Endereco}}</p>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>

                         <div class="col-md-4 m-3 m-md-0">
                            <p>
                            <button class="btn btn-secondary w-100" type="button" data-bs-toggle="collapse" data-bs-target="#contentId" aria-expanded="false"
                                    aria-controls="contentId">
                                    Região Sul
                            </button>
                        </p>
                        
                        <div class="collapse" id="contentId"> 
                            <div class="card">
                                <div class="card-header bg-secondary text-center text-white">
                                </div>

                                <div class="card-body">
                                    <ul class="list-group list-group-flush text-center">
                                    @foreach($Sul as $localSul)
                                            <li class="list-group-item"><strong>{{$localSul->Nome}}</strong>
                                                <p>{{$localSul->Endereco}}</p>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>


        </section>
        <!-- final seção Pontos de Coleta   -->

        <!-- Início seção cadastro -->
        <section id="cadastro" class="mt-5 pt-5 mb-2">
            <h2 class="sub-titulo border-5 border-secondary border-bottom mb-3">
                Cadastre-se
            </h2>
            <p class="text-center">Entre em contato conosco para saber da possibilidade de descarte de outros materiais (Exemplo: Bateria de carro)</p>

            <form action="processa.php" method="POST" enctype="multipart/form-data" class="container">
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome:</label>
                    <input type="text" class="form-control" name="nome" id="nome" placeholder="Digite seu nome">
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" class="form-control" name="email" id="email"
                        placeholder="Exemplo: seuemail@mail.com">
                </div>

                <p>Sexo:</p>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="sexo" checked value="Feminino">
                    <label class="form-check-label" for="sexo">Feminino</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="sexo" value="Masculino">
                    <label class="form-check-label" for="sexo">Masculino</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="sexo" value="Outros">
                    <label class="form-check-label" for="sexo">Outros</label>
                </div>

                <!-- <p class="mt-4">Envie uma foto para nós do que irá descartar (opcional)</p>
                <div class="mb-3">
                    <label for="arquivo" class="form-label">Selecione o arquivo</label>
                    <input type="file" class="form-control" name="arquivo" placeholder=".jpg, .png, .gif">
                </div> -->

                <div class="mb-3">
                    <label for="estados" class="form-label">Em qual bairro você mora?</label>
                    <div class="input-group">
                        <span class="input-group-text">Bairro</span>
                        <input type="text" aria-label="First name" class="form-control">
                      </div>
                </div>

                <div class="mb-3">
                    <label for="cidades" class="form-label">Cidade</label>
                    <div class="input-group">
                        <span class="input-group-text">Cidade</span>
                        <input type="text" aria-label="First name" class="form-control">
                      </div>
                </div>

                <button type="submit" class="btn btn-primary">Enviar</button>

            </form>
        </section>
        <!-- final seção cadastro -->


    </main>

    <footer class="p-5 mt-5 fundo-verde text-light">
        <p>Onde estamos:</p>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3667.7168512399376!2d-45.861094885029395!3d-23.180532184873318!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cc4bc8557f3105%3A0x26bc31b7142cc60f!2sR.%20Saigiro%20Nakamura%2C%20400%20-%20Vila%20Industrial%2C%20S%C3%A3o%20Jos%C3%A9%20dos%20Campos%20-%20SP%2C%2012220-280!5e0!3m2!1spt-PT!2sbr!4v1680630934285!5m2!1spt-PT!2sbr"
            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>

        <br>

        <iframe width="100%" height="600" src="https://www.youtube.com/embed/Gqk161ll21s" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen>
        </iframe>

        <!-- Rodapé da página -->

        <div class="container-fluid">
            <div class="card" >
                <div class="row g-0">
                    <div class="col-md-3">
                        <img src="{{url('/')}}/imagens/LogoPrincipal.png" class="img-fluid rounded-start" alt="">
                    </div>
                    <div class="col-md-4">
                        <div class="card-body">
                            <h5 class="card-title text-dark">Baterry Green Saver</h5>
                            <p class="card-text text-dark">

                                Rua Saigiro Nakamura, 400
                                Vila Industrial - São José dos Campos - SP
                                CEP: 12220-280
                                Telefone para contato: +55 12 3947-1265

                            </p>
                            <p class="card-text"><small class="text-muted">Horário de Funcionamento: de Segunda a Sexta
                                    das 8h às 17h,
                                    Feriados não tem expediente.</small></p>
                        </div>
                    </div> 
                    <div class="col-md-5">

                    </div>
                </div>
            </div>
        </div>


        Desenvolvido por &copy; Flávio Henrique Oliveira

    </footer>

    <a href="#" class="seta-sobe">
        <i class="fa-sharp fa-solid fa-arrow-up"></i>
    </a>




    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
        </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
        </script>

    <!-- JQUERY -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <!-- JS do Lightbox  -->
    <script src="js/lightbox.min.js"></script>

    <!-- JS AOS animate -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- JS personalizado -->
    <script src="js/code.js"></script>
</body>

</html>