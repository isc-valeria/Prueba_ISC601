<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 14/06/2018
 * Time: 08:55 AM
 */

$result1=$datos["servicio"];
while($row=mysqli_fetch_array($result1))
    echo "<option> {$row[1]} </option>";
    echo "<option> {$row['descripcion_servicio']} </option>";




//$result1=$datos["servicio"];
//while ($row=mysqli_fetch_array($result1))
//echo "<option value='{$row[0]}'>{$row[1]}</option>";
?>
