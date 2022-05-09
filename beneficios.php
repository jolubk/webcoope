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
                <div class="prevsocial">
                    <div class="detalle">
                        <div class="titulo"><h1>BENEFICIOS</h1></div>
                        <p style="color:var(--plomopie);font-weight: bold;">Entérate de los servicios que ofrecemos y elije el plan anual que desees.</p>
                        <ul>
                            <li>
                                <span>Ayuda económica por maternidad</span>
                                <p>Se confiere hasta los 90 días posteriores a dar a luz, dirigido a la persona que tenga la condición de socia, esposa o conviviente del afiliado.</p>
                            </li>
                            <li>
                                <span>Fondo mortuorio</span>
                                <p>Se da por una sola vez, por el fallecimiento del socio o cualquiera de las personas que se indique en la declaración jurada en vigencia.</p>
                            </li>
                            <li>
                                <span>Ayuda económica en caso de invalidez temporal</span>
                                <p>Dirigida a los socios que han tenido un accidente que le imposibilita al socio desarrollar sus funciones cotidianas por un periodo mínimo de veinte días.</p>
                            </li>
                            <li>
                                <span>Prestaciones de atenciones odontológicas y médicas</span>
                                <p>Atendemos a nuestros socios una vez por mes en cualquiera de las atenciones médicas, sin embargo los tickets que se otorga para realizar atenciones médicas son personales, no son acumulables y no son negociables, pudiendo ser utilizados dentro del mes de la emisión del ticket.</p>
                            </li>
                        </ul>
                        
                        <div class="linkplanes">
                            <a id="planes" class="active">Entérate de nuestros planes</a>
                            <a id="documen">Documentación</a>
                        </div>
                        <div class="planes active">
                            <div class="plan">
                                <p>Básico</p>
                                <span>S/ 20</span>
                            </div>
                            <div class="plan">
                                <p>Intermedio</p>
                                <span>S/ 35</span>
                            </div>
                            <div class="plan">
                                <p>Premium</p>
                                <span>S/ 50</span>
                            </div>
                        </div>
                        <div class="documen">
                            <a href="/docs/previsionsocial.pdf"><i class="fas fa-file-pdf"></i> Reglamento de Previsión Social</a>
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