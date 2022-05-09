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

    <section class="page" id="nosotros">
        <?php include "slider_page.php" ?>

        <?php include "menu.php" ?>

        <div class="enlace">
            
        </div>
        <div class="contenedor">            
            <div class="menu-detalle">
                <h2>Nosotros</h2>
                <div class="lista-enlace" id="nosotros" style="display:block; padding-top:0;">
                    <a href="nosotros.php">QUIENES SOMOS</a>
                    <a href="directivos.php">DIRECTIVOS</a>
                    <a href="transparencia.php" class="active">TRANSPARENCIA</a>
                </div>
            </div>
            <div class="descripcion">                
                <div class="somos">
                    <div class="detalle">
                        <div class="titulo"><h1>TRANSPARENCIA</h1></div>
                    </div>
                </div>
                <div class="division">
                    <a class="transparencia">TASAS ACTIVAS</a>
                    <a class="transparencia">ESTADOS FINANCIEROS</a>
                    <a class="transparencia">TASAS PASIVAS</a>
                    <a class="transparencia">REGLAMENTO Y TARIFARIO PREVISION SOCIAL</a>
                    <a class="transparencia">COMISIONES</a>
                    <a class="transparencia">ESTATUTO</a>
                    <a class="transparencia memoria">MEMORIA ANUAL 
                        <div class="flecha-baja"><i class="fa fa-angle-down" aria-hidden="true"></i></div>
                        <div class="flecha-sube"><i class="fa fa-angle-up" aria-hidden="true"></i></div>
                    </a>
                    <a class="transparencia">REGLAMENTO GENERAL COOPACT</a>
                    <div class="memorias">
                        <a href="">Año 2021</a>
                        <a href="">Año 2020</a>
                        <a href="">Año 2019</a>
                        <a href="">Año 2018</a>
                        <a href="">Año 2017</a>
                        <a href="">Año 2016</a>
                        <a href="">Año 2015</a>
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
    <script src="js/scrypttransparencia.js"></script>
    <!--script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></!--script-->

</body>
</html>