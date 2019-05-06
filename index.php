<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <!-- JQuery -->
        <script src="js/jquery.min.js" type="text/javascript"></script>

        <!-- Bootstrap -->
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>        
        
        <!-- Font Awesome -->
        <link href="css/all.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/all.min.js" type="text/javascript"></script>        
         <!-- TESTE -->      
        <!-- Meu CSS -->
        <link href="css/estilo.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        
        <!-- com EMMET: 
            div#topo+div#menu+div#corpo+div#rodape 
        -->
        
        <div id="topo">
            <img src="#" alt="LOGO"/>
            
            <div id="icones">
                <a href="#" class="iconFacebook">
                    <i class="fab fa-facebook-square fa-5x"></i>
                </a>
                <a href="#" class="iconTwitter">
                    <i class="fab fa-twitter-square fa-5x"></i>
                </a>
                <a href="#" class="iconInstagram">
                    <i class="fab fa-instagram fa-5x"></i>
                </a>
                <a href="#" class="iconEmail">
                    <i class="fas fa-envelope fa-5x"></i>
                </a>
                <a href="#"class="iconAdmin"> 
                    <i class="fas fa-lock fa-5x"></i>
                </a>
            </div>
        </div>
        
        <div id="menu">
            <div class="navbar navbar-default">
                <div class="container-fluid">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Inicio</a></li>
                        <li><a href="#">Quem Somos</a></li>
                        <li><a href="#">Historia</a></li>
                        <li><a href="#">Noticias</a></li>
                        <li><a href="#">Contato</a></li>                        
                    </ul>
                </div>
            </div>
        </div>
        
        <div id="corpo">
            <img src="#" alt="IMAGEM"/>
            
            <div id="textoIndex">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <p>
                    Curabitur pretium tincidunt lacus. Nulla gravida orci a odio. Nullam varius, turpis et commodo pharetra, est eros bibendum elit, nec luctus magna felis sollicitudin mauris. Integer in mauris eu nibh euismod gravida. Duis ac tellus et risus vulputate vehicula. Donec lobortis risus a elit. Etiam tempor. Ut ullamcorper, ligula eu tempor congue, eros est euismod turpis, id tincidunt sapien risus a quam. Maecenas fermentum consequat mi. Donec fermentum. Pellentesque malesuada nulla a mi. Duis sapien sem, aliquet nec, commodo eget, consequat quis, neque. Aliquam faucibus, elit ut dictum aliquet, felis nisl adipiscing sapien, sed malesuada diam lacus eget erat. Cras mollis scelerisque nunc. Nullam arcu. Aliquam consequat. Curabitur augue lorem, dapibus quis, laoreet et, pretium ac, nisi.
                </p>
            </div>

        </div>
        
        <div id="rodape">
            <p>2017-<?php echo date("Y"); ?> | 
                TI-26 | Todos os Direitos Reservados</p>
        </div>        
    </body>
</html>
