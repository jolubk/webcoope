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
                <div><h1>CRÉDITO EMPRESARIAL</h1><div style="width: 30%; border-bottom: var(--green) solid 2px;"></div></div>
                <p>Financiamos tu capital de trabajo y activo fijo (bienes muebles e inmuebles),
                    destinados a personas naturales o jurídicas que desarrollen actividades de comercio,
                    producción y prestación de servicios.</p>
                <h3>Plazos</h3>
                <ul>
                    <li>Capital de trabajo: hasta 24 meses</li>
                    <li>Activo Fijo: hasta 60 meses</li>
                </ul>
                <h3>Montos</h3>
                <ul>
                    <li>Montos mayores a S/300,000.00</li>
                </ul>
                <p>¿Cómo adquiero mi crédito?</p>
                <h3>Persona Natural</h3>
                <ul>
                    <li>Copia del DNI (titular y cónyuge).</li>
                </ul>
                <h3>Persona Jurídica</h3>
                <ul>
                    <li>Copia del RUC</li>
                    <li>Copia del DNI (Representantes legales)</li>
                    <li>Vigencias de poderes con una antigüedad máxima de 10 días</li>                        
                    <li>Escritura de constitución de la Empresa</li>
                    <li>Balance general, Estado de resultados del último mes y año y Flujo de caja proyectado</li>
                </ul>
                <h3>Ambos</h3>
                <ul>
                    <li>Copia del recibo de luz o agua, debidamente cancelado</li>
                    <li>Estados financieros firmados por contador público colegiado.</li>
                    <li>*Otros requisitos según evaluación</li>
                </ul>
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