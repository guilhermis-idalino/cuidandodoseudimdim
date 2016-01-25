<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Dashboard">
        <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
        <link rel="shortcut icon" href="/cuidandoseudimdim/app/visoes/imagens/logo_aba.png">

        <title>Cuidando do seu DimDim: Nova Receita</title>

        <!-- Bootstrap core CSS -->
        <link href="/cuidandoseudimdim/app/visoes/css/bootstrap.css" rel="stylesheet">
        <!--external css-->
        <link href="/cuidandoseudimdim/app/visoes/font-awesome/css/font-awesome.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="/cuidandoseudimdim/app/visoes/js/bootstrap-datepicker/css/datepicker.css" />
        <link rel="stylesheet" type="text/css" href="/cuidandoseudimdim/app/visoes/js/bootstrap-daterangepicker/daterangepicker.css" />

        <!-- Custom styles for this template -->
        <link href="/cuidandoseudimdim/app/visoes/css/style.css" rel="stylesheet">
        <link href="/cuidandoseudimdim/app/visoes/css/style-responsive.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>

        <section id="container" >
            <!-- **********************************************************************************************************************************************************
            TOP BAR CONTENT & NOTIFICATIONS
            *********************************************************************************************************************************************************** -->
            <!--header start-->
            <header class="header black-bg">
                <div class="sidebar-toggle-box">
                    <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
                </div>
                <!--logo start-->
                <a href="/cuidandoseudimdim/Inicio/inicio/" class="logo"><b>Cuidando do seu DimDim</b></a>
                <!--logo end-->
                <div class="nav notify-row" id="top_menu">
                    <!--  notification start -->
                    <ul class="nav top-menu">
                    </ul>
                    <!--  notification end -->
                </div>
                <div class="top-menu">
                    <ul class="nav pull-right top-menu">
                        <li><a class="logout" href="/cuidandoseudimdim/Usuario/sair/">Sair</a></li>
                    </ul>
                </div>
            </header>
            <!--header end-->

            <!-- **********************************************************************************************************************************************************
            MAIN SIDEBAR MENU
            *********************************************************************************************************************************************************** -->
            <!--sidebar start-->
            <aside>
                <div id="sidebar"  class="nav-collapse ">
                    <!-- sidebar menu start-->
                    <ul class="sidebar-menu" id="nav-accordion">
                        <?php
                        if ($visao_perfil['genero'] == 'Masculino') {
                            echo '<p class="centered"><a href="/cuidandoseudimdim/Perfil/perfil/opc/perfil/"><img src="/cuidandoseudimdim/app/visoes/imagens/masculino.png" class="img-circle" width="60"></a></p>';
                        } else {
                            echo '<p class="centered"><a href="/cuidandoseudimdim/Perfil/perfil/opc/perfil/"><img src="/cuidandoseudimdim/app/visoes/imagens/feminino.png" class="img-circle" width="60"></a></p>';
                        }
                        ?>          	  
                        <h5 class="centered"><?php echo $visao_perfil['nome']; ?></h5>

                        <li class="mt">
                            <a  href="/cuidandoseudimdim/Inicio/inicio/">
                                <i><img src="/cuidandoseudimdim/app/visoes/imagens/ini.png" width="30px" height="30px"></i>
                                <span>Início</span>
                            </a>
                        </li>

                        <li class="sub-menu">
                            <a class="active" href="javascript:;" >
                                <i><img src="/cuidandoseudimdim/app/visoes/imagens/rec.png" width="30px" height="30px"></i>
                                <span>Receitas</span>
                            </a>
                            <ul class="sub">
                                <li><a  href="/cuidandoseudimdim/Receita/nova_receita/">Nova Receita</a></li>
                                <li><a  href="/cuidandoseudimdim/Receita/minhas_receitas/">Minhas Receitas </a></li>
                            </ul>
                        </li>

                        <li class="sub-menu">
                            <a href="javascript:;" >
                                <i><img src="/cuidandoseudimdim/app/visoes/imagens/des.png" width="30px" height="30px"></i>
                                <span>Despesas</span>
                            </a>
                            <ul class="sub">
                                <li><a  href="/cuidandoseudimdim/Despesa/nova_despesa">Nova Despesa</a></li>
                                <li><a  href="/cuidandoseudimdim/Despesa/minhas_despesas">Minhas Despesas</a></li>
                            </ul>
                        </li>
                        <li class="sub-menu">
                            <a href="javascript:;" >
                                <i><img src="/cuidandoseudimdim/app/visoes/imagens/sal.png" width="30px" height="30px"></i>
                                <span>Saldo</span>
                            </a>
                            <ul class="sub">
                                <li><a  href="/cuidandoseudimdim/Saldo/saldo_mes">Saldo do Mês</a></li>
                                <li><a  href="/cuidandoseudimdim/Saldo/saldo_todos">Todos os Saldos</a></li>
                            </ul>
                        </li>
                        <li class="sub-menu">
                            <a href="javascript:;" >
                                <i><img src="/cuidandoseudimdim/app/visoes/imagens/aju.png" width="30px" height="30px"></i>
                                <span>Ajuda</span>
                            </a>
                            <ul class="sub">
                                <li><a  href="/cuidandoseudimdim/Ajuda/tipo_despesa/">Tipos de Despesas</a></li>
                            </ul>
                        </li>    
                    </ul>
                    <!-- sidebar menu end-->
                </div>
            </aside>
            <!--sidebar end-->

            <!-- **********************************************************************************************************************************************************
            MAIN CONTENT
            *********************************************************************************************************************************************************** -->
            <!--main content start-->
            <section id="main-content">
                <section class="wrapper site-min-height">
                    <h3><i class="fa fa-angle-right"></i> Receitas <i class="fa fa-angle-right"></i> Nova Receita <i class="fa fa-angle-right"></i> <?php
                        $mes = '';
                        switch ($visao_mes) {
                            case 1:
                                $mes = 'Janeiro';
                                break;
                            case 2:
                                $mes = 'Fevereiro';
                                break;
                            case 3:
                                $mes = 'Março';
                                break;
                            case 4:
                                $mes = 'Abril';
                                break;
                            case 5:
                                $mes = 'Maio';
                                break;
                            case 6:
                                $mes = 'Junho';
                                break;
                            case 7:
                                $mes = 'Julho';
                                break;
                            case 8:
                                $mes = 'Agosto';
                                break;
                            case 9:
                                $mes = 'Setembro';
                                break;
                            case 10:
                                $mes = 'Outubro';
                                break;
                            case 11:
                                $mes = 'Novembro';
                                break;
                            case 12:
                                $mes = 'Dezembro';
                                break;
                        }
                        echo $mes . ' de ' . $visao_ano;
                        ?></h3></h3>

                    <!-- BASIC FORM ELELEMNTS -->
                    <div class="row mt">
                        <div class="col-lg-12">
                            <div class="form-panel">
                                <h4 class="mb"><i class="fa fa-angle-right"></i> Nova Receita</h4>
                                <form class="form-horizontal style-form" action="/cuidandoseudimdim/Receita/nova_receita/" method="POST">    
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Título*</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="titulo" class="form-control round-form" <?php if ($visao_parametros['sit'] == "erro" || $visao_parametros['sit'] == "valor") {
                            echo 'value="' . $visao_valores['titulo'] . '"';
                        } ?> required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Valor*</label>
                                        <div class="col-sm-10">
                                            <input type="number" name="valor" class="form-control round-form" <?php if ($visao_parametros['sit'] == "erro" || $visao_parametros['sit'] == "valor") {
                            echo 'value="' . $visao_valores['valor'] . '"';
                        } ?> required>
                                            <?php
                                            if ($visao_parametros['sit'] == 'valor') {
                                                echo '<span class="help-block">O valor não pode ser negativo</span>';
                                            }
                                            ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Data de Recebimento*</label>
                                        <div class="col-sm-10">
                                            <input type="date" name="data_recebimento" class="form-control round-form" <?php if ($visao_parametros['sit'] == "erro" || $visao_parametros['sit'] == "valor") {
                                                echo 'value="' . $visao_valores['data_recebimento'] . '"';
                                            } ?> required>
                                            
                                        </div>
                                    </div>
                                    </br>
                                            <p>Todos os campos com * são obrigatórios!</p>
                                    <div class="form-group">  
                                        <div class="col-sm-2">
                                        </div>
                                        <div class="col-sm-4">
                                            <button type="reset" class="btn btn-default btn-lg btn-block">Limpar</button>
                                        </div>
                                        <div class="col-sm-4">
                                            <button type="submit" class="btn btn-primary btn-lg btn-block">Registrar Receita</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div><!-- col-lg-12-->      	
                    </div><!-- /row -->      	

                </section><! --/wrapper -->
            </section><!-- /MAIN CONTENT -->



            <!--main content end-->
            <!--footer start-->
            <footer class="site-footer">
                <div class="text-center">
                    2014 - Alvarez.is
                    <a href="#" class="go-top">
                        <i class="fa fa-angle-up"></i>
                    </a>
                </div>
            </footer>
            <!--footer end-->
        </section>

        <!-- js placed at the end of the document so the pages load faster -->
        <script src="/cuidandoseudimdim/app/visoes/js/jquery.js"></script>
        <script src="/cuidandoseudimdim/app/visoes/js/bootstrap.min.js"></script>
        <script class="include" type="text/javascript" src="/cuidandoseudimdim/app/visoes/js/jquery.dcjqaccordion.2.7.js"></script>
        <script src="/cuidandoseudimdim/app/visoes/js/jquery.scrollTo.min.js"></script>
        <script src="/cuidandoseudimdim/app/visoes/js/jquery.nicescroll.js" type="text/javascript"></script>


        <!--common script for all pages-->
        <script src="/cuidandoseudimdim/app/visoes/js/common-scripts.js"></script>

        <!--script for this page-->
        <script src="/cuidandoseudimdim/app/visoes/js/jquery-ui-1.9.2.custom.min.js"></script>

        <!--custom switch-->
        <script src="/cuidandoseudimdim/app/visoes/js/bootstrap-switch.js"></script>

        <!--custom tagsinput-->
        <script src="/cuidandoseudimdim/app/visoes/js/jquery.tagsinput.js"></script>

        <!--custom checkbox & radio-->

        <script type="text/javascript" src="/cuidandoseudimdim/app/visoes/js/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
        <script type="text/javascript" src="/cuidandoseudimdim/app/visoes/js/bootstrap-daterangepicker/date.js"></script>
        <script type="text/javascript" src="/cuidandoseudimdim/app/visoes/js/bootstrap-daterangepicker/daterangepicker.js"></script>

        <script type="text/javascript" src="/cuidandoseudimdim/app/visoes/js/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>


        <script src="/cuidandoseudimdim/app/visoes/js/form-component.js"></script>    


        <script>
            //custom select box

            $(function () {
                $('select.styled').customSelect();
            });

        </script>

    </body>
</html>
