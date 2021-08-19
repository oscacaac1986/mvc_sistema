<a name="" id="" class="btn btn-success" href="?controller=employees&accion=save" role="button">Agregar Empleado</a>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>NOMBRE</th>
            <th>CORREO</th>
            <th>ACCIONES</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($employs as $employ) { ?>
            <tr>
                <td><?php echo $employ->id; ?></td>
                <td><?php echo $employ->nombre; ?></td>
                <td><?php echo $employ->correo; ?></td>
                <td>
                    <div class="btn-group" role="group" aria-label="">
                        <a href="?controller=employees&accion=update&id=<?php echo $employ->id;?>" class="btn btn-primary">Editar</a>
                        <a href="?controller=employees&accion=delete&id=<?php echo $employ->id;?>" class="btn btn-danger">Eliminar</a>
                    </div>
                </td>
            </tr>
        <?php }; ?>

    </tbody>
</table>