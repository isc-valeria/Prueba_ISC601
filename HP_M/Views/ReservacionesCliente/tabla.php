<?php
$datos=$datos[0];
$url=URL;
while($row=mysqli_fetch_array($datos))
    echo "
    <div>
        <div class=\"col \">
            <div class=\"card horizontal\">
                <div class=\"card-image\">
                    <img src=\"{$url}Public/imagenes/simple.jpg\" height=270\" width=\"150\">
                </div>
                <div class=\"card-stacked\">
                    <div class=\"card-content\">
                        <h3>Habitación {$row['tipo_ha']}</h3>
                        <p>Nuestras Habitaciones ofrecen hermosas vistas de la ciudad.
                        <br>
                        Aloja:{$row['maximo_personas']}
                        <br>
                        Costo:{$row['precio']}
                        </p>
                        <a class=\"tooltipped black-text\" data-position=\"bottom\" data-tooltip=\"Aire Acondicionado\"><i class=\"material-icons\">ac_unit</i></a>
                        <a class=\"tooltipped black-text\" data-position=\"bottom\" data-tooltip=\"Wi-Fi\"><i class=\"material-icons\"> network_wifi</i></a>
                        <a class=\"tooltipped black-text\" data-position=\"bottom\" data-tooltip=\"TV\"><i class=\"material-icons\"> tv</i></a>
                    </div>
                </div>
            </div>
        </div>
     </div>
";
?>