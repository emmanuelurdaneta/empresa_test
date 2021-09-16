<div class="card">
    <div class="card-header">
        Agregar empresa
    </div>
    <div class="card-body">
        <form action="" method="post">

        <div class="mb-3">
          <label for="" class="form-label">ID:</label>
          <input readonly type="text"
            class="form-control" value="<?php echo $empresa->idEmpresa; ?>" name="id" id="id" aria-describedby="helpId" >
          
        </div>
          <div class="mb-3">
            <label for="nombre" class="form-label">Nombre:</label>
            <input required type="text"class="form-control" value="<?php echo $empresa->nombreEmpresa; ?>" name="nombre" id="nombre" aria-describedby="helpId" placeholder="Nombre del empresa">
          </div>

          <input lastName="" id="" class="btn btn-success" type="submit" value="Editar">
          <a href="?controller=Empresa&accion=home" class="btn btn-primary">Volver</a>
          
        </form>
    </div>
</div>