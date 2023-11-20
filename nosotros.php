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
            $urlimagen='./img/quienessomos/Banner_Quienes_Somos.jpg'
        ?>
        <?php include "slider_page_c.php" ?>

        <?php include "menu.php" ?>

        <div class="enlace">
            
        </div>
        <div class="contenedor">            
            <div class="menu-detalle">
                <h2>Nosotros</h2>
                <div class="lista-enlace" id="nosotros" style="display:block; padding-top:0;">
                    <a href="nosotros.php" class="active">QUIENES SOMOS</a>
                    <a href="directivos.php">DIRECTIVOS</a>
                    <a href="transparencia.php">TRANSPARENCIA</a>
                </div>
            </div>
            <div class="descripcion">                
                <div class="somos">
                    <div class="detalle">
                        <div class="titulo"><h1>COOPERATIVA DE AHORRO Y CRÉDITO TOCACHE</h1></div>
                        <p>COOPACT se constituyó el 15 de mayo de 1,976 y reconocida por la Quinta Región de SINAMOS con Resolución Nº 0033-77-OAE-ORAMS-V,
                            de fecha 06 de octubre de 1,977, inscrita la partida Nº 11000150 en libro de Cooperativas del Registro de Personas Jurídicas,Zona Registral Nº III,
                            con sede en Moyobamba – Oficina Registral Juanjui Región San Martín.</p>
                        <p>La sede central de la cooperativa se encuentra ubicada en el Jr. San Martín Nº 231, ciudad de Tocache, Provincia de Tocache, Región de San Martín.</p>
                        <p>La cooperativa se rige por la Ley General de Cooperativas D.S 074-90-TR y la normatividad emitida por la Superintendencia de Banca y Seguros
                        para organizaciones cooperativas no autorizadas a operar con recursos del público, su estatuto y los acuerdos de la Asamblea General.</p>
                        <p>La cooperativa es una persona jurídica de derecho privado de capital variable, sin fines de lucro, ilimitado número de socios, de duración indefinida
                        y de responsabilidad limitada; en función de su patrimonio neto y a las aportaciones suscritas y pagadas.</p>
                        <p>Contamos con más de 40 años de trabajo en el rubro de microfinanzas ofreciéndole ahorros, créditos y en especial beneficios sociales beneficios
                        sociales al servicio de sus socios y con presencia en 8 mercados ubicados en Tocache, Nuevo Bambamarca, Nuevo Progreso, Santa Lucía, Tingo María,
                        Aucayacu, Uchiza y Juanjuí.</p>
                    </div>
                </div>
                <div class="division">
                    <div class="texto">
                        <div class="solapa">PROPÓSITO</div>
                        <div class="mision">
                            <h2>MISIÓN</h2>
                            <P>Brindar servicios financieros y
                                sociales a nuestros socios con
                                estándares de calidad, procesos
                                innovadores, tecnología y
                                personal comprometido basado
                                en valores y principios
                                cooperativos.</P>
                        </div>
                        <div class="vision">
                            <h2>VISIÓN</h2>
                            <P>Al 2024, ser una cooperativa de
                                ahorro y crédito líder en el Alto
                                Huallaga, comprometida con
                                el bienestar de los socios y la
                                comunidad, que cumple los
                                estándares del mercado
                                financiero con sentido social
                                y solidario.</P>
                        </div>
                    </div>
                    <div class="imagen">
                    <img src="./img/quienessomos/Mision_Vision.jpg"/>
                    </div>
                </div>
                <div class="division">
                    <div class="imagen">
                        <img src="./img/quienessomos/Valores.jpg"/>
                    </div>
                    <div class="texto">
                        <div class="solapa"><div>VALORES</div></div>
                        <div class="lista">
                            <ul>
                                <li>Ayuda Mutua</li>
                                <li>Responsabilidad</li>
                                <li>Democracia</li>
                                <li>Igualdad</li>
                                <li>Equidad</li>
                                <li>Solidaridad</li>
                                <li>Honestidad</li>
                                <li>Transparencia</li>
                                <li>Responsabilidad Social</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="division">
                    <div class="texto">
                        <div class="solapa"><div>PRINCIPIOS</div></div>
                        <div class="lista">
                            <ul>
                                <li>Membresía Abierta y Voluntaria</li>
                                <li>Control Democrático de los Miembros</li>
                                <li>Participación Económica de los Miembros</li>
                                <li>Autonomía e Independencia</li>
                                <li>Educación, Entrenamiento e Información</li>
                                <li>Cooperación entre Cooperativas</li>
                                <li>Compromiso con la Comunidad</li>
                            </ul>
                        </div>
                    </div>
                    <div class="imagen">
                    <img src="./img/quienessomos/Principios.jpg"/>
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