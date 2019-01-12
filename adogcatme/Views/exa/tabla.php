<?php
$dato=$datos[0];

while($row=mysqli_fetch_array($dato))
    echo "<tr data-toggle='modal' data-target='.bd-example-modal-lg'>
    <td >{$row[1]}</td>
    <td>{$row[2]}</td>
    <td>{$row[3]}</td>
    <td>{$row[4]}</td>   
    "
?>
