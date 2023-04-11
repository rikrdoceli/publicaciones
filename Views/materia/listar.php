<?php encabezado()?>
<head>
    <title>GIDI - Categorías</title>
</head>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <p></p>
            <h5 class="text-center">Categorías de las publicaciones</h5>
            <div class="row">
                <div class="col-lg-12">
                    <button class="btn btn-primary mb-2" type="button" data-toggle="modal" data-target="#nuevoMateria"><i class="fas fa-plus-circle"></i> Ingresar categoría</button>
                    <div class="table-responsive">
                        <table class="table table-light mt-4" id="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th><center>Id</center></th>
                                    <th><center>Nombre</center></th>
                                    <th><center>Estado</center></th>
                                    <th><center>Acción</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data as $materia) {
                                    if ($materia['estado'] == 1) {
                                        $estado = '<span class="badge-success p-1 rounded">Activo</span>';
                                    } else {
                                        $estado = '<span class="badge-danger p-1 rounded">Inactivo</span>';
                                    }
                                ?>
                                    <tr>
                                        <td><center><?php echo $materia['id']; ?></center></td>
                                        <td><center><?php echo $materia['materia']; ?></center></td>
                                        <td><center><?php echo $estado; ?></center></td>
                                        <td><center>
                                            <a class="btn btn-primary" href="<?php echo base_url() ?>materia/editar?id=<?php echo $materia['id'] ?>"><i class="fas fa-edit"></i></a>
                                            <?php if ($_SESSION['rol'] == 1) { ?>
                                            <?php if ($materia['estado'] == 1) { ?>
                                                <form method="post" action="<?php echo base_url() ?>materia/eliminar" class="d-inline eliminar" enctype="multipart/form-data">
                                                    <input type="hidden" name="id" value="<?php echo $materia['id']; ?>">
                                                   <button class="btn btn-warning" type="submit"><i class="fas fa-exclamation-triangle"></i></button>
                                                </form>
                                            <?php } else { ?>
                                                <form method="post" action="<?php echo base_url() ?>materia/reingresar" class="d-inline reingresar" enctype="multipart/form-data">
                                                    <input type="hidden" name="id" value="<?php echo $materia['id']; ?>">
                                                    <button class="btn btn-success" type="submit"><i class="fas fa-audio-description"></i></button>
                                                </form>
                                                
                                            <?php } ?>
                                            <?php } ?>
                                            <form method="get" action="<?php echo base_url(); ?>materia/eliminar1" class="d-inline eliminar1">
                                                <input type="hidden" name="id" value="<?php echo $materia['id']; ?>">
                                                <button class="btn btn-danger" type="submit"><i class="fas fa-trash-alt"></i></button>
                                            </form>
                                            </center>
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
    <div id="nuevoMateria" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-black" id="my-modal-title">Registro de categoría</h5>
                    <button class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="<?php echo base_url(); ?>materia/registrar" autocomplete="off" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="nombre">Nombre de la categoría</label>
                                    <input id="nombre" class="form-control" type="text" name="nombre" required placeholder="(*) Nombre de la categoría">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <button class="btn btn-primary" type="submit">Registrar</button>
                                    <button class="btn btn-danger" data-dismiss="modal" type="button">Cancelar</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php pie() ?>