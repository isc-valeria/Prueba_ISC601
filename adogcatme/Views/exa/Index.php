<?php
?>
     <div class="container-fluid">
      <div class="row">
        <main role="main" class="col-md-12">
          <div class="container">
            <div class="table-responsive-lg">
              <table class="table" id="tabla_content">
                <thead>
                <tr>
                    <th>Nombre</th>
                    <th>email</th>
                    <th>edad</th>
                    <th>ciudad</th>
                </tr>
                
                </thead>
              </table>
              <div class="mb-3">
              <label for="titulo">buscar</label>
                <input type="text" class="form-control" id="titulo" name="titulo" placeholder="titulo" required>
                <div class="invalid-feedback" style="width: 100%;">
                  ok
                </div>
            </div>
              <table class="table" >
                <tbody id="body_table">
                <?php
                  require_once ("tabla.php");
                ?>
                </tbody>
            </table>
            <nav aria-label="...">
              <ul class="pagination pagination-lg">
                <li class="page-item disabled">
                  <a class="page-link" href="#" tabindex="-1">1</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
              </ul>
            </nav>
          </div>          
        </main>
      </div>
    </div>


    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Mapa</button>
      <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title text-secondary" id="exampleModalLabel">Ubicación</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            <div>                  
                <label id="salida"for=""></label>  
            </div>            
        </div>
      </div>
    </div>
  </div>


    <br>
    <br><br>
    <script type="text/javascript">
    var caja1bg,v=0;
    $(document).ready(function(){
      $("#body_table tr:visible").mouseover(function(){
        caja1bg=$(this).css('background');
        $(this).css('background','blue');

      });
      $("#body_table tr:visible").mouseout(function(){
        $(this).css('background',caja1bg);
      });    
      var campo1;//, campo2, campo3;
            var campo=[];
            var tabla=[];

      $("#body_table tr").on('click',function(){          
                $(this).children("td").each(function (index2) {
                    campo[index2]=$(this).text();
                })
          /*for (var i = 0; i < campo.length; i++) {
              if (true) {

              }

          }*/
            console.log(campo);
            $("#salida").text(campo);            
      })      

    });
  </script> 

    
