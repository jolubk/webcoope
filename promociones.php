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
        .info{
            display:flex;
        }
        .hombre{
            height:420px;
        }
        .iconoPdf{
            height:60px;
        }
        .info h3{
            margin-top: 20px;
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
        <?php include "slider_page.php" ?>

        <?php include "menu.php" ?>


        <div class="contenedor">            
            <div class="menu-detalle">
                <h2>Campañas</h2>
                <div class="lista-enlace" id="nosotros" style="display:block; padding-top:0;">
                    <a href="promociones.php" class="active">SUPER AHORRO</a>
                    
                </div>
            </div>
            <div class="descripcion">                
                <div class="somos">
                    <div class="detalle">
                        <div class="titulo"><h1>CON TU CUENTA A PLAZO FIJO</h1></div>
                        <article class="info">
                            <div>
                                <img class="hombre" src="./img/promociones/plazofijo/hombreAhorro.png"/>
                            </div>
                            <div>
                                <h3>Ventajas</h3>
                                 <ul>
                                    <li>
                                    Pago de interés por adelantado, mensual o al término
                                    </li>
                                    <li>
                                    No cobramos mantenimiento
                                    </li>
                                    <li>
                                    No cobramos ITF
                                    </li>
                                </ul>
                                <h3>¿Como abro mi cuenta?</h3>
                                <ul>
                                    <li>
                                    Ser socio COOPACT
                                    </li>
                                    <li>
                                    Monto de apertura a partir de S/ 500 soles
                                    </li>
                                
                                </ul>
                                <h3>Tarifario</h3>
                                <a href="./img/promociones/plazofijo/tarifario.pdf" target="_blank">
                                    <img class="iconoPdf" src="./img/promociones/plazofijo/iconoPdf.png"/>
                                </a>
                                
                            </div>
                        </article>
                       
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