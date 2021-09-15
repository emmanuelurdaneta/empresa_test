<div class="card">
    <div class="card-header">
    <a name="" id="" class="btn btn-success" href="?controller=Empleado&accion=create" role="button">Agregar</a>
    </div>
    <div class="card-body">
        

<table class="table table-bordered" id="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>ACCION</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($empleados as $empleado) { ?>
    
        <tr>
            <td><?php echo $empleado->idEmpleado;?></td>
            <td><?php echo $empleado->nombreEmpleado;?></td>
            <td><?php echo $empleado->apellidoEmpleado;?></td>
            <td>
                <div class="btn-group" role="group" aria-label="">
                    <a href="?controller=Empleado&accion=edit&id=<?php echo $empleado->idEmpleado; ?>" class="btn btn-info">Editar</a>
                    <a href="?controller=Empleado&accion=delete&id=<?php echo $empleado->idEmpleado; ?>" class="btn btn-danger">Borrar</a>
                </div>
            
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>

    </div>
    
</div>


<script>

    let myTable =document.querySelector("#myTable");

    let dataTable = new DataTable(myTable);

</script>







