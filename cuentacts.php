<!DOCTYPE html>
<html lang="es">
<head>
    <?php include "clases.php" ?>
    <style>
       
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
            $urlimagen='./img/cuentacts/Banner_Cts.jpg'
        ?>
        <?php include "slider_page_c.php" ?>

        <?php include "menu.php" ?>
        <div class="enlace">
            <a href="https://api.whatsapp.com/send?phone=+51942781226&text=Solicito información de Cuenta CTSya ">SOLICÍTALO AQUÍ</a>
        </div>
        <div class="contenedor">            
            
            
            <?php include "menucampanas.php" ?>
          
            
                            
            <div class="descripcion">                
                <div class="somos">
                    <div class="detalle ">
                        <div class="titulo"><h1>CUENTA CTS</h1></div>
                        <article class="info navicoop">
                            
                            <div>
                            <p>Apertura o traslada tu cuenta 𝗖𝗧𝗦 a la Cooperativa Tocache y obtén una extraordinaria tasa de 𝟴.𝟭𝟬% de interés para que sigas sacándole la mayor rentabilidad a tu dinero 

¡𝙋𝙤𝙧𝙦𝙪𝙚 𝙩𝙪 𝙚𝙨𝙛𝙪𝙚𝙧𝙯𝙤 𝙨𝙚 𝙡𝙤 𝙢𝙚𝙧𝙚𝙘𝙚!. </p>
                                
                            </div>

                        </article>
                                                   <a style="width:200px" class="btn_enlace" target="_blank" href="./img/cuentacts/Tarifario_Cts.pdf"><i class="far fa-file-pdf"></i><span style="font-size:16px">Tarifario</span> </a>

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