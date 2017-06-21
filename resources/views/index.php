<!DOCTYPE html>
<html lang="es" ng-app="livronaoseemprestaApp">
<head>
    <link rel="stylesheet" type="text/css" href="components/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="components/bootstrap/css/bootstrap-theme.css">
    <link rel="stylesheet" type="text/css" href="components/angular-bootstrap/ui-bootstrap.css">

    <title>Livro Não Se Empresta</title>

    <base href="/">
</head>
<style type="text/css">
    /* Sticky footer styles
    -------------------------------------------------- */
    html {
        position: relative;
        min-height: 100%;
    }
    body {
        /* Margin bottom by footer height */
        margin-bottom: 60px;
    }
    .footer {
        position: absolute;
        bottom: 0;
        width: 100%;
        /* Set the fixed height of the footer here */
        height: 60px;
        background-color: #f5f5f5;
    }


    /* Custom page CSS
    -------------------------------------------------- */
    /* Not required for template or sticky footer method. */

    body > .container {
        /*padding: 60px 15px 0;*/
    }
    .container .text-muted {
        margin: 20px 0;
    }

    .footer > .container {
        padding-right: 15px;
        padding-left: 15px;
    }

    code {
        font-size: 80%;
    }

    /* ui.bootstrap fix*/
    .nav, .pagination, .carousel, .panel-title a { cursor: pointer; }

</style>
<body>

<!-- ////////// -->
<nav class="navbar navbar-default" role="navigation">
    <div class="navbar-header">

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
        </button> <a class="navbar-brand" href="/">Livro Não Se Empresta</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
        </ul>
    </div>

</nav>
<div class="container">

    <div class="row">
        <div class="col-md-12">
            <div class="page-header">
                <h1>
                    Livro Não Se Empresta <small>Controle os seus livros</small>
                </h1>
            </div>
            <div class="row">
                <div class="col-md-3">

                    <div class="panel-group" id="panel-636607">
                        <uib-accordion>

                            <!-- Livros -->
                            <uib-accordion-group heading="Livros">
                                <a href="/livro" class="list-group-item">Buscar</a>
                                <a href="/livro/new" class="list-group-item">Novo</a>
                            </uib-accordion-group>
                            <!-- Emprestado -->
                            <uib-accordion-group heading="Empréstimos de Livros">
                                <a href="/emprestado" class="list-group-item">Buscar</a>
                                <a href="/emprestado/new" class="list-group-item">Novo</a>
                            </uib-accordion-group>
                            <!-- Autores -->
                            <uib-accordion-group heading="Autores">
                                <a href="/autor" class="list-group-item">Buscar</a>
                                <a href="/autor/new" class="list-group-item">Novo</a>
                            </uib-accordion-group>
                            <!-- Categorias -->
                            <uib-accordion-group heading="Categorias">
                                <a href="/categoria" class="list-group-item">Buscar</a>
                                <a href="/categoria/new" class="list-group-item">Novo</a>
                            </uib-accordion-group>

                        </uib-accordion>
                    </div>

                </div>


                <div class="col-md-9" ng-view></div>

            </div>
        </div>
    </div>
</div>
<div class="footer">
    <div class="container">
        <p>
            <small>LivroNãoSeEmpresta (C) 2017 <a href="https://github.com/kidoncio">Lucas do Nascimento</a></small>
        </p>
    </div>
</div>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.0/jquery.js"></script>
<script type="text/javascript" src="components/angular/angular.js"></script>
<script type="text/javascript" src="components/angular-resource/angular-resource.js"></script>
<script type="text/javascript" src="components/angular-route/angular-route.js"></script>
<script type="text/javascript" src="components/bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="components/angular-bootstrap/ui-bootstrap.js"></script>
<script type="text/javascript" src="components/angular-bootstrap/ui-bootstrap-tpls.js"></script>
<script type="text/javascript" src="components/app/app.js"></script>
<script type="text/javascript" src="components/app/controllers/controller.js"></script>
<script type="text/javascript" src="components/app/routes/route.js"></script>
<script type="text/javascript" src="components/app/services/service.js"></script>
<!--FontAwesome-->
<script src="https://use.fontawesome.com/7417757c26.js"></script>


<script type="text/javascript">
    $(document).ready(function(){
        // Swap active status on sidebar menu
        $(".list-group-item").click(function(){
            var active = $(".list-group-item.active")[0];
            $(active).removeClass("active");
            $(this).addClass("active");
        });
    });

    function highlightSearch(){
        var list = $(".panel-open .list-group-item");
        if(list.length > 0){
            for (var i = list.length - 1; i >= 0; i--) {
                $(list[i]).removeClass("active");
            };
            $(list[0]).addClass("active");
        }
    }
</script>
</body>
</html>