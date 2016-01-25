<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Dashboard">
        <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
        <link rel="shortcut icon" href="/cuidandoseudimdim/app/visoes/imagens/logo_aba.jpg">

        <title>Cuidando seu DimDim: Registro</title>

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

                <form class="form-login" action="/cuidandoseudimdim/Usuario/registrar_usuario/acao/0" method="POST">
                    <h2 class="form-login-heading">Registre-se</h2>
                    <div class="login-wrap">
                        <input type="text" name="nome" class="form-control" placeholder="* Nome" autofocus <?php if ($visao_email == false || $visao_login == false || $visao_senha == false){ echo 'value="'.$visao_dados['nome'].'"';}?> required>
                        <br>
                        <input type="text" name="sobrenome" class="form-control" placeholder="* Sobrenome" autofocus <?php if ($visao_email == false || $visao_login == false || $visao_senha == false){ echo 'value="'.$visao_dados['sobrenome'].'"';}?> required>
                        <br>
                        <input type="number" name="idade" class="form-control" placeholder="* Idade" autofocus <?php if ($visao_email == false || $visao_login == false || $visao_senha == false){ echo 'value="'.$visao_dados['idade'].'"';}?> required>
                        <br>
                        <select class="form-control" name="genero" required>
                            <option value="">*Gênero</option>
                            <option value="Masculino">Masculino</option>       
                            <option value="Feminino">Feminino</option>       
                        </select>      
                        <br>
                        <input type="text" name="email" class="form-control" placeholder="* E-mail" autofocus <?php if ($visao_email == false || $visao_login == false || $visao_senha == false){ echo 'value="'.$visao_dados['email'].'"';}?> required>
                        <br>
                        <?php
                        if ($visao_email == false) {
                            echo '<label class="checkbox">';
                            echo '<span class="pull-right" >';
                            echo 'E-mails diferentes!';
                            echo '</span>';
                            echo '</label>';
                        }
                        ?>
                        <input type="text" name="confirma_email" class="form-control" placeholder="* Confirme o email" autofocus <?php if ($visao_email == false || $visao_login == false || $visao_senha == false){ echo 'value="'.$visao_dados['confirma_email'].'"';}?> required>
                        <br>
                        <?php
                        if ($visao_email == false) {
                            echo '<label class="checkbox">';
                            echo '<span class="pull-right" >';
                            echo 'E-mails diferentes!';
                            echo '</span>';
                            echo '</label>';
                        }
                        ?>                        
                        <input type="text" name="login" class="form-control" placeholder="* Login" autofocus <?php if ($visao_email == false || $visao_login == false || $visao_senha == false){ echo 'value="'.$visao_dados['login'].'"';}?> required>
                        <br>  
                        <?php
                        if ($visao_login == false) {
                            echo '<label class="checkbox">';
                            echo '<span class="pull-right" >';
                            echo 'Login já existe! Informe outro login!';
                            echo '</span>';
                            echo '</label>';
                        }
                        ?>
                        <input type="password" name="senha" class="form-control" placeholder="* Senha" required>
                        <br>  
                        <?php
                        if ($visao_senha == false) {
                            echo '<label class="checkbox">';
                            echo '<span class="pull-right" >';
                            echo 'Senhas diferentes!';
                            echo '</span>';
                            echo '</label>';
                        }
                        ?>
                        <input type="password" name="confirma_senha" class="form-control" placeholder="* Confirme a senha" required>
                        <br>  
                        <?php
                        if ($visao_senha == false) {
                            echo '<label class="checkbox">';
                            echo '<span class="pull-right" >';
                            echo 'Senhas diferentes!';
                            echo '</span>';
                            echo '</label>';
                        }
                        ?>
                        <button class="btn btn-theme btn-block" type="submit"><i class="fa fa-lock"></i> Registrar</button>
                        <label class="checkbox">
                            <span class="pull-right" >
                                Campos com * são obrigatórios
                            </span>
                        </label>
                        <hr>

                        <div class="registration">
                            Quer acessar sua conta?<br/>
                            <a class="" href="/cuidandoseudimdim/Index/index">
                                Login
                            </a>
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
