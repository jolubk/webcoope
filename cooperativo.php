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
            $urlimagen='./img/credicooperativo/Banner_Credi_Cooperativo.jpg'
        ?>
        <?php include "slider_page_c.php" ?>

        <?php include "menu.php" ?>

        <div class="enlace">
            <a href="https://api.whatsapp.com/send?phone=+51942781226&text=Solicito información de Credito Cooperativo">SOLICÍTALO AQUÍ</a>
        </div>
        <div class="contenedor">            
            <?php include "menucreditos.php" ?>
            <div class="descripcion">                
                <div><h1>CRÉDITO COOPERATIVO</h1><div style="width: 30%; border-bottom: var(--green) solid 2px;"></div></div>
                <p>Crédito dirigido a socios recurrentes y que no tengan créditos vigentes ni garantizados.</p>
                <h3>Plazos</h3>
                <ul>
                    <li>Hasta 60 meses</li>                   
                </ul>
                <h3>Montos</h3>
                <ul>
                    <li>Hasta el 90% de las aportaciones</li>
                </ul>
                <p>¿Cómo adquiero mi crédito?</p>
                <h3>Requisitos</h3>
                <ul>
                    <li>Copia del DNI (titular y cónyuge).</li>
                    <li>Copia del recibo de luz o agua debidamente cancelado.</li>   
                    <div class="enlace-ad"><a href="./img/credicooperativo/Tarifario_Credi_Cooperativo.pdf" target="_blank">TARIFARIO</a></div>
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