
<?php
?>

<div id="modal_registro" class="modal">
    <div class="modal-content">
        <div class="card-panel">
            <form action="" id="save_clientes" enctype="multipart/form-data" autocomplete="off">
                <h4 align="center">Productos</h4>
                <div class="divider"></div>
                <code class=" language-markup"><!--********************************--></code>
                <div class="row">


                    <div class="row">
                        <div class="input-field col s1">
                        </div>
                        <div class="input-field col s5">
                            <input id="nombre_pro" type="text" class="validate" name="nombre_pro">
                            <label for="nombre_pro"  data-error="incorrecto" data-success="Correcto">Nombre</label>
                        </div>

                        <div class="input-field col s5">
                            <input id="id_categoriapro" type="text" class="validate" name="id_categoriapro">
                            <label for="id_categoriapro" data-error="incorrecto" data-success="Correcto" >Categoria</label>
                        </div>

                    </div>


                    <div class="row">

                        <div class="input-field col s1">
                        </div>

                        <div class="input-field col s5">
                            <input id="id_tipopro" type="text" class="validate" name="id_tipopro">
                            <label for="id_tipopro" data-error="incorrecto" data-success="Correcto">Tipo</label>

                        </div>


                        <div class="input-field col s5">
                            <input id="existencias" type="text" class="validate" name="existencias">
                            <label for="existencias" data-error="incorrecto" data-success="Correcto" >Existencias</label>
                        </div>

                        <div class="input-field col s1">
                        </div>
                    </div>


                    <div class="row">


                        <div class="input-field col s1">
                        </div>

                        <div class="input-field col s5">
                            <input id="stock_min" type="text" class="validate" name="stock_min">
                            <label for="stock_min" data-error="incorrecto" data-success="Correcto">Stock minimo</label>
                        </div>

                        <div class="input-field col s5">
                            <input id="stock_max" type="text" class="validate" name="stock_max">
                            <label for="stock_max" data-error="incorrecto" data-success="Correcto" >Stock maximo</label>
                        </div>

                        <div class="input-field col s1">
                        </div>
                    </div>




                    <div class="modal-fixed-footer">
                        <div class="input-field col s12">
                            <a href="#!" id="save_productos_ok" class="btn modal-close">Registrar</a>
                        </div>
                    </div>


                </div>
            </form>
        </div>
    </div>
</div>
<div class="card-panel">
    <h4 align="center">Registro de Productos <span class="right"><a href="#modal_registro" class="btn green white-text modal-trigger" id="add_producto">
                <i class="material-icons">add</i>
            </a></span></h4>
    <div class="divider"></div>

    <div class="row">
        <div class="input-field col s4 offset-s8">
            <i class="mdi-action-verified-user prefix icon-search"></i>
            <input id="buscar" placeholder="Buscar" type="text">
        </div>
    </div>


    <!-- Modal eliminar -->

    <!--*********************final modal eliminar***********-->
    <table class="responsive-table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Categoria</th>
            <th>Tipo </th>
            <th>Existencias</th>
            <th>Stock Max</th>
            <th>Stock Min</th>
            <th></th>
            <th></th>

        </tr>
        </thead>

        <tbody id="body_table">
        <?php
        require_once ("tabla.php");
        ?>
        </tbody>
    </table>
</div>




<div id="modal_eliminar" class="modal">
    <div class="modal-content">
        <h5>¿Desea Eliminar el Registro?</h5>
        <hr />
    </div>
    <div class="modal-footer">
        <a href="#!" id="eliminar_ok" class="modal-close green white-text waves-effect waves-green btn-flat">Aceptar</a>
        <a href="#!" class="modal-close red white-text waves-effect waves-green btn-flat">Cancelar</a>
    </div>
</div>
