<!DOCTYPE html>
<html lang="es">
<head>
    <?php include "clases.php" ?>
    <style>
        .banner_base{
            width:100%;
        }
        .banner_logo{
            position:absolute;
            top:80px;
            animation: crecimiento 1s ease-in-out;
        }
        @keyframes crecimiento {
            0% {
                transform: scale(0.15);
            }
            100% {
                transform: scale(1);
            }
        }
        .ahorro{
            border:2px solid red;
            height:550px !important;
        }
    </style>
</head>
<body>
    <?php include "header.php" ?>
<!-- 
    <form action="" id="search-form">
        <input type="search" placeholder="search here" name="" id="search-box">
        <label for="search-box" class="fas fa-search"></label>
        <i class="fas fa-times" id="close"></i>
    </form> -->

    <section class="page" id="nosotros">
 
    <div class="swiper page-slider">
    <div class="swiper-wrapper wrapper">
        <div class="swiper-slide slide">
            <div class="image ahorro">
                    <img class="banner_fondo" src="./img/promociones/plazofijo/base.jpg"/>
                    <img class="banner_logo" src="./img/promociones/plazofijo/logo.png"/>
            </div>
        </div>
    </div>
    <!-- <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div> -->
    <!-- <div class="swiper-pagination"></div> -->
    <div class="accesos-det">
        <div class="notop-det">
            <div style="border-bottom: #fff 1px solid;">
                <a id="creditos">
                    <img src="img/icon_creditos.png" alt="Créditos">
                    <span> CRÉDITOS</span>  
                    <div class="fondo"></div>                       
                </a>
                <a id="ahorros">
                    <img src="img/icon_ahorros.png" alt="Ahorros">
                    <span> AHORROS</span>
                </a>
                <a id="servicio">
                    <img src="img/icon_prevision_social.png" alt="Servicios">
                    <span> SERVICIOS</span>
                </a>
                <a href="promociones.php">
                    <img src="img/icon_campañas.png" alt="Campañas">
                    <span> CAMPAÑAS</span>
                </a>
                <a >
                    <img src="img/icon_noticias.png" alt="Noticias">
                    <span> NOTICIAS</span>
                </a>
            </div>            
        </div>
    </div>
</div>
  
       <?php include "menu.php" ?>
        
       

        <div class="enlace">
            
        </div>
        <div class="contenedor">            
            <div class="menu-detalle">
                <h2>Campañas</h2>
                <div class="lista-enlace" id="nosotros" style="display:block; padding-top:0;">
                    <a href="promociones.php" class="active">CON TU EJEMPLO MAMÁ</a>
                    <a href="navidad.php">REGALAZO POR NAVIDAD</a>
                    <a href="punchealcole.php">CON PUNCHE AL COLE</a>
                    <a href="navidad.php">SUPER AHORRO</a>
                </div>
            </div>
            <div class="descripcion">                
                <div class="somos">
                    <div class="detalle">
                        <div class="titulo"><h1>SUPER AHORRO</h1></div>
                        <p>COOPACT se constituyó el 15 de mayo de 1,976 y reconocida por la Quinta Región de SINAMOS con Resolución Nº 0033-77-OAE-ORAMS-V,
                            de fecha 06 de octubre de 1,977, inscrita la partida Nº 11000150 en libro de Cooperativas del Registro de Personas Jurídicas,Zona Registral Nº III,
                            con sede en Moyobamba – Oficina Registral Juanjui Región San Martín.</p>
                        <p>La sede central de la cooperativa se encuentra ubicada en el Jr. San Martín Nº 231, ciudad de Tocache, Provincia de Tocache, Región de San Martín.</p>
                        <p>La cooperativa se rige por la Ley General de Cooperativas D.S 074-90-TR y la normatividad emitida por la Superintendencia de Banca y Seguros
                        para organizaciones cooperativas no autorizadas a operar con recursos del público, su estatuto y los acuerdos de la Asamblea General.</p>
                        <p>La cooperativa es una persona jurídica de derecho privado de capital variable, sin fines de lucro, ilimitado número de socios, de duración indefinida
                        y de responsabilidad limitada; en función de su patrimonio neto y a las aportaciones suscritas y pagadas.</p>
                        <p>Contamos con más de 40 años de trabajo en el rubro de microfinanzas ofreciéndole ahorros, créditos y en especial beneficios sociales beneficios
                        sociales al servicio de sus socios y con presencia en 8 mercados ubicados en Tocache, Nuevo Bambamarca, Nuevo Progreso, Santa Lucía, Tingo María,
                        Aucayacu, Uchiza y Juanjuí.</p>
                    </div>
                </div>                
            </div>
        </div>
    </section>

    <section class="page">
        <div class="contenedor">
            <div class="linea"></div>
        </div>
    </section>

    <?php include "footer.php" ?>

    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>  

    <script src="js/scrypt.js"></script>
    <!--script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></!--script-->

</body>
</html>