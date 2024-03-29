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
        <?php
            $urlimagen='./img/crediconvenio/Banner_Credi_Convenio.jpg'
        ?>
        <?php include "slider_page_c.php" ?>

        <?php include "menu.php" ?>

        <div class="enlace">
        <a href="https://api.whatsapp.com/send?phone=+51942781226&text=Solicito informacion de Credito Convenio">SOLICÍTALO AQUÍ</a>
        </div>
        <div class="contenedor">            
            <?php include "menucreditos.php" ?>
            <div class="descripcion">                
                <div><h1>CRÉDITO CONVENIO</h1><div style="width: 30%; border-bottom: var(--green) solid 2px;"></div></div>
                <p>Otorgado a trabajadores dependientes de Instituciones Públicas o Privadas con quienes se suscriba convenio de descuento por planilla, que requieren crédito para cubrir necesidades inmediatas de libre inversión o gasto.</p>
                <h3>Plazos</h3>
                <ul>
                    <li>Capital de trabajo: Hasta 72 meses</li>                   
                </ul>
                <h3>Montos</h3>
                <ul>
                    <li>Hasta S/ 120,000.00</li>
                </ul>
                <p>¿Cómo adquiero mi crédito?</p>
                <h3>Requisitos</h3>
                <ul>
                    <li>Copia del DNI (titular y cónyuge).</li>                  
                    <li>Copia del recibo de luz o agua debidamente cancelado.</li> 
                    <li>Original y copia de las 03 últimas boletas de remuneraciones del titular.</li> 
                    <li>*Otros requisitos según evaluación.</li>             
                    <div class="enlace-ad"><a href="./img/crediconvenio/Tarifario_Credi_Convenio.pdf" target="_blank">TARIFARIO</a></div>
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