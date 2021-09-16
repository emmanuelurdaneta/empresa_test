<div class="card">
    <div class="card-header">
        Agregar empleado
    </div>
    <div class="card-body">
        <form action="" method="post">

        <div class="mb-3">
          <label for="" class="form-label">ID:</label>
          <input readonly type="text"
            class="form-control" value="<?php echo $empleado->idEmpleado; ?>" name="id" id="id" aria-describedby="helpId" >
          
        </div>
          <div class="mb-3">
            <label for="nombre" class="form-label">Nombre:</label>
            <input required type="text"class="form-control" value="<?php echo $empleado->nombreEmpleado; ?>" name="nombre" id="nombre" aria-describedby="helpId" placeholder="Nombre del empleado">
          </div>

          <div class="mb-3">
          <label for="apellido" class="form-label">Apellido:</label>
            <input required type="text"class="form-control" value="<?php echo $empleado->apellidoEmpleado; ?>" name="apellido" id="apellido" aria-describedby="helpId" placeholder="Apellido del empleado">
          </div>

          <div class="mb-3">
            <label for="edad" class="form-label">Edad</label>
            <input required type="number"class="form-control" value="<?php echo $empleado->edadEmpleado; ?>" name="edad" id="edad" aria-describedby="helpId" placeholder="Edad del empleado">
          </div>

          <div class="mb-3">
            <label for="profesion" class="form-label">Profesión</label>
            <select  class="form-select" name="profesion" id="profesion">
              <?php foreach ($profesiones as $profesion) : ?>                
                <option  value="<?php echo $profesion->idProfesion?>"><?php echo $profesion->nombreProfesion?></option>

              <?php endforeach; ?>
          </div>

          <input lastName="" id="" class="btn btn-success" type="submit" value="Editar">
          <a href="?controller=Empleado&accion=home" class="btn btn-primary">Volver</a>
          
        </form>
    </div>
</div>