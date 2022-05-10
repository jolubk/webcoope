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

    <section class="page" id="servicios">
        <?php include "slider_page.php" ?>

        <?php include "menu.php" ?>

        <div class="enlace">
            
        </div>
        <div class="contenedor">            
            <?php include "menuservicios.php" ?>
            <div class="descripcion">                
                <div class="beneficios">
                    <div class="detalle">
                        <div class="titulo"><h1>BENEFICIOS</h1></div>
                        
                        <div class="linkbeneficios">
                            <a id="salud" class="active">Salud Preventiva</a>
                            <a id="taller">Talleres y capacitaciones</a>
                            <a id="complejo">Complejo Deportivo Miguel Navarro Pisco</a>
                        </div>
                        <div class="salud active">
                            <div class="medicion">
                                <div class="medidas">
                                    <img src="" alt="">
                                    <span>Control de peso</span>
                                </div>
                                <div class="medidas">
                                    <img src="" alt="">
                                    <span>Medida de presión</span>
                                </div>
                                <div class="medidas">
                                    <img src="" alt="">
                                    <span>Control de glucosa</span>
                                </div>
                                <div class="medidas">
                                    <img src="" alt="">
                                    <span>Control de IMC<br>(índice de masa corporal)</span>
                                </div>
                            </div>                            
                        </div>
                        <div class="taller">
                            <a href="/docs/previsionsocial.pdf"><i class="fas fa-file-pdf"></i> Taller</a>
                        </div>
                        <div class="complejo">
                            <a href="/docs/previsionsocial.pdf"><i class="fas fa-file-pdf"></i> Complejo</a>
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

    <script src="js/scryptservicios.js"></script>
    <script src="js/scrypt.js"></script>
    <!--script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></!--script-->

</body>
</html>