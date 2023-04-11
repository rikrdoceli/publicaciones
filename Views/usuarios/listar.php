<?php encabezado() ?>
<head>
    <title>GIDI - Usuarios</title>
</head>
<!-- Begin Page Content -->
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
        <h5 class="text-center"><p></p>Usuarios registrados</h5>
            <?php if (isset($_GET['error'])) { ?>
                <div class="toast ml-auto bg-danger text-white" id="errorCambioPass" role="alert" data-delay="3000" aria-live="assertive" aria-atomic="true">
                    <div class="toast-header">
                        <img src="<?php echo base_url(); ?>Assets/img/error.png" class="rounded mr-2" width="25">
                        <strong class="mr-auto">Alerta</strong>
                        <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="toast-body">
                        Contraseña actual incorrecta
                    </div>
                </div>
            <?php } ?>

            <div class="row">
                <div class="col-lg-12 mt-2">
                    <div class="row">
                        <div class="col-lg-6 mb-2">
                            <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#nuevo_user"><i class="fas fa-user-plus"></i> Ingresar usuario</button>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered" id="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th><center>Id</center></th>
                                    <th><center>Nombre y Apellido</center></th>
                                    <th><center>Cédula</center></th>
                                    <th><center>Correo electrónico - Usuario</center></th>
                                    <th><center>Cargo</center></th>
                                    <th><center>Rol asignado</center></th>
                                    <th><center>Foto</center></th>
                                    <th><center>Estado</center></th>
                                    <th><center>Acciones</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($data as $us) {
                                    if ($us['rol'] == 1) {
                                        $rol = '<span class="badge-success p-1 rounded">Responsable del sistema</span>';
                                    } 
                                    else if ($us['rol'] == 2) {
                                        $rol = '<span class="badge-primary p-1 rounded">Administrador</span>';
                                    } 
                                    else if ($us['rol'] == 3) {
                                        $rol = '<span class="badge-warning p-1 rounded">Docente</span>';
                                    }
                                    else if ($us['rol'] == 4) {
                                        $rol = '<span class="badge-danger p-1 rounded">Estudiante</span>';
                                    }
                                    else if ($us['rol'] == 5) {
                                        $rol = '<span class="badge-secondary p-1 rounded">Particular</span>';
                                    }
                                    else if ($us['rol'] == 6) {
                                        $rol = '<span class="badge-info p-1 rounded">Responsable de carrera</span>';
                                    }
                                    else if ($us['rol'] == 7){
                                        $rol = '<span class="badge-info p-1 rounded">Invitado</span>';
                                    }
                                    else {
                                        $rol = '<span class="badge-info p-1 rounded">Usuario para registro docente</span>';
                                    }
                                    if ($us['estado'] == 1) {
                                        $estado = '<span class="badge-primary p-1 rounded">Activo</span>';
                                    } else {
                                        $estado = '<span class="badge-danger p-1 rounded">Inactivo</span>';
                                    }
                                ?>
                                    <tr>
                                        <td><br><br><?php echo $us['id']; ?></td>
                                        <td><br><br><?php echo $us['nombre']; ?></td>
                                        <td><br><br><?php echo $us['cedula']; ?></td>
                                        <td><br><br><?php echo $us['usuario']; ?></td>
                                        <td><br><br><?php echo $us['cargo']; ?></td>
                                        <td><br><br><?php echo $rol; ?></td>
                                        <td><br><br><img src="<?php echo base_url() ?>Assets/images/usuarios/<?php echo $us['imagen']; ?>" width="300" class="img-thumbnail"></td>
                                        <td><center><br><br><p></p><?php echo $estado; ?></center></td>
                                        <td>
                                            <center><a href="<?php echo base_url() ?>usuarios/editar?id=<?php echo $us['id']; ?>" class="btn btn-primary"><i class="fas fa-edit"></i></a></center>
                                            <p></p>
                                            <?php if ($us['estado'] == 1) { ?>
                                                <p></p>
                                                <form action="<?php echo base_url() ?>usuarios/eliminar" method="post" class="d-inline eliminar">
                                                    <input type="hidden" name="id" value="<?php echo $us['id']; ?>">
                                                    <center><button type="submit" class="btn btn-warning"><i class="fas fa-exclamation-triangle"></i></button></center>
                                                </form>
                                            <?php } else { ?>
                                                <form action="<?php echo base_url() ?>usuarios/reingresar" method="post" class="d-inline reingresar">
                                                    <input type="hidden" name="id" value="<?php echo $us['id']; ?>">
                                                    <center><button type="submit" class="btn btn-success"><i class="fas fa-audio-description"></i></button></center>
                                                </form>
                                            <?php } ?>
                                            <form method="get" action="<?php echo base_url(); ?>usuarios/eliminar1" class="d-inline eliminar1">
                                            <p></p>
                                                <input type="hidden" name="id" value="<?php echo $us['id']; ?>">
                                                <p></p>
                                                <center><button class="btn btn-danger" type="submit"><i class="fas fa-trash-alt"></i></button></center>
                                            </form>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <div id="nuevo_user" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-black" id="my-modal-title">Registrar usuario</h5>
                    <button class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" action="<?php echo base_url(); ?>usuarios/insertar" autocomplete="off" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="nombre">Nombre y Apellido</label>
                            <input id="nombre" class="form-control" type="text" name="nombre" placeholder="(*) Nombre y Apellido">
                        </div>
                        <div class="form-group">
                            <label for="cedula">C.I.</label>
                            <input id="cedula" class="form-control" type="text" name="cedula" placeholder="(*) C.I.">
                        </div>
                        <div class="form-group">
                            <label for="cargo">Cargo</label>
                            <input id="cargo" class="form-control" type="text" name="cargo" placeholder="(*) Cargo">
                         </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="usuario">Correo electrónico</label>
                                    <input id="usuario" class="form-control" type="text" name="usuario" placeholder="(*) Correo electrónico">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <label for="foto">Imagen</label>
                                <input id="foto" class="form-control" type="file" name="imagen">
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="clave">Contraseña</label>
                                    <input id="clave" class="form-control" type="password" name="clave" placeholder="(*) Contraseña">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <label for="rol">Asignación de rol</label>
                                <select id="rol" class="form-control" name="rol">
                                    <option value="1">Responsable del sistema</option>
                                    <option value="2">Administrador</option>
                                    <option value="3">Docente</option>
                                    <option value="4">Estudiante</option>
                                    <option value="5">Particular</option>
                                    <option value="6">Responsable de carrera</option>
                                    <option value="7">Invitado</option>
                                    <option value="8">Usuario para registro docente</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-primary" type="submit">Registrar</button>
                        <button class="btn btn-danger" type="button" data-dismiss="modal">Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php pie() ?>