<div class="card ">
    <div class="card-header">
        <h1>Actualizar Información Empleado</h1>
    </div>
    <div class="card-body">
        <form action="" method="post">

            <input type="hidden" name="id" id="id" value="<?php echo $employ->id; ?>">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre Empleado</label>
                <input type="text" class="form-control" name="nombre" id="nombre" aria-describedby="helpId" value="<?php echo $employ->nombre; ?>">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email Empleado:</label>
                <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelpId" value="<?php echo $employ->correo; ?>">
            </div>

            <input name="" id="" class="btn btn-success" type="submit" value="Actualizar Empleado"> <a name="" id="" class="btn btn-danger" href="./?controller=employees&accion=index"  role="button">Cerrar</a>
        </form>
        
    </div>

</div>