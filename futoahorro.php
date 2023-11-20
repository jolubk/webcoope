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
            $urlimagen='./img/futoahorro/Banner_Futo_Ahorro.jpg'
        ?>
        <?php include "slider_page_c.php" ?>

        <?php include "menu.php" ?>

        <div class="enlace">
            <a href="https://api.whatsapp.com/send?phone=+51942781226&text=Solicito información de Futu Ahorro">SOLICÍTALO AQUÍ</a>
        </div>
        <div class="contenedor">            
            <?php include "menuahorro.php" ?>
            <div class="descripcion">                
                <div><h1>FUTU AHORRO</h1><div style="width: 30%; border-bottom: var(--green) solid 2px;"></div></div>
                <p>Es una cuenta de ahorro con depósitos por importes y fechas predeterminadas, con un fin específico, que de cumplirse a cabalidad el socio percibirá como retribución un determinado importe como interés.  </p>
                <ul>
                    <li>Tasas de interés atractivas. </li>
                    <li>No cobramos comisiones, mantenimiento, ni ITF.</li>
                    <li>Podrás realizar tus depósitos a través de nuestra red de agencias. </li>
                    <li>Accederás a los múltiples beneficios de ser socio. </li>
                </ul>
                <a style="width:180px" class="btn_enlace" target="_blank" href="./img/futoahorro/Tarifario_Futo_Ahorro.pdf"><i class="far fa-file-pdf"></i> <span style="font-size:16px">Tarifario</span></a>

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