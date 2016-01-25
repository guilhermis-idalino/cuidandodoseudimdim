<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Dashboard">
        <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
        <link rel="shortcut icon" href="/cuidandoseudimdim/app/visoes/imagens/logo_aba.png">

        <title>Cuidando seu DimDim: Login</title>

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

        <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->

        <div id="login-page">
            <div class="container">

                <form class="form-login" action="/cuidandoseudimdim/Usuario/login/acao/0" method="POST">
                    <h2 class="form-login-heading">Login</h2>
                    <div class="login-wrap">
                        <input type="text" name="usuario" class="form-control" placeholder="Usuário" autofocus required>
                        <br>
                        <input type="password" name="senha" class="form-control" placeholder="Senha" required>
                        <label class="checkbox">
                            <span class="pull-right" >
                                <?php
                                if ($visao_sit == "incorreto") {
                                    echo 'Usuário ou senha incorretos!';
                                }
                                ?>
                            </span>
                        </label>
                        <button class="btn btn-theme btn-block" type="submit"><i class="fa fa-lock"></i> Entrar</button>
                        <hr>

                        <div class="registration">
                            Ainda não possui uma conta?<br/>
                            <a class="" href="/cuidandoseudimdim/Usuario/registrar_usuario/acao/1">
                                Registre uma Conta
                            </a>
                        </div>

                    </div>	
                </form>	  	

            </div>
        </div>
		
		<div id="login-page">
            <div class="container">
                <form class="form-login" action="/cuidandoseudimdim/Usuario/login/acao/0" method="POST">
                    <div class="login-wrap">
                        <div class="registration">
                            <h5>Não perca o controle sob seu dinheiro!</br>
							Venha vigiar suas finanças!</h5>
                        </div>
                    </div>	
                </form>	  
            </div>
        </div>

        <!-- js placed at the end of the document so the pages load faster -->
        <script src="/cuidandoseudimdim/app/visoes/js/jquery.js"></script>
        <script src="/cuidandoseudimdim/app/visoes/js/bootstrap.min.js"></script>

        <!--BACKSTRETCH-->
        <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
        <script type="text/javascript" src="/cuidandoseudimdim/app/visoes/js/jquery.backstretch.min.js"></script>
        <script>
            $.backstretch("/cuidandoseudimdim/app/visoes/imagens/login-bg.png", {speed: 500});
        </script>

    </body>
</html>
