<?php

if( !empty ($_SESSION["newsession"]) ){
    $mensagem=  $_SESSION["newsession"];
    echo"<div data-alert class='alert-box' style='    background-color:#6c195c; color: white;text-align: center;font-weight: bold;font-size: 22px;padding: 28px;'>
            $mensagem
            </div>" ;
    unset($_SESSION["newsession"]);
}

?>
<header >
<div data-sticky-container>
    <div data-sticky data-options="marginTop:0;" id="verificar" data-top-anchor="trava" data-aos="fade-up" data-aos-duration="2000">
    <div class="top"  data-aos="fade-up">
            <div class="row row-nav">
                    <div class="title-bar" data-responsive-toggle="example-menu" data-hide-for="large">
                        <div class="column small-6">
                            <div class="title-bar-title">
                                <figure>
                                    <a href="/novo/"><img src="imgs/logo.png"></a>
                                </figure>   
                            </div>
                        </div>
                        <div class="column small-6">
                             <button class="icon-menu float-right" type="button" data-toggle="example-menu"></button>
                        </div>                                                                                      
                    </div>        
                <div class="top-bar" id="example-menu">
                    <div class="box-logo-desk">
                        <figure id="logo_topo_home">
                            <a href="/novo/"><img src="imgs/logo.png"></a>
                        </figure>
                    </div>
                    <ul class="vertical medium-horizontal dropdown menu "  data-responsive-menu="accordion medium-dropdown" >
                        <li class="menu-top" ><a href="quem-somos.php" data-smooth-scroll>Sobre</a></li>
                        <li class="menu-top" >
                            <a href="#">Especialidades </a>
                            <ul class="menu vertical">                                
                                <li>
                                    <a href="ginecologia-e-obstetricia.php">
                                        <div class="row">
                                            <div class="column large-3 small-3 medium-3 col-icon-sub-menu">
                                                <img src="imgs/icons/icon-ginecologia.png">
                                            </div>
                                            <div class="column large-9 small-9 medium-9 col-text-icon-menu">
                                                Ginecologia e Obstetricia
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="medicina-fetal.php">
                                        <div class="row">
                                            <div class="column large-3 small-3 medium-3 col-icon-sub-menu">
                                                <img src="imgs/icons/icon-medicina-fetal.png">
                                            </div>
                                            <div class="column large-9 small-9 medium-9 col-text-icon-menu">
                                                Medicina Fetal
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="pediatria.php">
                                        <div class="row">
                                            <div class="column large-3 small-3 medium-3 col-icon-sub-menu">
                                                <img src="imgs/icons/icon-pediatria.png">
                                            </div>
                                            <div class="column large-9 small-9 medium-9 col-text-icon-menu">
                                                Pediatria
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="nutricao.php">
                                        <div class="row">
                                            <div class="column large-3 small-3 medium-3 col-icon-sub-menu">
                                                <img src="imgs/icons/icon-nutricao.png">
                                            </div>
                                            <div class="column large-9 small-9 medium-9 col-text-icon-menu">
                                                Nutrição
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="psicologia.php">
                                        <div class="row">
                                            <div class="column large-3 small-3 medium-3 col-icon-sub-menu">
                                                <img src="imgs/icons/icon-psicologia.png">
                                            </div>
                                            <div class="column large-9 small-9 medium-9 col-text-icon-menu">
                                                Psicologia
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="medicina-do-adolescente.php">
                                        <div class="row">
                                            <div class="column large-3 small-3 medium-3 col-icon-sub-menu">
                                                <img src="imgs/icons/icon-medicina-adolescente.png">
                                            </div>
                                            <div class="column large-9 small-9 medium-9 col-text-icon-menu">
                                                Medicina do Adolescente
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="ultrassonografia-geral-e-especialidades.php">
                                        <div class="row">
                                            <div class="column large-3 small-3 medium-3 col-icon-sub-menu">
                                                <img src="imgs/icons/icon-geral-pediatria.png">
                                            </div>
                                            <div class="column large-9 small-9 medium-9 col-text-icon-menu">
                                                Ultrassonografia Geral e Pediátrica
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-top" ><a href="palestras.php">Palestras</a></li>
                        <li class="menu-top" ><a href="novidades.php">Novidades</a></li>
                        <li class="" ><a href="contato.php" data-smooth-scroll>Contato</a></li>
                    </ul>         
                </div>
            </div>
        </div>
    </div>
</div>
</header>
