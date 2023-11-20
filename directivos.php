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
            $urlimagen='./img/directivos/Banner_Directivos.jpg'
        ?>
        <?php include "slider_page_c.php" ?>

        <?php include "menu.php" ?>

        <div class="enlace">
            
        </div>
        <div class="contenedor">            
            <div class="menu-detalle">
                <h2>Nosotros</h2>
                <div class="lista-enlace" id="nosotros" style="display:block; padding-top:0;">
                    <a href="nosotros.php" >QUIENES SOMOS</a>
                    <a href="directivos.php" class="active">DIRECTIVOS</a>
                    <a href="transparencia.php">TRANSPARENCIA</a>
                </div>
            </div>
            <div class="descripcion">                
                <div class="somos">
                    <div class="detalle">
                        <div class="titulo"><h1>DIRECTIVOS 2022 - 2023</h1></div>                        
                    </div>
                </div>
                <div class="consejo">Consejo de Administración</div>
                <div class="division">                    
                    <div class="directivos">
                        <div class="directivo">
                            <div class="cargo">Presidente:</div>
                            <div class="nombre">Juan Francisco Ibarra Huamán</div>
                        </div>
                        <div class="directivo">
                            <div class="cargo">Viceresidente:</div>
                            <div class="nombre">Elias Díaz Meza</div>
                        </div>
                        <div class="directivo">
                            <div class="cargo">Secretaria:</div>
                            <div class="nombre">Rosa Elena Madrid Cruz</div>
                        </div>
                    </div>
                    <div class="directivos">
                        <div class="directivo">
                            <div class="cargo">1er Vocal:</div>
                            <div class="nombre">Luis Enrique Urruchi Reynoso</div>
                        </div>
                        <div class="directivo">
                            <div class="cargo">2do Vocal:</div>
                            <div class="nombre">Pedro Adolfo Figueroa Herrera </div>
                        </div>
                    </div>
                </div>
                <div class="consejo">Consejo de Vigilancia</div>
                <div class="division">                    
                    <div class="directivos">
                        <div class="directivo">
                            <div class="cargo">Presidente:</div>
                            <div class="nombre">Eliseo Cueva Marin</div>
                        </div>
                        <div class="directivo">
                            <div class="cargo">Vicepresidente:</div>
                            <div class="nombre">Grimaldo Velasquez Upiachihua</div>
                        </div>
                    </div>
                    <div class="directivos">
                        <div class="directivo">
                            <div class="cargo">Secretario:</div>
                            <div class="nombre">Enrique Leónidas Rojas Arcos </div>
                        </div>
                    </div>
                </div>
                <div class="consejo">Comité de Educación</div>
                <div class="division">                    
                    <div class="directivos">
                        <div class="directivo">
                            <div class="cargo">Presidente:</div>
                            <div class="nombre">Elias Díaz Meza</div>
                        </div>
                        <div class="directivo">
                            <div class="cargo">Vicepresidente:</div>
                            <div class="nombre">Leisvith Shupingahua Chávez </div>
                        </div>
                    </div>
                    <div class="directivos">
                        <div class="directivo">
                            <div class="cargo">Secretaria:</div>
                            <div class="nombre">Natividad Silva Vela</div>
                        </div>
                    </div>
                </div>
                <div class="consejo">Comité Electoral</div>
                <div class="division">                    
                    <div class="directivos">
                        <div class="directivo">
                            <div class="cargo">Presidente:</div>
                            <div class="nombre">Etel Estrella Gómez</div>
                        </div>
                        <div class="directivo">
                            <div class="cargo">Vicepresidente:</div>
                            <div class="nombre">Greta Domínguez Martin</div>
                        </div>
                    </div>
                    <div class="directivos">
                        <div class="directivo">
                            <div class="cargo">Secretaria:</div>
                            <div class="nombre">Jannet Ojeda Alberco</div>
                        </div>
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