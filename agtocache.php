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
        <?php include "slider_page.php" ?>

        <?php include "menu.php" ?>

        <div class="enlace">
            
        </div>
        <div class="contenedor">            
            <div class="menu-detalle">
                <h2>Canales de Atención</h2>
                <div class="lista-enlace" id="nosotros" style="display:block; padding-top:0;">
                    <a href="agtocache.php">Agencia Tocache <i class="fas fa-chevron-right menu-lat-enlace-flecha" style="float:right;"></i></a>
                    <a href="aguchiza.php" class="active">Agencia Uchiza</a>
                    <a href="agstalucia.php" class="active">Agencia Santa Lucía</a>
                    <a href="agtingomaria.php" class="active">Agencia Tingo María</a>
                    <a href="agbambamarca.php" class="active">Agencia Nuevo Bambamarca</a>
                    <a href="agnvoprogreso.php" class="active">Agencia Nuevo Progreso</a>
                    <a href="agaucayacu.php" class="active">Agencia Aucayacu</a>
                    <a href="agjuanjui.php" class="active">Agencia Juanjuí</a>
                </div>
            </div>
            <div class="descripcion">
                <div class="division">
                    <div class="detag">
                        <h3>AGENCIA TOCACHE</h3>
                        <div class="fotoag">
                            <div class="foto"><img src="img/ag/agtocache.png" alt="Agencia Tocache"></div>
                            <div class="detfoto">
                                <br><br><span><i class="fas fa-map-marker-alt"></i> Jr. San Martín 231 - Tocache</span>
                                <br><br><span><i class="fas fa-phone-alt"></i> 042-551533 / 042-551108 Anexo 100</span>
                            </div>
                        </div>
                        <p style="color: var(--green);">
                            <span><i class="fas fa-clock"></i> HORARIO DE ATENCIÓN</span><br>
                            Lunes a Viernes de 8:00 a.m. a 6:25 p.m.<br>
                            Sábados de 8:00 a.m. a 12:30 p.m.                            
                        </p>
                        <p style="color: var(--blue);">
                            <span><i class="fas fa-clock"></i> HORARIO DE ATENCIÓN EFECTICASH</span><br>
                            Lunes a Viernes de 6:30 p.m. a 8:30 p.m.<br>
                            Sábados de 12:30 p.m. a 5:00 p.m.<br>
                            Domingos y Feriados de 8:00 a.m. a 12:00 p.m.                            
                        </p>
                    </div>
                    <div class="mapa">
                        <img src="img/ag/tocache.png" alt="Mapa de Cobertura">
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