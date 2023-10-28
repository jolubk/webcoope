<!DOCTYPE html>
<html lang="es">
<head>
    <?php include "clases.php" ?>
    <style>
        .banner_base{
            width:100%;
        }
        .banner_logo{
            position:absolute;
            top:80px;
            animation: crecimiento 1s ease-in-out;
        }
        @keyframes crecimiento {
            0% {
                transform: scale(0.15);
            }
            100% {
                transform: scale(1);
            }
        }
        .ahorro{
            border:2px solid red;
            height:550px !important;
        }
        .info{
            display:flex;
        }
        .hombre{
            height:420px;
        }
        .iconoPdf{
            height:60px;
        }
        .info h3{
            margin-top: 20px;
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

    <section class="page" id="nosotros">
        <?php include "slider_page_hazte_socio.php" ?>

        <?php include "menu.php" ?>

        <div class="bloque_verde" >
            <div>
                
            </div>
        </div>
        <div class="contenedor tree_column">            
              <div>
                <h1>Requisitos Para Ser Socio Persona Natural</h1>
                    <ul>
                        <li>Copia de DNI del titular</li>
                        <li>Copia de recibo de servicios básicos</li>
                        <li>Aporte mensual S/. 13.00</li>
                    </ul>
                <h1>Requisitos Para Menores de Edad</h1>
                <ul>
                    <li>Copia simple de DNI del menor.</li>
                    <li>Copia simple de DNI del padre y/o apoderado.</li>
                </ul>
              </div>      
            <div>
                <img class="animate__animated animate__zoomInDown" src="./img/haztesocio/hazte-socio-2.png"/>
            </div>
            <div>
                <h1>Requisitos Para Ser Socio Persona Jurídica</h1>
                    <ul>
                        <li>Ficha de constitución de persona jurídica.</li>
                        <li>Copia de ficha RUC en condición de activo y habido.</li>
                        <li>Copia de recibo de luz o agua.</li>
                        <li>DNI de representante legal.</li>
                        <li>Vigencia de poder actualizada de representante legal.</li>
                        <li>Aporte mensual S/13.00</li>
                    </ul>
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