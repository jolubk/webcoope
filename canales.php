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

    <section class="page" id="canales">
        <?php include "slider_page_f.php" ?>

        <?php include "menu.php" ?>

        <div class="enlace">
            
        </div>
        <div class="contenedor">            
            <div class="menu-detalle">
                <h2>Canales de Atención</h2>
                <div class="lista-enlace" id="nosotros" style="display:block; padding-top:0;">
                    <a href="agtocache.php">Agencia Tocache</a>
                    <a href="aguchiza.php">Agencia Uchiza</a>
                    <a href="agstalucia.php">Agencia Santa Lucía</a>
                    <a href="agtingomaria.php">Agencia Tingo María</a>
                    <a href="agbambamarca.php">Agencia Nuevo Bambamarca</a>
                    <a href="agnvoprogreso.php">Agencia Nuevo Progreso</a>
                    <a href="agaucayacu.php">Agencia Aucayacu</a>
                    <a href="agjuanjui.php">Agencia Juanjuí</a>
                </div>
            </div>
            <div class="descripcion">
                <div class="division">
                    <div class="mapa">
                        <img src="img/ag/agencias.png" alt="Mapa de Cobertura">
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