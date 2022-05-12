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

    <section class="page" id="page">
        <?php include "slider_page.php" ?>

        <?php include "menu.php" ?>

        <div class="enlace">
            <a href="">SOLICÍTALO AQUÍ</a>
        </div>
        <div class="contenedor">            
            <?php include "menucreditos.php" ?>
            <div class="descripcion">                
                <div><h1>CREDIAHORRO</h1><div style="width: 30%; border-bottom: var(--green) solid 2px;"></div></div>
                <p>Es un crédito automático, respaldado por ahorros en la modalidad de plazo fijo.</p>
                <h3>Plazos</h3>
                <ul>
                    <li>Hasta 60 meses</li>                   
                </ul>
                <h3>Montos</h3>
                <ul>
                    <li>Hasta el 90% del (los) depósito (s) a plazo fijo, si el interés del depósito a plazo fijo se retirará al vencimiento y hasta el 80% si el interés del DPF se retiró por adelantado.</li>
                </ul>
                <p>¿Cómo adquiero mi crédito?</p>
                <h3>Requisitos</h3>
                <ul>
                    <li>Copia del DNI del titular (y de los mancomunados de ser el caso).</li> 
                    <li>Certificado de depósito/contrato de depósito a plazo fijo original.</li> 
                    <li>Copia del recibo de luz o agua debidamente cancelado.</li>             
                <div class="enlace-ad"><a>TASAS</a><a>SIMULADOR DE CRÉDITOS</a></div>
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