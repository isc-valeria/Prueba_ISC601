<?php
$row=mysqli_fetch_array($datos);
?>
 <form class="needs-validation"  method="POST" action="<?php echo URL?>User/actualizar" novalidate id="save_img" enctype="multipart/form-data" autocomplete="off">
    <div class="container justify-content-md-center">
      <div class="py-5 text-center">
        <h2>Actualizar</h2>
        <p class="lead">Modifica registros previamente agregados</p>
      </div>
      <div class="row justify-content-md-center">
        <div class="col-md-8 order-md-1">
          <form class="needs-validation" novalidate>
            <div class="mb-3">
              <label for="titulo">Titulo</label>
                <input type="hidden" name="id" value="<?php echo $row[0]?>">
                <input type="text" class="form-control" id="titulo" name="titulo" placeholder="titulo" value="<?php echo $row[1]?>" required>
                <div class="invalid-feedback" style="width: 100%;">
                  El titulo es requerido
                </div>
            </div>
            <div class="mb-3">
              <label for="fecha">Fecha</label>
              <div class="input-group">
                <input type="text" class="form-control" id="fecha" name="fecha"placeholder="fecha" value="<?php echo $row[2]?>" required>
                <div class="invalid-feedback" style="width: 100%;">
                  la fecha es requerida
                </div>
              </div>
            </div>
            <div class="mb-3">
              <label for="imagen">Selecionar imagen</label>
              <div class="custom-file">
                <input type="file" class="custom-file-input " id="imagen" name="imagen"  required value="data:image/jpg; base64, <?php echo base64_encode($row[3]); ?>">
                <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                <div class="invalid-feedback" style="width: 100%;">Es nesesario selecionar una imagen</div>
              </div>
            </div>          

            <div class="mb-5">
              <label for="descripcion">Descripcion</label>
              <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required><?php echo $row[4]?></textarea>
              <div class="invalid-feedback" style="width: 100%;">
                  descripcion requerida
                </div>
            </div>
            <br>
          </div>
        </div>
      </div>
      <div class="row justify-content-md-center">
        <button href="#!" class="btn btn-primary " id="enviar" data-id="" type="submit">Enviar</button>
      </div>    
      <div id="carga">
        
      </div>
      <table> 
        <thead>
          <tbody id="body" name="body">
          </tbody>    
        </thead>
      </table>
          <br>  
          <br>  
          <br>  
          <br>  
          <br>  
          <br>  
  </form>  