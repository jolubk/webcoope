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
        <?php
            $urlimagen='./img/transparencia/Banner_Transparencia.jpg'
        ?>
        <?php include "slider_page_c.php" ?>

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
                    <a target="_blank" href="./transparencia/Tasas_Activas.pdf" class="transparencia">TASAS ACTIVAS</a>
                    <a target="_blank" href="./transparencia/Estado_Financiero_Set23.pdf"class="transparencia">ESTADOS FINANCIEROS</a>
                    <a target="_blank" href="./transparencia/Tasas_Pasivas.pdf" class="transparencia">TASAS PASIVAS</a>
                    <a target="_blank" href="./transparencia/Reglamento_Prevision_Social.pdf" class="transparencia">REGLAMENTO Y TARIFARIO PREVISION SOCIAL</a>
                    <a target="_blank" href="./transparencia/Reglamento_General_Elecciones_2017.pdf"  class="transparencia">REGLAMENTO GENERAL DE ELECCIONES</a>
                    <a target="_blank" href="./transparencia/Estatuto_2023.pdf"class="transparencia">ESTATUTO</a>
                    <a class="transparencia memoria">MEMORIA ANUAL 
                        <div class="flecha-baja"><i class="fa fa-angle-down" aria-hidden="true"></i></div>
                        <div class="flecha-sube"><i class="fa fa-angle-up" aria-hidden="true"></i></div>
                    </a>
                    <div class="memorias">
                        <a target="_blank" href="./img/memorias/Memoria_Anual_2022.pdf">Año 2022</a>
                        <a target="_blank" href="./img/memorias/Memoria_Anual_2021.pdf">Año 2021</a>
                        <a target="_blank" href="./img/memorias/Memoria_Anual_2020.pdf">Año 2020</a>
                        <a target="_blank" href="./img/memorias/Memoria_Anual_2019.pdf">Año 2019</a>
                        <a target="_blank" href="./img/memorias/Memoria_Anual_2018.pdf">Año 2018</a>
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