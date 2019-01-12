<?php
/**
 * Created by PhpStorm.
 * User: Luis
 * Date: 10/07/2018
 * Time: 01:32 PM
 */?>
<div align="center">
    <table id="tablita">
        <thead>
        <tr>
            <th>_id</th>
            <th>cityid</th>
            <th>validdateutc</th>
            <th>winddirectioncardinal</th>
            <th>probabilityofprecip</th>
            <th>relativehumidity</th>
            <th>name</th>
            <th>date-insert</th>
            <th>longitude</th>
            <th>state</th>
            <th>lastreporttime</th>
            <th>skydescriptionlong</th>
            <th>stateabbr</th>
            <th>tempc</th>
            <th>latitude</th>
            <th>iconcode</th>
            <th>windspeedkm</th>
        </tr>
        </thead>
        <tbody>
        <?php
        require_once ("tabla.php");
        ?>
        </tbody>
    </table>
</div>
