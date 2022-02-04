



<?php
     include 'inc/funciones/funciones.php';
     include 'inc/layout/header.php';
?>



<div class="contenedor-barra">
  <h1> Agenda de contactos</h1>

</div>



<div class="bg-amarillo contenedor sombra">

<form id="contacto" action="#" >
    <legend>Añada un campo <span>Todos los campitos son obligatrios</span></legend>

  <?php include "inc/layout/formulario.php" ;?>

</form>
</div>


<div class="bg-blanco contenedor sombra contactos">
<div class="contenedor-contactos">
    <h2>Contactos</h2>

    <input type="text" id="buscar" class="buscador sombra" placeholder="Buscar Contactos...">

    <p class="total-contactos"><span></span> Contactos</p>

    <div class="contenedor-tabla">
         <table id="listado-contactos" class="listado-contactos">
              <thead>
                   <tr>
                        <th>Nombre</th>
                        <th>Empresa</th>
                        <th>Teléfono</th>
                        <th>Acciones</th>
                   </tr>
              </thead>

              <tbody>



                    <tr>
                    <a  class="btn-editar btn"  href="editar.php">
                        <i  class="fas fa-pen-square">Editar </i>
                    </a>

                    <button data-id="1" type="button" class="btn-borrar btn" href="editar.php" >
                        eliminar<i class="fas fa-trash-alt"></i>
                    </button>
                  </tr>

              </tbody>
         </table>
    </div>
</div>
</div>


<?php include 'inc/layout/footer.php'; ?>
