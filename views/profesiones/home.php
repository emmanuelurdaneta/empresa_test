<div class="card">
    <div class="card-header">
    <a name="" id="" class="btn btn-success" href="?controller=Profesion&accion=create" role="button">Agregar</a>
    </div>
    <div class="card-body">
        

<table class="table table-bordered" id="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripcion</th>            
            <th>Acción</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($profesiones as $profesion) : ?>
    
        <tr>
            <td><?php echo $profesion->idProfesion;?></td>
            <td><?php echo $profesion->nombreProfesion;?></td>
            <td><?php echo $profesion->descripcionProfesion;?></td>
            <td>
                <div class="btn-group" role="group" aria-label="">
                    <a href="?controller=Profesion&accion=edit&id=<?php echo $profesion->idProfesion; ?>" class="btn btn-info">Editar</a>
                    <a href="?controller=Profesion&accion=delete&id=<?php echo $profesion->idProfesion; ?>" class="btn btn-danger">Borrar</a>
                </div>
            
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

    </div>
    
</div>


<script>

    let myTable =document.querySelector("#myTable");

    let dataTable = new DataTable(myTable);

</script>







