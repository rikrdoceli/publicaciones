<?php encabezado() ?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <div class="row mt-2">
                <div class="col-lg-6 m-auto">
                    <form method="post" action="<?php echo base_url(); ?>Usuarios/actualizar" autocomplete="off" enctype="multipart/form-data">
                        <div class="card-header bg-dark">
                            <h6 class="title text-white text-center">Modificar usuario</46>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="nombre">Nombre y Apellido</label>
                                <input id="id" type="hidden" name="id" value="<?php echo $data['id']; ?>">
                                <input id="nombre" class="form-control" type="text" name="nombre" placeholder="Nombre" value="<?php echo $data['nombre']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="cedula">C.I.</label>
                                <input id="id" type="hidden" name="id" value="<?php echo $data['id']; ?>">
                                <input id="cedula" class="form-control" type="text" name="cedula" placeholder="Cédula" value="<?php echo $data['cedula']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="cargo">Cargo</label>
                                <input id="id" type="hidden" name="id" value="<?php echo $data['id']; ?>">
                                <input id="cargo" class="form-control" type="text" name="cargo" placeholder="Cargo" value="<?php echo $data['cargo']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="clave">Contraseña</label>
                                <input id="id" type="hidden" name="id" value="<?php echo $data['id']; ?>">
                                <input id="clave" class="form-control" type="text" name="clave" placeholder="Clave" value="<?php echo $data['clave']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="imagen">Foto</label>
                                <input id="imagen" class="form-control" type="file" name="imagen">
                                <input  id="fototemp" type="hidden" name="foto" value="<?php echo $data['imagen']; ?>">
                                <img class="img-thumbnail" src="<?php echo base_url() . "Assets/images/usuarios/" . $data['imagen']; ?>" width="300">
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="usuario">Correo electrónico</label>
                                        <input id="usuario" class="form-control" type="text" name="usuario" placeholder="(*) Correo electrónico" value="<?php echo $data['usuario']; ?>">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <label for="rol">Asignación de rol</label>
                                    <select id="rol" class="form-control" name="rol">
                                        <option value="1" <?php if ($data['rol'] == "1") {
                                                                            echo "selected";
                                                                        } ?>>Responsable del sistema</option>
                                        <option value="2" <?php if ($data['rol'] == "2") {
                                                                        echo "selected";
                                                                    } ?>>Administrador</option>
                                        <option value="3" <?php if ($data['rol'] == "3") {
                                                                        echo "selected";
                                                                    } ?>>Docente</option>
                                        <option value="4" <?php if ($data['rol'] == "4") {
                                                                        echo "selected";
                                                                    } ?>>Estudiante</option>
                                        <option value="5" <?php if ($data['rol'] == "5") {
                                                                        echo "selected";
                                                                    } ?>>Particular</option>
                                        <option value="6" <?php if ($data['rol'] == "6") {
                                                                        echo "selected";
                                                                    } ?>>Responsable de carrera</option>
                                        <option value="7" <?php if ($data['rol'] == "7") {
                                                                        echo "selected";
                                                                    } ?>>Invitado</option>
                                        <option value="8" <?php if ($data['rol'] == "8") {
                                                                        echo "selected";
                                                                    } ?>>Usuario para registro docente</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-primary" type="submit">Modificar</button>
                            <a class="btn btn-danger" href="<?php echo base_url();?>usuarios/listar">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
<?php pie() ?>