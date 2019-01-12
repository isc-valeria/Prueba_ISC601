<?php    
// print_r($hora= new DateTime("now", new DateTimeZone('America/Mexico_City')));

?>
    <div class="container justify-content-md-center">
      <div class="py-5 text-center">
        <h2>Agregar</h2>
        <p class="lead">Agrega nuevas historias de dentro de las areas registradas</p>
      </div>
      <div class="row justify-content-md-center">
        <div class="col-md-8 order-md-1">
           <form class="was-validated"  method="POST" action="<?php echo URL?>animales/agregar" novalidate id="save_img" enctype="multipart/form-data" autocomplete="off">

            <div class="mb-3">
              <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required>
                <div class="invalid-feedback" style="width: 100%;">
                  El nombre es requerido
                </div>
            </div>
            <div class="mb-3">
              <label for="edad">Edad</label>
              <div class="input-group">
                <input type="text" class="form-control" id="edad" name="edad"placeholder="Edad" required>
                <div class="invalid-feedback" style="width: 100%;">
                  la edad es requerida
                </div>
              </div>
            </div>
               <div class="mb-3">
                   <label for="color">Color</label>
                   <div class="input-group">
                       <input type="text" class="form-control" id="color" name="color"placeholder="Color" required>
                       <div class="invalid-feedback" style="width: 100%;">
                           el color es requerido
                       </div>
                   </div>
               </div>
            <div class="form-row text-dark">
              <div class="form-group col-md-6">
                <label for="id_raza">Raza</label>
                <select id="id_raza" class="custom-select" name="id_raza" required>
                  <option disabled selected>Selecionar...</option>
                  <?php
                      $result1=$datos[0];
                      while ($row=mysqli_fetch_array($result1))
                      {
                        echo "<option value='{$row[0]}'> {$row[1]}</option>";
                      }
                  ?>
                </select>
                <div class="invalid-feedback">Es nesesario selecionar una raza</div>
            </div>

              <div class="form-group col-md-6">
                <label for="id_sexo">Sexo</label>
                <select id="id_sexo" class="custom-select" name="id_sexo" required="">
                  <option disabled selected>Selecionar...</option>
                  <?php
                      $result1=$datos[1];
                      while ($row=mysqli_fetch_array($result1))
                      {
                        echo "<option value='{$row[0]}'>{$row[1]}</option>";
                      }
                  ?>
                </select>
              <div class="invalid-feedback">Es nesesario selecionar un sexo</div>
              </div>

                <div class="form-group col-md-6">
                    <label for="id_especie">Especie</label>
                    <select id="id_especie" class="custom-select" name="id_especie" required="">
                        <option disabled selected>Selecionar...</option>
                        <?php
                        $result1=$datos[2];
                        while ($row=mysqli_fetch_array($result1))
                        {
                            echo "<option value='{$row[0]}'>{$row[1]}</option>";
                        }
                        ?>
                    </select>
                    <div class="invalid-feedback">Es nesesario selecionar una especie</div>
                </div>

                <div class="mb-3">
                    <label for="imagen">Selecionar imagen</label>
                    <div class="form-group">
                        <input type="file" class="form-control" id="imagen" name="imagen"required>
                        <div class="invalid-feedback" style="width: 100%;">Es nesesario selecionar una imagen</div>
                    </div>
                </div>
            </div><div class="row justify-content-md-center">
                   <button  class="btn btn-primary " id="enviar"  type="submit">Enviar</button>
               </div>
           </form>
        </div>

      </div>
    </div>

<br>
<br>
<br>



