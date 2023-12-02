<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Express Job</title>
   
    
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<link rel="stylesheet" href="style.css">
<style>
  body {
      background-color:  #94deffc2; /* Puedes cambiar el valor hexadecimal a tu color deseado */
      margin: 0; /* Elimina los márgenes predeterminados del body */
      padding: 0; /* Elimina el relleno predeterminado del body */
  }
</style>
</head>
  <body>
    
  <nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color: #e3f2fd;" >

      <div class="container-fluid">
           <a class="navbar-brand" href="#">
           <img src="src/img/logoC.png" class="img-fluid" alt="Sample image" style="width: 200px;">

           </a>
        
           <form class="d-flex" action="secciones/index.php" method="post">

              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
               </button>
        
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            
               </ul>
         
                <input type="text" class="form-control me-2"  name="usuario" id="usuario" placeholder="usuario" aria-label="usuario">

               <input type="password" class="form-control me-2"  placeholder="password" aria-label="contraseña">        
                 </div>
               <nav class="navbar bg-body-tertiary">          
                 <button type="submit" class="btn btn-outline-success me-2" >Ingresar</button>
                 </form>
                 <form class="d-flex" action="secciones/registrar.php" method="post">
                 <button type="submit" class="btn btn-sm btn-outline-secondary" >Registrarse</button>
                 </form>
               </nav>          
               </div>      
               </div>
            
            
    </nav>  

      
    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="src/img/imagen1.jpg" class="d-block w-100" alt="¿Estas buscando trabajo y no sabes donde?">
          </div>
          <div class="carousel-item">
            <img src="src/img/imagen2.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="src/img/imagen3.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
  </body>
</html>