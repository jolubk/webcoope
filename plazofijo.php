<!DOCTYPE html>
<html lang="es">
<head>
    <?php include "clases.php" ?>
    
</head>
<body>
    <?php include "header.php" ?>
<!-- 
    <form action="" id="search-form">
        <input type="search" placeholder="search here" name="" id="search-box">
        <label for="search-box" class="fas fa-search"></label>
        <i class="fas fa-times" id="close"></i>
    </form> -->

    <section class="page" id="page">
        <?php
            $urlimagen='./img/plazofijo/Banner_Plazo_Fijo.jpg'
        ?>
        <?php include "slider_page_c.php" ?>

        <?php include "menu.php" ?>

        <div class="enlace">
            <a href="https://api.whatsapp.com/send?phone=+51942781226&text=Solicito información de Plazo Fijo">SOLICÍTALO AQUÍ</a>
        </div>
        <div class="contenedor">            
            <?php include "menuahorro.php" ?>
            <div class="descripcion">                
                <div><h1>PLAZO FIJO</h1><div style="width: 30%; border-bottom: var(--green) solid 2px;"></div></div>
                <p>Es una cuenta de ahorros que se mantiene por un tiempo determinado. Durante ese periodo de tiempo el cliente debe dejar depositado el capital sin realizar ningún depósito o retiro de este, a fin de obtener el rendimiento de la tasa de interés prometida. Sin embargo, el cliente puede cancelar su Depósito para disponer libremente de su dinero con la consecuencia de perder los beneficios prometidos al momento de la apertura del Depósito. La tasa de interés de un Depósito a Plazo es mayor a la de una Cuenta de Ahorro y mientras mayor sea el plazo del Depósito, mayor será la tasa de interés de este. </p>
                
                <a style="width:180px" class="btn_enlace" target="_blank" href="./img/plazofijo/Tarifario_Plazo_Fijo.pdf"><i class="far fa-file-pdf"></i> <span style="font-size:16px">Tarifario</span></a>

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