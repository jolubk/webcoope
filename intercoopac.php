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
                <div class="intercoopac">
                    <div class="detalle">
                        <div class="titulo"><h1>OPERACIONES INTERCOOPERATIVAS</h1></div>
                        <p>A través de este servicio nuestros socios podrán realizar sus operaciones de depósitos, retiros, pago de préstamos y otros en cualquiera de las agencias de la cooperativas afiliadas.</p>
                        <div class="coopacs">
                            <a id="coopacscb" class="active">Cooperativa de Ahorro y Crédito<br>Santo Cristo de Bagazan</a>
                            <a id="coopacsmp">Cooperativa de Ahorro y Crédito<br>San Martín de Porres</a>
                            <a id="coopacsf">Cooperativa de Ahorro y Crédito<br>San Francisco</a>
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