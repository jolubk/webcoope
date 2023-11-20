<!DOCTYPE html>
<html lang="es">
<head>
    <?php include "clases.php" ?>
    <style>
        .nav_iz{
            display:flex;
            flex-direction:column;
        }
        ul{
           
        }
        .menu-detalle{
             width:100% !important;
             margin-bottom: 20px;
             margin-top: 20px;
        }
        .prevision_social{
            display:grid;
            
        }
       
    </style>
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
            $urlimagen='./img/previsionsocial/Banner_Prev_Social.jpg'
        ?>
        <?php include "slider_page_c.php" ?>

        <?php include "menu.php" ?>

        
        <div class="contenedor">  
            <div class="nav_iz">
                <?php include "menuservicios.php" ?>
                <img src="./img/previsionsocial/plan_anual.jpg"/>
            </div>          
            
            <div class="descripcion">                
                <div class="prevsocial">
                    <div class="detalle">
                        <div class="titulo"><h1>PREVISIÓN SOCIAL</h1></div>
                        <p style="margin-top:20px;color:var(--plomopie);font-weight: bold;">Entérate de los servicios que ofrecemos:</p>
                        <div>
                            <ul>
                            <li>
                                <span>FONDO MORTUORIO: </span>
                                <p>Se otorga por el fallecimiento del titular y/o de cualquiera de las personas que se indique en la declaración jurada de beneficiarios  </p>
                            </li>
                            <li>
                                <span>BENEFICIO ECONÓMICO POR MATERNIDAD:</span>
                                <p>Es aquella que se confiere a la madre de un neonato, que tenga la condición de socia o esté casada o sea conviviente del socio afiliado a la Previsión Social.</p>
                            </li>
                            <li>
                                <span>BENEFICIO ECONÓMICO EN CASO DE INVALIDEZ TOTAL Y PERMANENTE: </span>
                                <p>Dirigida a los socios que han tenido un accidente que le imposibilita de manera permanente desarrollar sus funciones cotidianas.</p>
                            </li>
                            <li>
                                    <span>BENEFICIO ECONÓMICO EN CASO DE INVALIDEZ TEMPORAL: </span>
                                    <p>Dirigida a los socios que han tenido un accidente que le imposibilita desarrollar sus funciones cotidianas por un cierto periodo de tiempo. </p>
                                </li>
                                <li>
                                    <span>ATENCIONES MÉDICAS:  </span>
                                    <p>Los beneficios de atención medica general que contempla la COOPAC TOCACHE se realizará a través de centros médicos con los cuales tiene contrato.</p>
                                    <p>Este beneficio se otorgará en forma trimestral</p>
                                    <p>Los tickets que se otorga para realizar atenciones médicas son personales, no son acumulables y no son negociables.</p>
                                </li>
                                <li>
                                    <span>CAMPAÑAS MÉDICAS DE SALUD:  </span>
                                    <p>Los servicios de prestación de salud adicionales que contempla la COOPAC TOCACHE para sus socios se realizarán a través de campañas médicas en diferentes especialidades. </p>
                                    <a class="btn_enlace" target="_blank" href="./img/previsionsocial/Prevision_Social.pdf"><i class="far fa-file-pdf"></i> Terminos y Condiciones</a>
                                </li>
                                
                                    
                                
                        </ul>
                        
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
    <script src="js/scryptservicios.js"></script>
    <!--script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></!--script-->

</body>
</html>