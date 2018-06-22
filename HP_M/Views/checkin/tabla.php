<?php

$datos=$datos[2];
while($row=mysqli_fetch_array($datos))
    echo "
            <li class='tab col s3'><a href={$row['id_tipoh']}>{$row['tipo_ha']}</a></li>
        ";

//while ()
$datos=$datos[2];
while ($row=mysqli_fetch_array($datos))
    echo "<div>hola desde {$row['tipo_ha']}</div>";

