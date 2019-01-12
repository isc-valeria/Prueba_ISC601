<?php
?>
     <div class="container-fluid">
      <div class="row">
        <main role="main" class="col-md-12">          
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Agregados</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                <a class="nav-link btn btn-sm btn-outline-secondary" href="<?php echo URL ?>animales/agregar">Agregar</a>
                <button class="nav-link btn btn-sm btn-outline-secondary imp" target="_blank" href="#">Imprimir</button> 
                <button type="button"  id="out" class="btn btn-primary" data-toggle="modal" >grafica</button>
                
                
              </div>
            </div>
          </div>
          <div class="container">
            <div class="row" id="body_table">
                  <?php
                    require_once ("tabla.php");
                  ?>
            </div>
          </div>          
        </main>
      </div>
    </div>
    <br>
    <br>
    
    <br>
<!-- Modal modificar  -->
<div class="modal fade bd-example-modal-lg" id="mimodal" tabindex="-1" role="dialog" aria-labelledby="mimodal" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h5 class="modal-title" id="exampleModalLabel">Modificar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container justify-content-md-center col-md-12 order-md-1">          
              <form class="was-validated"  method="POST" action="<?php echo URL?>animales/actualizar" novalidate id="save_img" enctype="multipart/form-data" autocomplete="off">

                  <div class="mb-3">
                      <label for="nombre">Nombre</label>
                      <input type="hidden" name="id" id="id" value="">
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

                  <div class="form-row">
                      <div class="form-group col-md-6">
                          <label for="raza">Raza</label>
                          <select id="raza" class="custom-select" name="raza">
                              <option selected disabled>Selecionar...</option>
                              <?php
                              $result1=$datos[0];
                              while ($row=mysqli_fetch_array($result1))
                              {
                                  echo "<option value='{$row[0]}'> {$row[1]}</option>";
                              }
                              ?>
                          </select>
                      </div>

                      <div class="form-group col-md-6">
                          <label for="sexo">Sexo</label>
                          <select id="sexo" class="custom-select" name="sexo">
                              <option selected disabled>Selecionar...</option>
                              <?php
                              $result1=$datos[1];
                              while ($row=mysqli_fetch_array($result1))
                              {
                                  echo "<option value='{$row[0]}'>{$row[1]}</option>";
                              }
                              ?>
                          </select>
                      </div>

                      <div class="form-group col-md-6">
                          <label for="especie">Especie</label>
                          <select id="especie" class="custom-select" name="especie">
                              <option selected disabled>Selecionar...</option>
                              <?php
                              $result1=$datos[2];
                              while ($row=mysqli_fetch_array($result1))
                              {
                                  echo "<option value='{$row[0]}'>{$row[1]}</option>";
                              }
                              ?>
                          </select>
                      </div>
                  </div>

                  <div class="form-row">
                      <div class="form-group col-md-9">
                          <div class="mb-3">
                              <label for="imagen">Selecionar nueva imagen</label>
                              <div class="form-group">
                                  <input type="file" class="form-control" id="imagen" name="imagen">
                                  <div class="invalid-feedback" style="width: 100%;">Es nesesario selecionar una imagen</div>
                              </div>
                          </div>
                      </div>
                      <div class="form-group col-md-3">
                          <div class="salida mb-3" >
                          </div>
                      </div>
                  </div>
                <br>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button  class="btn btn-primary " id="enviar" type="submit">Enviar</button>
                  </div>
                </form>                        
        </div>
      </div>
    </div>
  </div>                
</div>                
<!-- Modal eliminar -->
<div class="modal fade" id="mimodaleliminar" tabindex="-1" role="dialog" aria-labelledby="mimodaleliminar" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Esta seguro de eliminar el registro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-footer">
        <button type="button"  class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button"  id="eliminar_ok" class="btn btn-primary" data-dismiss="modal">Aceptar</button>
      </div>
    </div>                    
  </div>  
</div>  
<!-- Modal grafica -->
<div class="modal fade bd-example-modal-lg" id="modal_grafica" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">grafica</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>
          
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
      $("#body_table").on("click","button#out",function(){            
        var id=$(this).data("id");
        $.get("<?php echo URL?>animales/modificar/"+id,function(res){
          var datos=JSON.parse(res);
          console.log(datos);
            console.log(res);

          $("#id").val(datos["id"]);
          $("#nombre").val(datos["nombre"]);
          $("#edad").val(datos["edad"]);
          $("#color").val(datos["color"]);
          $("#raza").val(datos["id_raza"]);
          $("#sexo").val(datos["id_sexo"]);
          $("#especie").val(datos["id_especie"]);
        });
        $.get("<?php echo URL?>animales/getimg/"+id,function(res){
          $(".salida").html(res);
            console.log(res);
        });
        $("#mimodal").modal("show");
      });
      $("#body_table").on("click","button#cut",function(){
        var id=$(this).data("id");
        var url='<?php echo URL?>animales/eliminar/'+id;
        $("#eliminar_ok").attr("url",url);
        $("#mimodaleliminar").modal("show");
      });
      $("#eliminar_ok").click(function(){
        $.get($(this).attr("url"),function(res){
          $("#body_table").empty().append(res);
        });
      });
      $('.imp').click(function(){
        window.open('<?php echo URL ?>animales/print_pdf')
      })
      $("#out").click(function(){
        $.get("<?php echo URL?>animales/graficar",function(res){
          $("#modal_grafica .modal-content p").empty().append(res);
          $("#modal_grafica").modal("show");
        });
      });
    })  
</script>



    
