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
            $urlimagen='./img/ahorrolibre/Banner_Ahorro_libre.jpg'
        ?>
        <?php include "slider_page_c.php" ?>

        <?php include "menu.php" ?>

        <div class="enlace">
            <a href="https://api.whatsapp.com/send?phone=+51942781226&text=Solicito información de Ahorro Libre">SOLICÍTALO AQUÍ</a>
        </div>
        <div class="contenedor">            
            <?php include "menuahorro.php" ?>
            <div class="descripcion">                
                <div><h1>AHORRO LIBRE</h1><div style="width: 30%; border-bottom: var(--green) solid 2px;"></div></div>
                <p>Producto dirigido a personas naturales y jurídicas que cuenten con excedente de liquidez y/o necesiten realizar operaciones de manera continua. </p>
                <ul>
                    <li>Monto de apertura de S/. 20.00 </li>
                    <li>Cuenta aplicable en moneda nacional y moneda extranjera.</li>
                    <li>Sujeto a comisiones y gastos según el tarifario vigente. </li>
                    <li>Aplicable para desembolsos de créditos. </li>
                </ul>
                <a style="width:180px" class="btn_enlace" target="_blank" href="./img/ahorrolibre/Tarifario_Ahorro_libre.pdf"><i class="far fa-file-pdf"></i> <span style="font-size:16px">Tarifario</span></a>

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