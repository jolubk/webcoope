<!DOCTYPE html>
<html lang="es">
<head>
    <?php include "clases.php" ?>
<style>
    li{
        margin:10px 0;
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

    <section class="page" id="page">
        <?php
            $urlimagen='./img/crediconsumo/Banner_Credi_Consumo.jpg'
        ?>
        <?php include "slider_page_c.php" ?>

        <?php include "menu.php" ?>

        <div class="enlace">
        <a href="https://api.whatsapp.com/send?phone=+51942781226&text=Solicito información de Credi Consumo">SOLICÍTALO AQUÍ</a>
        </div>
        <div class="contenedor">            
            <?php include "menucreditos.php" ?>
            <div class="descripcion">                
                <div><h1 class=" text-4xl">CREDI CONSUMO</h1><div style="width: 30%; border-bottom: var(--green) solid 2px;"></div></div>
                <p>Otorgado a socios formales y no formales independientes que acrediten un ingreso mensual sostenible proveniente de actividades.</p>
                <h3>Plazos</h3>
                <ul>
                    <li><strong>Capital de trabajo: </strong> Hasta 18 meses</li>
                    <li><strong>Activo Fijo:</strong> Hasta 60 meses</li>                   
                </ul>
                <h3>Montos</h3>
                <ul>
                    <li>Montos hasta <strong>S/300,000.00 </strong>, sujeto a evaluación crediticia y a la autorización de la asociación a la que pertenece.</li>
                </ul>
                <p>¿Cómo adquiero mi crédito?</p>
                <h3>Persona Natural</h3>
                <ul>
                    <li>Copia del DNI (titular y cónyuge).</li>
                    <li>Copia del recibo de luz o agua debidamente cancelado.</li>
                    <li>Documentos que sustenten los ingresos (últimos 6 meses).</li>
                    <li>Documentos que certifiquen la propiedad de los bienes muebles o inmuebles del titular.</li>
                </ul>
                <h3>Persona Jurídica</h3>
                <ul>
                    <li>Copia del RUC</li>
                    <li>Copia del DNI (Representantes legales)</li>
                    <li>Vigencias de poderes con una antigüedad máxima de 10 días</li>                        
                    <li>Copia del recibo de luz o agua debidamente cancelado.</li>
                    <li>Documentos que certifiquen la propiedad de los bienes muebles o inmuebles del titular o del aval.</li>
                    <li>*Otros requisitos según evaluación.</li>
                </ul>                                     
                <div class="enlace-ad"><a href="./img/crediconsumo/Tarifario_Credi_Consumo.pdf" target="_blank">TARIFARIO</a></div>
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