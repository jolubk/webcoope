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
        .menu-detalle{
            width:100%
        }
        .navicoop{
            display:flex
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
        <?php
            $urlimagen='./img/navicop/Banner_Navicoop.jpg'
        ?>
        <?php include "slider_page_c.php" ?>

        <?php include "menu.php" ?>
        
        <div class="contenedor">            
            
            
            <?php include "menucampanas.php" ?>
          
            
                            
            <div class="descripcion">                
                <div class="somos">
                    <div class="detalle ">
                        <div class="titulo"><h1>NAVICOOP</h1></div>
                        <article class="info navicoop">
                            
                            <div>
                            <p>En esta temporada navideña llega la campaña "𝐍𝐚𝐯𝐢𝐂𝐨𝐨𝐩 𝐓𝐨𝐜𝐚𝐜𝐡𝐞"; adquiere tu crédito con nosotros durante la campaña navideña (11 de Setiembre al 20 de Diciembre del 2023) y automáticamente 𝐩𝐚𝐫𝐭𝐢𝐜𝐢𝐩𝐚 𝐝𝐞𝐥 𝐬𝐨𝐫𝐭𝐞𝐨 𝐝𝐞 𝐠𝐫𝐚𝐧𝐝𝐞𝐬 𝐩𝐫𝐞𝐦𝐢𝐨𝐬. </p>
                                <h2>Mas detalles..</h2>
                                <a class="btn_enlace" target="_blank" href="./img/navicop/Bases_Navicoop.pdf"><i class="far fa-file-pdf"></i> Terminos y Condiciones</a>
                            </div>
                            <img class="" src="./img/navicop/PapaNoel.jpg"/>
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