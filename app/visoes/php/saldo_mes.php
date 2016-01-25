<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Dashboard">
        <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
        <link rel="shortcut icon" href="/cuidandoseudimdim/app/visoes/imagens/logo_aba.png">

        <title>Cuidando do seu DimDim: Saldo do Mês</title>

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
                    <h3><i class="fa fa-angle-right"></i> Saldo <i class="fa fa-angle-right"></i> Saldo de <?php
                        $mes = '';
                        switch ($visao_mes_atual) {
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
                        echo $mes . ' de ' . $visao_ano_atual;
                        ?></h3>
                    <div class="row mt">
                        <div class="col-lg-12">
                            <!-- INPUT MESSAGES -->
                            <div class="row mt">
                                <div class="col-lg-6">

                                    <h4 class="mb">Selecione o mês e o ano para o relatório!</h4>	
                                    <form method="POST" action="/cuidandoseudimdim/Saldo/saldo_mes">
                                        <select name="num_mes" class="form-control" required>
                                            <option value="null">Selecione...</option>
                                            <?php
                                            if (isset($visao_meses)) {
                                                foreach ($visao_meses as $value) {
                                                    echo '<option value="' . $value . '">';
                                                    switch ($value) {
                                                        case 1:
                                                            echo 'Janeiro</option>';
                                                            break;
                                                        case 2:
                                                            echo 'Fevereiro</option>';
                                                            break;
                                                        case 3:
                                                            echo 'Março</option>';
                                                            break;
                                                        case 4:
                                                            echo 'Abril</option>';
                                                            break;
                                                        case 5:
                                                            echo 'Maio</option>';
                                                            break;
                                                        case 6:
                                                            echo 'Junho</option>';
                                                            break;
                                                        case 7:
                                                            echo 'Julho</option>';
                                                            break;
                                                        case 8:
                                                            echo 'Agosto</option>';
                                                            break;
                                                        case 9:
                                                            echo 'Setembro</option>';
                                                            break;
                                                        case 10:
                                                            echo 'Outubro</option>';
                                                            break;
                                                        case 11:
                                                            echo 'Novembro</option>';
                                                            break;
                                                        case 12:
                                                            echo 'Dezembro</option>';
                                                            break;
                                                    }
                                                }
                                            }
                                            ?> 
                                        </select>
                                        </br>
                                        <select name="num_ano" class="form-control" required>
                                            <option value="null">Selecione...</option>
                                            <?php
                                            if (isset($visao_anos)) {
                                                foreach ($visao_anos as $value) {
                                                    echo '<option value="' . $value . '">' . $value . '</option>';
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
                                <?php if ($visao_sits == 'erro') { ?>
                                    <div class="border-head">
                                        <h3>Este relatório ainda não está disponível!</h3>
                                    </div>
                                    <?php
                                }
                                if ($visao_sit == true) {
                                    ?>    
                                    <div class="row mt">
                                        <div class="col-lg-10">

                                            <!--CUSTOM CHART START -->
                                            <div class="border-head">
                                                <h3>Receitas Vs Despesas: Tipos de Despesa</h3>
                                            </div>
                                            <div class="tab-pane" id="chartjs">
                                                <div class="border-head">                            
                                                    <div class="col-lg-12">                                                    
                                                        <div class="panel-body text-center">
                                                            <canvas id="pie" height="500" width="1000"></canvas>
                                                        </div>   
                                                        <div>
                                                            <span >Legenda: </span>
                                                            <span class="fix">Fixas</span>
                                                            <span class="var">Variáveis</span>
                                                            <span class="saldo">Saldo</span>
                                                        </div>
                                                    </div>
                                                </div>                
                                            </div>
                                        </div><!-- /row -->	

                                    </div><!-- /col-lg-9 END SECTION MIDDLE -->

                                    <div class="row mt">
                                        <div class="col-lg-10">

                                            <!--CUSTOM CHART START -->
                                            <div class="border-head">
                                                <h3>Receitas Vs Despesas: Categoria de Despesa</h3>
                                            </div>
                                            <div class="tab-pane" id="chartjs">
                                                <div class="border-head">                            
                                                    <div class="col-lg-12">                                                    
                                                        <div class="panel-body text-center">
                                                            <canvas id="pie2" height="500" width="1000"></canvas>
                                                        </div>
                                                        <div class="row mt">
                                                        <div class="col-lg-12">
                                                            <span >Legenda: </span>
                                                            <span class="cartao">Cartão de Crédito</span>
                                                            <span class="cuida_pes">Cuidados Pessoais</span>
                                                            <span class="edu">Educação</span>
                                                            <span class="hab">Habitação</span>
                                                            <span class="imp">Imposto</span>
                                                            <span class="laz">Lazer</span>                                                            
                                                        </div>
                                                        </br></br></br>
                                                        <div class="col-lg-12">
                                                            <span >Legenda: </span>
                                                            <span class="manu">Manutenção e Prevenção</span>
                                                            <span class="sau">Saúde</span>
                                                            <span class="trans">Transporte</span>
                                                            <span class="vest">Vestuário</span>
                                                            <span class="saldo">Saldo</span>
                                                            <span class="out">Outros</span>
                                                        </div>
                                                        </br></br>
                                                        </div>
                                                    </div>
                                                </div>                
                                            </div>
                                        </div><!-- /row -->	

                                    </div><!-- /col-lg-9 END SECTION MIDDLE -->
                                    
                                <?php } ?>
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

        <script src="/cuidandoseudimdim/app/visoes/js/chart-master/Chart.js"></script>
        <script src="/cuidandoseudimdim/app/visoes/js/chartjs-conf.js"></script>

        <script>
            var Script = function () {
                var options = {
                    responsive: true
                };

                var pieChartData = [
<?php
if (isset($visao_despesa_tipo['fix'])) {
    $fix = array('c' => '#F7464A', 'h' => '#F7464A');
    $var = array('c' => '#46BFBD', 'h' => '#46BFBD');
    $saldo = array('c' => '#FDB45C', 'h' => '#FDB45C');
    foreach ($visao_despesa_tipo as $key => $value) {
        $l = '';
        $c = '';
        $h = '';
        switch ($key) {
            case 'fix':
                $l = 'Fixas';
                $c = $fix['c'];
                $h = $fix['h'];
                break;
            case 'var':
                $l = 'Variáveis';
                $c = $var['c'];
                $h = $var['h'];
                break;
            case 'saldo':
                $l = 'Saldo';
                $c = $saldo['c'];
                $h = $saldo['h'];
                break;
        }
        if ($value > 0) {
            echo '{';
            echo 'value: ' . $value . ',';
            echo 'color: "' . $c . '",';
            echo 'highlight: "' . $h . '",';
            echo 'label: "' . $l . '"';
            if ($key == 'saldo') {
                echo '}';
            } else {
                echo '},';
            }
        }
    }
}
?>
                ]

                var pieChartData2 = [
<?php
if (isset($visao_despesa_cat['saldo'])) {
    $cartao = array('c' => '#a94442', 'h' => '#a94442');
    $cuida_pes = array('c' => '#46BFBD', 'h' => '#46BFBD');
    $edu = array('c' => '#2b542c', 'h' => '#2b542c');
    $hab = array('c' => '#245269', 'h' => '#245269');
    $imp = array('c' => '#080808', 'h' => '#080808');
    $laz = array('c' => '#ac92ec', 'h' => '#ac92ec');
    $manu = array('c' => '#3071a9', 'h' => '#3071a9');
    $sau = array('c' => '#dff0d8', 'h' => '#dff0d8');
    $trans = array('c' => '#7D4F6D', 'h' => '#7D4F6D');
    $vest = array('c' => '#ff865c', 'h' => '#ff865c');
    $out = array('c' => 'yellow', 'h' => 'yellow');
    $saldo = array('c' => '#FDB45C', 'h' => '#FDB45C');

    foreach ($visao_despesa_cat as $key => $value) {
        $l = '';
        $c = '';
        $h = '';
        switch ($key) {
            case 'cartao':
                $l = 'Cartão de crédito';
                $c = $cartao['c'];
                $h = $cartao['h'];
                break;
            case 'cuida_pes':
                $l = 'Cuidados Pessoais';
                $c = $cuida_pes['c'];
                $h = $cuida_pes['h'];
                break;
            case 'edu':
                $l = 'Educação';
                $c = $edu['c'];
                $h = $edu['h'];
                break;
            case 'hab':
                $l = 'Habitação';
                $c = $hab['c'];
                $h = $hab['h'];
                break;
            case 'imp':
                $l = 'Imposto';
                $c = $imp['c'];
                $h = $imp['h'];
                break;
            case 'laz':
                $l = 'Lazer';
                $c = $laz['c'];
                $h = $laz['h'];
                break;
            case 'manu':
                $l = 'Manutenção e prevenção';
                $c = $manu['c'];
                $h = $manu['h'];
                break;
            case 'sau':
                $l = 'Saúde';
                $c = $sau['c'];
                $h = $sau['h'];
                break;
            case 'trans':
                $l = 'Transporte';
                $c = $trans['c'];
                $h = $trans['h'];
                break;
            case 'vest':
                $l = 'Vestuário';
                $c = $vest['c'];
                $h = $vest['h'];
                break;
            case 'out':
                $l = 'Outros';
                $c = $out['c'];
                $h = $out['h'];
                break;
            case 'saldo':
                $l = 'Saldo';
                $c = $saldo['c'];
                $h = $saldo['h'];
                break;
        }
        if ($value > 0) {
            echo '{';
            echo 'value: ' . $value . ',';
            echo 'color: "' . $c . '",';
            echo 'highlight: "' . $h . '",';
            echo 'label: "' . $l . '"';
            if ($key == 'saldo') {
                echo '}';
            } else {
                echo '},';
            }
        }
    }
}
?>
                ]

                window.onload = function () {

                    var ctx = document.getElementById("pie").getContext("2d");
                    var PizzaChart = new Chart(ctx).Pie(pieChartData, options);

                    var ctx2 = document.getElementById("pie2").getContext("2d");
                    var PizzaChart2 = new Chart(ctx2).Pie(pieChartData2, options);
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


