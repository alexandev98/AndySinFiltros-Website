<div class="content-wrapper">

    <section class="content-header">

        <h1>
            Gestor comercio
        </h1>

        <ol class="breadcrumb">
            <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
            <li class="active">Gestor comercio</li>
        </ol>

    </section>

    <section class="content">

        <div class="row">

            <div class="col-md-6 col-xs-12">

            <?php

                //ADMINISTRACION DE LOGOTIPO E ICONO

                include "comercio/logotipo.php";

                //ADMINISTRACION DE COLORES

                include "comercio/colores.php";

                //ADMINISTRACION DE REDES SOCIALES

                include "comercio/redSocial.php";

            ?>



            </div>

            <div class="col-md-6">

            <?php

            include "comercio/codigos.php";

            include "comercio/informacion.php"

            ?>
                
            </div>

        </div>

    </section>

</div>