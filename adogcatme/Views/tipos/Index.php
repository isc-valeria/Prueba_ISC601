<?php
?>
<br>
<br>
     <div class="container-fluid">
      <div class="row">
        <main role="main" class="col-md-12">

          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h5>Animales disponibles para adopción</h5>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                  <button type="button" class="nav-link btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#agregar">Agregar +</button>
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
    <br><br>

<!-- Modal insertar -->
<div class="modal fade" id="agregar" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Agregar animal en adopción</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="needs-validation"  id="save_emp" method="POST" action="<?php echo URL ?>tipos/crear"  autocomplete="off" novalidate enctype="multipart/form-data">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" required>
                            <div class="invalid-feedback">
                                Ingresa el nombre
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="edad">Edad</label>
                            <input type="number" class="form-control" id="edad" name="edad" required>
                            <div class="invalid-feedback">
                                Ingresa una edad
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="color">Color</label>
                            <input type="text" class="form-control" id="color" name="color" required>
                            <div class="invalid-feedback">
                                Ingrese un color
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-12">
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
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="id_sexo">Sexo</label>
                                <select id="id_sexo" class="custom-select" name="id_sexo" required>
                                    <option disabled selected>Selecionar...</option>
                                    <?php
                                    $result3=$datos[1];
                                    while ($row=mysqli_fetch_array($result3))
                                    {
                                        echo "<option value='{$row[0]}'> {$row[1]}</option>";
                                    }
                                    ?>
                                </select>
                                <div class="invalid-feedback">Es nesesario selecionar un sexo</div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="id_especie">Especie</label>
                                <select id="id_especie" class="custom-select" name="id_especie" required>
                                    <option disabled selected>Selecionar...</option>
                                    <?php
                                    $result3=$datos[2];
                                    while ($row=mysqli_fetch_array($result3))
                                    {
                                        echo "<option value='{$row['id_especie']}'> {$row[1]}</option>";
                                    }
                                    ?>
                                </select>
                                <div class="invalid-feedback">Es nesesario selecionar una raza</div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="imagen">Imagen</label>
                            <input type="file" class="form-control" id="imagen" name="imagen" required>
                            <div class="invalid-feedback">
                                Ingresa una imagen
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button class="btn btn-success" type="submit" href="#!" id="save_emp_ok">Registrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal modificar  -->


<div class="modal" tabindex="-1" role="dialog" id="modal_eliminar">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">¿Desea eliminar el registro?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="eliminar_ok" data-dismiss="modal" >
                    Aceptar
                </button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            var forms = document.getElementsByClassName('needs-validation');
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);


                $("#body_table").on("click","a.btn_eliminar",function(){
                    var id=$(this).data("id");
                    var url='<?php echo URL?>tipos/eliminar/'+id;
                    $("#eliminar_ok").attr("url",url);
                    $("#modal_eliminar").modal('show');
                });
                $("#eliminar_ok").click(function(){
                    $.get($(this).attr("url"),function(res){
                        $("#body_table").empty().append(res);
                    });
                });

                $("#body_table").on("click","button#out",function(){
                    var id_animal=$(this).data("id_animal");
                    $.get("<?php echo URL?>tipos/modificar/"+id_animal,function(res){
                        var datos=JSON.parse(res);
                        $("#id_animal").val(datos["id_animal"]);
                        $("#nombre").val(datos["nombre"]);
                        $("#edad").val(datos["edad"]);
                        $("#color").val(datos["ubicacion"]);
                        $("#id_raza").val(datos["id_raza"]);
                        $("#id_sexo").val(datos["id_sexo"]);
                        $("#id_especie").val(datos["id_especie"]);
                    });
                    $.get("<?php echo URL?>tipos/getimg/"+id_animal,function(res){
                        $(".salida").html(res);
                    });
                    $("#mimodal").modal("show");
                });

                $("#graficar_habitaciones").click(function(){
                    $.get("<?php echo URL?>Empleado_bienvenido/graficar",function(res){
                        $("#modal_grafica .modal-content p").empty().append(res);
                        $("#modal_grafica").modal('show');
                    });
                });

            });
        }, false);
    })();

</script>