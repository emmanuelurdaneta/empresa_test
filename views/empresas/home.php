<div class="card">
    <div class="card-header">
    <a name="" id="" class="btn btn-success" href="?controller=Empresa&accion=create" role="button">Agregar</a>
    </div>
    <div class="card-body">
        

<table class="table table-bordered" id="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Acción</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($empresas as $empresa) : ?>
    
        <tr>
            <td><?php echo $empresa->idEmpresa;?></td>
            <td><?php echo $empresa->nombreEmpresa;?></td>
            <td>
                <div class="btn-group" role="group" aria-label="">
                    <a href="?controller=Empresa&accion=edit&id=<?php echo $empresa->idEmpresa; ?>" class="btn btn-info">Editar</a>
                    <a href="?controller=Empresa&accion=delete&id=<?php echo $empresa->idEmpresa; ?>" class="btn btn-danger">Borrar</a>
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







