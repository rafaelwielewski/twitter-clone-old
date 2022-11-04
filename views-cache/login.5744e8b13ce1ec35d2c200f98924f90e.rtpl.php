<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<!--
    Twitter Clone
-->
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hcode Store</title>
    
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/res/site/css/font-awesome.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/res/site/css/owl.carousel.css">
    <link type="text/css" rel="stylesheet" href="/res/site/css/styles.css">
    <link rel="stylesheet" href="/res/site/css/responsive.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


    
    <!-- Custom styles for this template -->
    <link href="/res/site/css/sidebars.css" rel="stylesheet">
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<div class="single-product-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">                
            <div class="col-md-6">


                <div class="alert alert-danger">

                </div>


                <form action="/" id="login-form-wrap" class="login" method="post">
                    <h2>Acessar</h2>
                    <p class="form-row form-row-first">
                        <label for="login">Username <span class="required">*</span>
                        </label>
                        <input type="text" id="login" name="login" class="input-text">
                    </p>
                    <p class="form-row form-row-last">
                        <label for="senha">Senha <span class="required">*</span>
                        </label>
                        <input type="password" id="senha" name="password" class="input-text">
                    </p>
                    <div class="clear"></div>
                    <p class="form-row">
                        <input type="submit" value="Login" class="button">
                        <label class="inline" for="rememberme"><input type="checkbox" value="forever" id="rememberme" name="rememberme"> Manter conectado </label>
                    </p>
                    <p class="lost_password">
                        <a href="/forgot">Esqueceu a senha?</a>
                    </p>

                    <div class="clear"></div>
                </form>                    
            </div>
            <div class="col-md-6">
                

                <div class="alert alert-danger">

                </div>


                <form id="register-form-wrap" action="/register" class="register" method="post">
                    <h2>Criar conta</h2>
                    <p class="form-row form-row-first">
                        <label for="nome">Nome Completo <span class="required">*</span>
                        </label>
                        <input type="text" id="nome" name="name" class="input-text" value="">
                    </p>
                    <p class="form-row form-row-first">
                        <label for="login">Usename <span class="required">*</span>
                        </label>
                        <input type="login" id="login" name="login" class="input-text" value="">
                    </p>
                    <p class="form-row form-row-last">
                        <label for="senha">Senha <span class="required">*</span>
                        </label>
                        <input type="password" id="senha" name="password" class="input-text">
                    </p>
                    <div class="clear"></div>

                    <p class="form-row">
                        <input type="submit" value="Criar Conta" name="create" class="button">
                    </p>

                    <div class="clear"></div>
                </form>               
            </div>
        </div>
    </div>
</div>

</body>
</html>
    



