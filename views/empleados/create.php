<div class="card">
    <div class="card-header">
        Agregar empleado
    </div>
    <div class="card-body">
        <form action="" method="post">

          <div class="mb-3">
            <label for="nombreEmpleado" class="form-label">Nombre:</label>
            <input required type="text"class="form-control" name="nombreEmpleado" id="nombreEmpleado" aria-describedby="helpId" placeholder="Nombre del empleado">
          </div>

          <div class="mb-3">
          <label for="apellidoEmpleado" class="form-label">Apellido:</label>
            <input required type="text"class="form-control" name="apellidoEmpleado" id="apellidoEmpleado" aria-describedby="helpId" placeholder="Apellido del empleado">
          </div>

          <input lastName="" id="" class="btn btn-success" type="submit" value="Agregar">
          <a href="?controller=Empleado&accion=home" class="btn btn-primary">Volver</a>
          
        </form>
    </div>
</div>