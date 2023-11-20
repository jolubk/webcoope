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
        <?php
            $urlimagen='./img/beneficios/Banner_Beneficios.jpg'
        ?>
        <?php include "slider_page_c.php" ?>

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
                            <a id="salud" class="active">Salud<br>Preventiva</a>
                            <a id="taller">Talleres y<br>capacitaciones</a>
                            <a id="complejo">Complejo Deportivo<br>Miguel Navarro Pisco</a>
                        </div>
                        <div class="salud active">
                            <div class="medicion">
                                <div class="medidas">
                                    <img src="./img/beneficios/control_peso.png" alt="Control Peso">
                                    <span>Control de peso</span>
                                </div>
                                <div class="medidas">
                                    <img src="./img/beneficios/control_presion.png" alt="Control Presion">
                                    <span>Medida de presión</span>
                                </div>
                                <div class="medidas">
                                    <img src="./img/beneficios/control_glucosa.png" alt="Control Glucosa">
                                    <span>Control de glucosa</span>
                                </div>
                                <div class="medidas">
                                    <img src="./img/beneficios/control_imc.png" alt="Control IMC">
                                    <span>Control de IMC<br>(índice de masa corporal)</span>
                                </div>
                            </div>
                            <div class="locales">
                                <div class="local">
                                    <div class="tit"><span>Tocache</span></div>
                                    <p>
                                        <b>Horario de Atención</b><br>
                                        Lunes a miércoles<br>
                                        de 08:00 a.m. a 06:25 p.m.
                                    </p>
                                </div>
                                <div class="local">
                                    <div class="tit"><span>Uchiza</span></div>
                                    <p>
                                        <b>Horario de Atención</b><br>
                                        Lunes, martes, miércoles y viernes<br>
                                        de 08:00 a.m. a 01:00 p.m. y 03:00 p.m. a 06:30 p.m.<br>
                                        Sábados 08:00 a.m. a 12:30 p.m.
                                    </p>
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

    <script src="js/scrypt.js"></script>
    <!--script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></!--script-->

</body>
</html>