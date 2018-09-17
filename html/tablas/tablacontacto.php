<div class="card mb-3">
  <div id="_AJAX_CONTACTOTAB_"></div>
  <div class="card-header">
    <i class="fa fa-table"></i> Lista de contacto
    <div class="" style="float:right;clear:left;">
      <div class="btn-group" role="group" aria-label="Basic example">
        <button onclick="Todos()" type="button" class="btn btn-secondary">Todos</button>
       
  <button onclick="Fijos()" type="button" class="btn btn-secondary">Fijos</button>
  <button onclick="Potencial()" type="button" class="btn btn-secondary">Potenciales</button>
  &nbsp;
  <div class="form-inline my-2 my-lg-0 mr-lg-2">
            <div class="input-group" onkeypress="return runBuscar(event)">
              <input class="form-control" id="buscar" type="text" placeholder="Search for...">
              <span class="input-group-append">
                <button class="btn btn-primary" onclick="goBuscar()" type="button">
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
          </div>
</div>
        <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#contacto" title="Agregar Contacto"><i class="fas fa-user-plus"></i></button>
        <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#mensaje" title="Enviar mensaje"><i class="fas fa-envelope"></i></button>
        <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#oferta" title="Oferta"><i class="fas fa-hand-holding-usd"></i></button>
    </div>
    
  </div>
  
  <div id="_AJAX_FILTROCONTACTO_">
    <?php require './core/bin/ajax/goFiltrocontacto.php'; ?>
  <div class="card-body">
    <div class="table-responsive">
      
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Cuenta</th>
            <th>Email</th>
            <th>Telefono</th>
            <th>Telefono_ex</th>
            <th>Celular</th>
            <th>Fuente</th>
            <th>Tipo</th>
            <th>Actualizar</th>
            <th>Eliminar</th>
          </tr>
        </thead>
       
       
        <tbody>
          <?php
          while($f = $db->recorrer($sql)){
            $data = $f[0]."||".$f[1]."||".$f[2]."||".$f[3]."||".$f[4]."||".$f[5]."||".$f[6]."||".$f[7]."||".$f[8]."||".$f[9];

          ?>
          <tr>

            
            <td><?php echo $f[1]; ?></td>
            <td><?php  echo $f[2]; ?></td>
            <td><?php  echo $f[13]; ?></td>
            <td><?php  echo $f[4]; ?></td>
            <td><?php  echo $f[5]; ?></td>
            <td><?php  echo $f[6]; ?></td>
            <td><?php  echo $f[7]; ?></td>
            <td><?php  echo $f[8]; ?></td>
            <td><?php echo $f[9]; ?></td>
            <td> <button type="button" id="modificar"  class="btn btn-info fas fa-edit" data-toggle="modal" data-target="#contactoMod" onclick="EnviarDatosContactoMod('<?php echo $data;?>')" title="Agregar Contacto"></button></td>
            <td> <button type="button" id="eliminar"  onclick="EliminarCont(<?php echo $f[0]; ?>)"  class="btn btn-warning fas fa-times"  title="Eliminar"></button></td>
          </tr>
          <?php
          }

          //$db->liberar($sql);
          $db->close(); 
          ?>
        </tbody>

      </table>
     
    </div>
  </div>
</div>

  <div class="card-footer small text-muted">Actualizado <?php echo  date('d-m-Y h:i:s'); ?></div>





<script src="./views/app/js/filtrocontacto.js"></script>


<?php 
if (isset($_GET['s'])) {

  ?>
  <script>
  alertify.success('Contacto eliminado');
</script>
  <?php 

 
  
}

include './html/index/modificarCont.php';
include './html/index/mensaje.php';
include './html/index/oferta.php'
 
 ?>
