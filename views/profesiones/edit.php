<div class="card">
    <div class="card-header">
        Agregar Profesión
    </div>
    <div class="card-body">
        <form action="" method="post">

        <div class="mb-3">
          <label for="" class="form-label">ID:</label>
          <input readonly type="text"
            class="form-control" value="<?php echo $profesion->idProfesion; ?>" name="id" id="id" aria-describedby="helpId" >
          
        </div>
          <div class="mb-3">
            <label for="nombre" class="form-label">Nombre:</label>
            <input required type="text"class="form-control" value="<?php echo $profesion->nombreProfesion; ?>" name="nombre" id="nombre" aria-describedby="helpId" placeholder="Nombre de la profesión">
          </div>

          <div class="mb-3">
          <label for="descripcion" class="form-label">Descripcion:</label>
            <input required type="text"class="form-control" value="<?php echo $profesion->descripcionProfesion; ?>" name="descripcion" id="descripcion" aria-describedby="helpId" placeholder="Descripción de la profesión">
          </div>

          <input lastName="" id="" class="btn btn-success" type="submit" value="Editar">
          <a href="?controller=Profesion&accion=home" class="btn btn-primary">Volver</a>
          
        </form>
    </div>
</div>