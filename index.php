<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gama Academy - BootStrap</title>

    <!-- Chamada da biblioteca css do Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Chamada da biblioteca JS do bootstrap-->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>

    <!-- como fazer a chamada de uma biblioteca em css-->
    <!-- <link rel="stylesheet" href="../css/estilos.css"> -->

</head>

<body>
    <!-- Abertura do container para guardar a pagina -->
    <div class="container">

        <!-- Criando uma linha dentro do bootstrap  -->
        <div class="row">

            <!-- criando colunas para o menu da pagina  a somatória das colunas não pode ser maior que 12 
            lg monitores grandes, md notebook, sm tablet, e sx para o celular (não precisa codificar os sx)-->
            <div class="col-lg-3 col-md-2 col-sm-3 ">Home</div>
            <div class="col-lg-5 col-md-5 col-sm-3 ">Produtos</div>
            <div class="col-lg-2 col-md-3 col-sm-3 ">Link</div>
            <div class="col-lg-2 col-md-2 col-sm-3 "><a href ="../html/bootstrap_form.html">Contatos</a></div>
        </div>

        <!-- inserindo uma linha-->
        <div class="row">
            <br>
        </div>

        <!-- Criando um banner tipo carrossel -->
        <div class="row">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../imagens/imagem5.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../imagens/imagem6.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../imagens/imagem3.jpg " class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../imagens/imagem4.jpg " class="d-block w-100" alt="...">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <!-- inserindo uma linha-->
        <div class="row">
            <br>
        </div>
        <!-- criação de card group (legenda das imagens criadas na etapa anterior)-->
        <div class="row">
            <div class="card-deck">
                <div class="card">
                    <img src="../imagens/curso1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Curso de HTML</h5>
                        <p class="card-text">HTML (Linguagem de Marcação de HiperTexto) é o bloco de construção mais
                            básico da web. Define o significado e a estrutura do conteúdo da web. Outras tecnologias
                            além do HTML geralmente são usadas para descrever a aparência/apresentação (CSS) ou a
                            funcionalidade/comportamento (JavaScript) de uma página da web..</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                <div class="card">
                    <img src="../imagens/curso2.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Curso de XML</h5>
                        <p class="card-text">O XML, sigla para eXtensible Markup Language, é um tipo de linguagem de
                            marcação que define regras para codificar diferentes documentos. É muito utilizado para a
                            criação de Notas Fiscais Eletrônicas, também chamadas de NF-e, por armazená-las e ainda
                            garantir uma assinatura digital.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                <div class="card">
                    <img src="../imagens/curso3.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Curso de JavaScript</h5>
                        <p class="card-text">JavaScript é uma linguagem de programação que permite a você implementar
                            itens complexos em páginas web — toda vez que uma página da web faz mais do que simplesmente
                            mostrar a você informação estática — mostrando conteúdo que se atualiza em um intervalo de
                            tempo, mapas interativos ou gráficos 2D/3D animados, etc.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>

        </div>
        <div class ="row">
            <br>
        </div>
        <!-- card horizontal -->
        <div class="row">
            <div class="row row-cols-1 row-cols-md-2">
                <div class="col mb-4">
                    <div class="card">
                        <img src="../imagens/imagem6.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Lagos Canadenses</h5>
                            <p class="card-text">Lindos lagos incriveis</p>
                        </div>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="card">
                        <img src="../imagens/imagem5.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Lagos Finlândia</h5>
                            <p class="card-text">Lagos maravilhosos.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
    </div>
</body>

</html>