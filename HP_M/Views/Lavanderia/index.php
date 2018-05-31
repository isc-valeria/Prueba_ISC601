<div class="modal-content">
      <div class="card-panel">
           <form action="" id="save_Lavanderia" enctype="multipart/form-data" autocomplete="off">
               <h4 align="center">Registrar prendas</h4>
               <div class="divider"></div>
               <code class=" language-markup"><!--********************************--></code>
               <div class="row">
                   <div class="row">
                        <div class="input-field col l3">
                            <select id="numerotipohabitacion" type="text" class="validate">
                                <option value="" disabled selected>Selecciona la habitación</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                            </select>
                            <label for="numerotipohabitacion" data-error="incorrecto" data-success="Correcto" >Numero de Habitación</label>
                        </div>

                       <div class="input-field col s1">
                           <a class="btn-floating disabled waves-effect waves-light btn modal-trigger" href="#modal_habitacion" ><i class="icon-plus #00838f cyan darken-3"></i></a>
                       </div>

                        <div class="input-field col s1">
                        </div>
                        <div class="input-field col s1">
                        </div>
                        <div class="input-field col s1">
                        </div>
                        <div class="input-field col s1">
                        </div>
                        <div class="input-field col s1">
                        </div>

                        <div class="row">
                            <div class="input-field col s3 ">
                               <i class="mdi-action-verified-user prefix icon-search"></i>
                               <input id="buscar" placeholder="Buscar habitación" type="text">
                            </div>
                        </div>

                       <div class="input-field col l3 offset-l3 ">
                           <i class="mdi-action-verified-user prefix icon-calendar blue-text"></i>
                           <label>Fecha de recepción</label>
                           <input id="fecha_recepcion" type="text" class="datepicker">
                       </div>

                       <div class="input-field col l3">
                           <i class="mdi-action-verified-user prefix icon-calendar blue-text"></i>
                           <label>Fecha de Entrega</label>
                           <input id="fecha_entrega" type="text" class="datepicker">
                       </div>
                   </div>
               </div>
           </form>
      </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $('select').material_select();
        $('.datepicker').datepicker();
    });
</script>

