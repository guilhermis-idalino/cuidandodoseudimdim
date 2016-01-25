<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Dashboard">
        <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
        <link rel="shortcut icon" href="/cuidandoseudimdim/app/visoes/imagens/logo_aba.png">

        <title>Cuidando do seu DimDim: Todos os Saldos</title>

        <!-- Bootstrap core CSS -->
        <link href="/cuidandoseudimdim/app/visoes/css/bootstrap.css" rel="stylesheet">
        <!--external css-->
        <link href="/cuidandoseudimdim/app/visoes/font-awesome/css/font-awesome.css" rel="stylesheet" />

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
                            <a href="javascript:;" >
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
                            <a class="active" href="javascript:;" >
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
                    <h3><i class="fa fa-angle-right"></i> Saldo <i class="fa fa-angle-right"></i> Todos os Saldo</h3>
                    <div class="row mt">
                        <div class="col-lg-12">
                            <!-- INPUT MESSAGES -->
                            <div class="row mt">
                                <div class="col-lg-6">

                                    <h4 class="mb">Selecione o ano para o relatório!</h4>	
                                    <form method="POST" action="/cuidandoseudimdim/Saldo/saldo_todos">
                                        <select name="num_ano" class="form-control" required>

                                            <?php
                                            echo '<option value="' . $visao_ano_atual . '">' . $visao_ano_atual . '</option>';
                                            if (isset($visao_anos)) {
                                                foreach ($visao_anos as $value) {
                                                    if ($value != $visao_ano_atual) {
                                                        echo '<option value="' . $value . '">' . $value . '</option>';
                                                    }
                                                }
                                            }
                                            ?>
                                        </select>       
                                        </br>
                                        <div class="col-sm-5">
                                            <button type="submit" class="btn btn-primary btn-lg btn-block">Verificar Relatório</button>
                                        </div>
                                    </form> 

                                </div><!-- /col-lg-12 -->

                                <div class="row mt">
                                    <div class="col-lg-10">

                                        <!--CUSTOM CHART START -->
                                        <div class="border-head">
                                            <h3>Saldos de <?php echo $visao_dados[0]['ano']; ?></h3>
                                        </div>
                                        <div class="tab-pane" id="chartjs">
                                            <div class="border-head">                            
                                                <div class="col-lg-12">                                                    
                                                    <div class="panel-body text-center">
                                                        <canvas id="line" height="500" width="1000"></canvas>
                                                    </div>                                                    
                                                </div>
                                            </div>                
                                        </div>
                                    </div><!-- /row -->	

                                </div><!-- /col-lg-9 END SECTION MIDDLE -->
                            </div>
                        </div>
                    </div>
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
        <script src="/cuidandoseudimdim/app/visoes/js/jquery-ui-1.9.2.custom.min.js"></script>
        <script src="/cuidandoseudimdim/app/visoes/js/jquery.ui.touch-punch.min.js"></script>
        <script class="include" type="text/javascript" src="/cuidandoseudimdim/app/visoes/js/jquery.dcjqaccordion.2.7.js"></script>
        <script src="/cuidandoseudimdim/app/visoes/js/jquery.scrollTo.min.js"></script>
        <script src="/cuidandoseudimdim/app/visoes/js/jquery.nicescroll.js" type="text/javascript"></script>


        <!--common script for all pages-->
        <script src="/cuidandoseudimdim/app/visoes/js/common-scripts.js"></script>
        <script src="/cuidandoseudimdim/app/visoes/js/chartjs-conf.js"></script>
        <script src="/cuidandoseudimdim/app/visoes/js/chart-master/Chart.js"></script>

        <!--script for this page-->

        <script>
            var Script = function () {
                var options = {
                    responsive: true
                };

                var lineChartData = {
                    labels: ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"],
                    datasets: [
                        {
                            label: "Dados",
                            pointColor: "rgba(220,220,220,1)",
                            pointHighlightFill: "#fff",
                            pointHighlightStroke: "rgba(220,220,220,1)",
                            fillColor: "rgba(151,187,205,0.5)",
                            strokeColor: "rgba(151,187,205,1)",
                            pointStrokeColor: "#ac92ec",
                            data: [<?php
                                            if (isset($visao_dados[0])) {
                                                $saldos = array(0 => '0, ', 1 => '0, ', 2 => '0, ', 3 => '0, ', 4 => '0, ', 5 => '0, ', 6 => '0, ', 7 => '0, ', 8 => '0, ', 9 => '0, ', 10 => '0, ', 11 => '0, ');
                                                foreach ($visao_dados as $value) {
                                                    switch ($value['mes']) {
                                                        case 1:
                                                            if ($value['saldo'] == null) {
                                                                $saldos[0] = '0, ';
                                                            } else {
                                                                $saldos[0] = $value['saldo'] . ', ';
                                                            }
                                                            break;
                                                        case 2:
                                                            if ($value['saldo'] == null) {
                                                                $saldos[1] = '0, ';
                                                            } else {
                                                                $saldos[1] = $value['saldo'] . ', ';
                                                            }
                                                            break;
                                                        case 3:
                                                            if ($value['saldo'] == null) {
                                                                $saldos[2] = '0, ';
                                                            } else {
                                                                $saldos[2] = $value['saldo'] . ', ';
                                                            }
                                                            break;
                                                        case 4:
                                                            if ($value['saldo'] == null) {
                                                                $saldos[3] = '0, ';
                                                            } else {
                                                                $saldos[3] = $value['saldo'] . ', ';
                                                            }
                                                            break;
                                                        case 5:
                                                            if ($value['saldo'] == null) {
                                                                $saldos[4] = '0, ';
                                                            } else {
                                                                $saldos[4] = $value['saldo'] . ', ';
                                                            }
                                                            break;
                                                        case 6:
                                                            if ($value['saldo'] == null) {
                                                                $saldos[5] = '0, ';
                                                            } else {
                                                                $saldos[5] = $value['saldo'] . ', ';
                                                            }
                                                            break;
                                                        case 7:
                                                            if ($value['saldo'] == null) {
                                                                $saldos[6] = '0, ';
                                                            } else {
                                                                $saldos[6] = $value['saldo'] . ', ';
                                                            }
                                                            break;
                                                        case 8:
                                                            if ($value['saldo'] == null) {
                                                                $saldos[7] = '0, ';
                                                            } else {
                                                                $saldos[7] = $value['saldo'] . ', ';
                                                            }
                                                            break;
                                                        case 9:
                                                            if ($value['saldo'] == null) {
                                                                $saldos[8] = '0, ';
                                                            } else {
                                                                $saldos[8] = $value['saldo'] . ', ';
                                                            }
                                                            break;
                                                        case 10:
                                                            if ($value['saldo'] == null) {
                                                                $saldos[9] = '0, ';
                                                            } else {
                                                                $saldos[9] = $value['saldo'] . ', ';
                                                            }
                                                            break;
                                                        case 11:
                                                            if ($value['saldo'] == null) {
                                                                $saldos[10] = '0, ';
                                                            } else {
                                                                $saldos[10] = $value['saldo'] . ', ';
                                                            }
                                                            break;
                                                        case 12:
                                                            if ($value['saldo'] == null) {
                                                                $saldos[11] = '0, ';
                                                            } else {
                                                                $saldos[11] = $value['saldo'] . ', ';
                                                            }
                                                            break;
                                                    }
                                                }
                                                foreach ($saldos as $value) {
                                                    echo $value;
                                                }
                                            }
                                            ?>]
                        }
                    ]

                };

                window.onload = function () {

                    var ctx = document.getElementById("line").getContext("2d");
                    var LineChart = new Chart(ctx).Line(lineChartData, options);
                };


            }();
        </script>
        <script>
            //custom select box

            $(function () {
                $('select.styled').customSelect();
            });

        </script>

    </body>
</html>