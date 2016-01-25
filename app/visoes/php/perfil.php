<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Dashboard">
        <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
        <link rel="shortcut icon" href="/cuidandoseudimdim/app/visoes/imagens/logo_aba.png">

        <title>Cuidando do seu DimDim: Perfil do Usuário</title>

        <!-- Bootstrap core CSS -->
        <link href="/cuidandoseudimdim/app/visoes/css/bootstrap.css" rel="stylesheet">
        <!--external css-->
        <link href="/cuidandoseudimdim/app/visoes/font-awesome/css/font-awesome.css" rel="stylesheet" />
        <link rel="stylesheet" href="/cuidandoseudimdim/app/visoes/css/to-do.css">

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
                            <a href="/cuidandoseudimdim/Inicio/inicio/">
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
                    <h3><i class="fa fa-angle-right"></i> Perfil <i class="fa fa-angle-right"></i> <?php echo $visao_perfil["nome"] . ' ' . $visao_perfil['sobrenome']; ?> </h3>


                    <?php
                    if ($visao_opc == "perfil") {
                        ?>
                        <!-- COMPLEX TO DO LIST -->			
                        <div class="row mt">
                            <div class="col-md-12">
                                <section class="task-panel tasks-widget">
                                    <div class="panel-heading">
                                        <div class="pull-left"><h5><i class="fa fa-tasks"></i> Dados do Registro</h5></div>
                                        <div class=" add-task-row">
                                            
                                        </div>
                                        <br>
                                    </div>
                                    <div class="panel-body">
                                        <div class="task-content">
                                            <ul class="task-list">
                                                <li>
                                                    <div class="task-title">
                                                        <span class="task-title-sp">Nome:</span>
                                                        <span class="task-title-sp"><?php echo $visao_perfil["nome"]; ?></span>
                                                    </div>
                                                </li>                                 
                                            </ul>
                                        </div>
                                        <div class="task-content">
                                            <ul class="task-list">
                                                <li>
                                                    <div class="task-title">
                                                        <span class="task-title-sp">Sobrenome:</span>
                                                        <span class="task-title-sp"><?php echo $visao_perfil["sobrenome"]; ?></span>
                                                    </div>
                                                </li>                                 
                                            </ul>
                                        </div>
                                        <div class="task-content">
                                            <ul class="task-list">
                                                <li>
                                                    <div class="task-title">
                                                        <span class="task-title-sp">Login:</span>
                                                        <span class="task-title-sp"><?php echo $visao_perfil["login"]; ?></span>
                                                        <div class="pull-right hidden-phone">
                                                            <h3><a data-toggle="modal" href="/cuidandoseudimdim/Perfil/perfil/opc/alterar_login/sit/certo/"><i class="fa fa-pencil"></i></a></h3>
                                                        </div>
                                                    </div>
                                                </li>                                 
                                            </ul>
                                        </div>
                                        <div class="task-content">
                                            <ul class="task-list">
                                                <li>
                                                    <div class="task-title">
                                                        <span class="task-title-sp">E-mail:</span>
                                                        <span class="task-title-sp"><?php echo $visao_perfil["email"]; ?></span>
                                                        <div class="pull-right hidden-phone">
                                                            <h3><a data-toggle="modal" href="/cuidandoseudimdim/Perfil/perfil/opc/alterar_email/sit/certo"><i class="fa fa-pencil"></i></a></h3>
                                                        </div>
                                                    </div>
                                                </li>                                 
                                            </ul>
                                        </div>
                                        <div class="task-content">
                                            <ul class="task-list">
                                                <li>
                                                    <div class="task-title">
                                                        <span class="task-title-sp">Idade:</span>
                                                        <span class="task-title-sp"><?php echo $visao_perfil["idade"] . " anos"; ?></span>
                                                    </div>
                                                </li>                                 
                                            </ul>
                                        </div>
                                        <div class="task-content">
                                            <ul class="task-list">
                                                <li>
                                                    <div class="task-title">
                                                        <span class="task-title-sp">Gênero:</span>
                                                        <span class="task-title-sp"><?php echo $visao_perfil["genero"]; ?></span>
                                                    </div>
                                                </li>                                 
                                            </ul>
                                        </div>
                                        <div class="task-content">
                                            <ul class="task-list">
                                                <li>
                                                    <div class="task-title">
                                                        <span class="task-title-sp">Senha:</span>
                                                        <div class="pull-right hidden-phone">
                                                            <h3><a data-toggle="modal" href="/cuidandoseudimdim/Perfil/perfil/opc/alterar_senha/sit/certo/"><i class="fa fa-pencil"></i></a></h3>
                                                        </div>
                                                    </div>
                                                </li>                                 
                                            </ul>
                                        </div>
                                    </div>
                                </section>

                            </div><!-- /col-md-12-->
                        </div><!-- /row -->
                    <?php } ?>

                    <?php
                    if ($visao_opc == "alterar_login") {
                        ?>
                        <div class="row mt">
                            <div class="col-lg-12">
                                <div class="form-panel">
                                    <h4 class="mb"><i class="fa fa-angle-right"> Alterar Login</i></h4>
                                    <form class="form-horizontal style-form" action="/cuidandoseudimdim/Perfil/alterar_dados/alterar/login/" method="POST">    
                                        <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label">Login Atual*</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="login_atual" class="form-control round-form" <?php
                                                if ($visao_sit == 'login_difere') {
                                                    echo 'value="' . $visao_value . '"';
                                                }
                                                ?>required>
                                                       <?php
                                                       if ($visao_sit == 'login_difere') {
                                                           echo '<span class="help-block">Login Incorreto!</span>';
                                                       }
                                                       ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label">Novo Login*</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="login_novo" class="form-control round-form" required>
                                            </div>
                                        </div>
                                        </br>
                                        <p>Todos os campos com * são obrigatórios!</p>
                                        <div class="form-group">  
                                            <div class="col-sm-2">
                                            </div>
                                            <div class="col-sm-4">
                                                <button type="submit" class="btn btn-primary btn-lg btn-block">Alterar Login</button>
                                                <?php
                                                if ($visao_sit == 'erro') {
                                                    echo '<span class="help-block">Não foi possível alterar o login!</span>';
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div><!-- col-lg-12-->      	
                        </div><!-- /row -->
                    <?php } ?>

                    <?php
                    if ($visao_opc == "alterar_email") {
                        ?>
                        <div class="row mt">
                            <div class="col-lg-12">
                                <div class="form-panel">
                                    <h4 class="mb"><i class="fa fa-angle-right"> Alterar E-mail</i></h4>
                                    <form class="form-horizontal style-form" action="/cuidandoseudimdim/Perfil/alterar_dados/alterar/email/" method="POST">    
                                        <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label">E-mail Atual*</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="email_atual" class="form-control round-form" <?php
                                                if ($visao_sit == 'email_difere' || $visao_sit == 'emails_difere') {
                                                    echo 'value="' . $visao_value . '"';
                                                }
                                                ?>required>
                                                       <?php
                                                       if ($visao_sit == 'email_difere') {
                                                           echo '<span class="help-block">E-mail Incorreto!</span>';
                                                       }
                                                       ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label">Novo E-mail*</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="email_novo" class="form-control round-form" required>
                                                <?php
                                                if ($visao_sit == 'emails_difere') {
                                                    echo '<span class="help-block">Os e-mails não são iguais!</span>';
                                                }
                                                ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label">Confirme o novo E-mail</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="email_novo_confirma" class="form-control round-form" required>
                                                <?php
                                                if ($visao_sit == 'emails_difere') {
                                                    echo '<span class="help-block">Os e-mails não são iguais!</span>';
                                                }
                                                ?>
                                            </div>
                                        </div>
                                        </br>
                                        <p>Todos os campos com * são obrigatórios!</p>
                                        <div class="form-group">  
                                            <div class="col-sm-2">
                                            </div>
                                            <div class="col-sm-4">
                                                <button type="submit" class="btn btn-primary btn-lg btn-block">Alterar E-mail</button>
                                                <?php
                                                if ($visao_sit == 'erro') {
                                                    echo '<span class="help-block">Não foi possível alterar o email!</span>';
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div><!-- col-lg-12-->      	
                        </div><!-- /row -->
                    <?php } ?>

                    <?php
                    if ($visao_opc == "alterar_senha") {
                        ?>
                        <div class="row mt">
                            <div class="col-lg-12">
                                <div class="form-panel">
                                    <h4 class="mb"><i class="fa fa-angle-right"> Alterar Senha</i></h4>
                                    <form class="form-horizontal style-form" action="/cuidandoseudimdim/Perfil/alterar_dados/alterar/senha/" method="POST">    
                                        <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label">Senha Atual*</label>
                                            <div class="col-sm-10">
                                                <input type="password" name="senha_atual" class="form-control round-form"  required>
                                                <?php
                                                if ($visao_sit == 'senha_difere') {
                                                    echo '<span class="help-block">Senha Incorreta!</span>';
                                                }
                                                ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label">Nova Senha*</label>
                                            <div class="col-sm-10">
                                                <input type="password" name="senha_nova" class="form-control round-form"  required>
                                                <?php
                                                if ($visao_sit == 'senhas_difere') {
                                                    echo '<span class="help-block">As senhas não são iguais!</span>';
                                                }
                                                ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label">Confirme o nova Senha</label>
                                            <div class="col-sm-10">
                                                <input type="password" name="senha_nova_confirma" class="form-control round-form" required>
                                                <?php
                                                if ($visao_sit == 'senhas_difere') {
                                                    echo '<span class="help-block">As senhas não são iguais!</span>';
                                                }
                                                ?>
                                            </div>
                                        </div>
                                        </br>
                                        <p>Todos os campos com * são obrigatórios!</p>
                                        <div class="form-group">  
                                            <div class="col-sm-2">
                                            </div>
                                            <div class="col-sm-4">
                                                <button type="submit" class="btn btn-primary btn-lg btn-block">Alterar Senha</button>
                                                <?php
                                                if ($visao_sit == 'erro') {
                                                    echo '<span class="help-block">Não foi possível alterar o login!</span>';
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div><!-- col-lg-12-->      	
                        </div><!-- /row -->
                    <?php } ?>

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

        <!--script for this page-->

        <script>
            //custom select box

            $(function () {
                $('select.styled').customSelect();
            });

        </script>


    </body>
</html>
