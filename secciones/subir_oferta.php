<?php include('../templates/cabecera.php'); ?>
<?php include('../secciones/ofertas.php'); ?>
   

<div class="mb-3" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
       
<form action="" method="post">

        <div class="mb-3">
        
        </div>
          <label for="" class="form-label">Coloque un titulo para su publicación.</label>
          <input type="text"
           class="form-control" 
           name="titulo"
           id="titulo" 
           aria-describedby="helpId"
           placeholder="titulo ">
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Distrito de referencia.</label>
          <input type="text"
           class="form-control" 
           name="distrito"
           id="distrito" 
           aria-describedby="helpId"
           placeholder="distrito ">
        </div>
        
        <br>
        <div class="mb-3">
          <label for="mensaje" class="form-label">Haga una descripcion breve del puesto.</label>
          <textarea type="text"
          class="form-control" 
          name="mensaje"
          id="mensaje" 
          aria-describedby="helpId"
          rows="3"></textarea>
        </div>

      


        



   <button type="submit" name="accion"  value="agregar" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
     Publicar oferta
    </button>
    </form>

<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">¡Felicidades!</h1>
        <button type="submit" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Su oferta fue publicada con exito, ya es visible para los demas usuarios.
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal">Aceptar</button>
        
      </div>
    </div>
    
  </div>

</div>


</div>
  
<div>
  <br>
  <br>
  <H1>Mis publicaciones</H1>
     <table class="table">
        <thead>
          <tr>
<th>ID</th>
<th>Titulo</th>
<th>Distrito</th>
<th>Mensaje</th>
</tr>
</thead>
<tbody>
  <?php foreach($listaOfertas as $oferta){?>
<tr>
  <td><?php echo $oferta['id'];?></td>
  <td><?php echo $oferta['titulo'];?></td>
  <td><?php echo $oferta['distrito'];?></td>
  <td><?php echo $oferta['mensaje'];?></td>
  <td> 
    


</td>
  </tr>
  <?php } ?>
  </tbody>
  </table>
</div> 
    

<?php include('../templates/pie.php'); ?>

