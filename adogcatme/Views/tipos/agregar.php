
<?php
?>
 <form class="needs-validation"  method="POST" action="<?php echo URL?>tipos/agregar" novalidate id="save_img" enctype="multipart/form-data" autocomplete="off">
    <div class="container justify-content-md-center">
      <div class="py-5 text-center">
        <h2>Agregar</h2>
        <p class="lead">Agrega tipos de historias para posteriormente clasificar cada historia agregada</p>
      </div>
      <div class="row justify-content-md-center">
        <div class="col-md-8 order-md-1">
          <form class="needs-validation" novalidate>            
            <div class="mb-3">
              <label for="imagen">Selecionar imagen</label>
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="imagen" name="imagen"required>

                <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                <div class="invalid-feedback" style="width: 100%;">Es nesesario selecionar una imagen</div>
              </div>
            </div>
              <br>


                      <input type="hidden" name="id" id="id">
                      <div class="form-group">

                          <input type="text" class="form-control"
                                 id="nombre" name="nombre"></input>
                          <label for="nombre">Nombre</label>
                      </div>
                      <div class="form-group">
                          <input type="text" class="form-control"
                                 id="edad" name="edad"></input>
                          <label for="edad">Edad</label>
                      </div>
                      <div class="form-group">
                          <input type="text" class="form-control"
                                 id="color" name="color"></input>
                          <label for="color">Color</label>
                      </div>

                      <div class="form-group">
                          <select id="id_raza" type="text" name="id_raza">
                              <option disabled selected>Selecciona Raza</option>
                              <?php
                              $result3=$datos[0];
                              while ($row=mysqli_fetch_array($result3))
                                  echo "<option value='{$row[0]}'>{$row[1]}</option>";
                              ?>
                          </select>
                      </div>
                      <div class="form-group">
                          <select id="id_sexo" type="text" name="id_sexo">
                              <option disabled selected>Selecciona sexo</option>
                              <?php
                              $result3=$datos[1];
                              while ($row=mysqli_fetch_array($result3))
                                  echo "<option value='{$row[0]}'>{$row[1]}</option>";
                              ?>
                          </select>
                      </div>

                      <div class="form-group">
                          <select id="id_especie" type="text" name="id_especie">
                              <option  disabled selected>Selecciona especie</option>
                              <?php
                              $result3=$datos[2];
                              while ($row=mysqli_fetch_array($result3))
                                  echo "<option value='{$row['id_especie']}'>{$row[1]}</option>";
                              echo $row[0];
                              ?>
                          </select>
                      </div>


            <br>
          </div>

      </div>
      <div class="row justify-content-md-center">
        <button href="#!" class="btn btn-primary " id="enviar" data-id="" type="submit">Guardar</button>
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
