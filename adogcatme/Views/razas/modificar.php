<?php
$row=mysqli_fetch_array($datos);
?>
<h1 class="center">Modificar</h1>
<div class="row">
    <div class="col l6 m6 s6 offset-l3">
        <form action="<?php echo URL?>razas/update" method="post" enctype="multipart/form-data">
            <label for="">Sexo</label>
            <input type="hidden" name="id_raza" value="<?php echo $row[0]?>">
            <input type="text" name="raza_des" value="<?php echo $row[1]?>">
            <button type="submit" class="btn green">Aceptar</button>
            <button type="reset" class="btn red"> Cancelar</button>
        </form>
    </div>
</div>
