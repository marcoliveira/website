<?php

$url_iso32 = "http://sourceforge.net/projects/kaiana/files/kaiana-alpha1-32bits.iso/download";
$url_iso64 = "http://sourceforge.net/projects/kaiana/files/kaiana-alpha1-64bits.iso/download";

$versao = 3;

?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Kaiana</title>

        <meta name="description" content="">

        <!-- styles -->
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.2/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.2/css/bootstrap-responsive.min.css"/>
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"/>
        <link rel="stylesheet" href="styles/main.css?v=<?php echo $versao; ?>"/>

    </head>
  
    <body id="layout1">
        
        <?php require_once 'fancybox.php'; ?>

        <div class="jumbotron masthead">
            <div class="container">
                <img class="logo" src="images/kaiana-logo-white.png" alt="Logo">
                <p>O sistema perfeito para suas atividades diárias.</p>
                <div class="row-fluid">
                    <div class="span10 offset1 mockup">
                        <!-- imagem do macbook -->
                        <img src="images/screenshot.png"/>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="container social">
            <div class="row-fluid">
                <div class="span12">
                    <span class="st_fblike_hcount" st_url="http://www.kaiana.com.br/" displayText="Facebook Like"></span>
                    <span class="st_plusone_hcount" st_url="http://www.kaiana.com.br/" displayText="Google +1"></span>
                </div>
            </div>
        </div>

        
        <div class="container">
            <div class="row-fluid Features">
                <h2>Conta com tudo o que você procura</h2>
                <div class="row-fluid">
                    <div class="span6">
                        <p><img src="images/pc.png" alt="Orientation icon" class="pull-left">Elegante porque tem um ambiente agradável e uma interface polida.</p>
                    </div>
                    <div class="span6">
                        <p><img src="images/power.png" alt="Calendar icon" class="pull-left">Completo porque suporta à maioria dos formatos de arquivos.</p>
                    </div>
                </div>
                <div class="row-fluid">
                    <div class="span6">
                        <p><img src="images/security.png" alt="Clipboard icon" class="pull-left">Seguro pois conta com uma base reconhecidamente sólida e estável.</p>
                    </div>
                    <div class="span6">
                        <p><img src="images/graph.png" alt="Analytics graphs icon" class="pull-left">Leve pois consome poucos recursos do seu computador.</p>
                    </div>
                </div>
            </div>

            <div class="row-fluid">
                <div class="span10 offset1 subscribe">
                    <h2>A nova versão alfa acaba de sair!</h2>
                    <h4>Escolha uma das opções abaixo.</h4>
                    <a href="javascript:;" class="btn btn-large btn-success" id="btnDownload">Fazer download</a>
                    <a href="javascript:;" class="btn btn-large btn-warning" id="btnNotasVersao">Notas da Versão</a>
                </div>
            </div>

            <div class="row-fluid">
                <div class="span8 offset2 footer">
                    <p>
                        <a href="http://www.uniaolivre.com/forum/">Obter suporte via Fórum União Livre</a><br/>
                        <a href="http://sourceforge.net/p/kaiana/code/ci/master/tree/">Código Fonte</a>
                    </p>
                    <p class="footertext">Copyright &copy; <?php echo date('Y'); ?> - União Livre e Kaiana</p>
                </div>
            </div>
        </div>
    
        <!-- scripts -->
        <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
        <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
        <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
        <script type="text/javascript" src="scripts/main.js?v=<?php echo $versao; ?>"></script>
    </body>
</html>
