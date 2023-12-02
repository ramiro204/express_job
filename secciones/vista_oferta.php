<?php include('../templates/cabecera.php'); ?>
<?php include('../secciones/ofertas.php'); ?>


<div class="tab-content" id="myTabContent">
      <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
      <form class="d-flex" action="" method="post">
        <div class="input-group">
       
          <input type="text" class="form-control" id="titulo" name="titulo" placeholder="¿Que tipo de trabajo esta buscando?">
          <button type="submit" name="accion" value="Selecionar" class="btn btn-outline-secondary">Buscar</button>

        </div>
        </form>

      </div>
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