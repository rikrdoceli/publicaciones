<?php encabezado() ?>
<head>
    <title>Áreas de trabajo</title>
</head>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h5 class="text-center"><br>Áreas de trabajo</h5>
            <div class="row">
                <div class="col-lg-12">
                    <button class="btn btn-primary mb-2" type="button" data-toggle="modal" data-target="#nuevoEditorial"><i class="fas fa-plus-circle"></i> Ingresar áreas</button>
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
                                <?php foreach ($data as $editorial) {
                                    if ($editorial['estado'] == 1) {
                                        $estado = '<span class="badge-success p-1 rounded">Activo</span>';
                                    } else {
                                        $estado = '<span class="badge-danger p-1 rounded">Inactivo</span>';
                                    }
                                ?>
                                    <tr>
                                        <td><center><?php echo $editorial['id']; ?></center></td>
                                        <td><center><?php echo $editorial['editorial']; ?></center></td>
                                        <td><center><?php echo $estado; ?></center></td>
                                        <td><center>
                                            <a class="btn btn-primary" href="<?php echo base_url() ?>editorial/editar?id=<?php echo $editorial['id']; ?>"><i class="fas fa-edit"></i></a>
                                            <?php if ($_SESSION['rol'] == 1) { ?>
                                            <?php if ($editorial['estado'] == 1) { ?>
                                                <form method="post" action="<?php echo base_url() ?>editorial/eliminar" class="d-inline eliminar">
                                                    <input type="hidden" name="id" value="<?php echo $editorial['id']; ?>">
                                                    <button class="btn btn-warning" type="submit"><i class="fas fa-exclamation-triangle"></i></button>
                                                </form>
                                            <?php } else { ?>
                                                <form method="post" action="<?php echo base_url() ?>editorial/reingresar" class="d-inline reingresar">
                                                    <input type="hidden" name="id" value="<?php echo $editorial['id']; ?>">
                                                    <button class="btn btn-success" type="submit"><i class="fas fa-audio-description"></i></button>
                                                </form>
                                            <?php } ?>
                                            <?php } ?>
                                            <form method="get" action="<?php echo base_url(); ?>editorial/eliminar1" class="d-inline eliminar1">
                                                <input type="hidden" name="id" value="<?php echo $editorial['id']; ?>">
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
        <div id="nuevoEditorial" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title text-black text-center" id="my-modal-title">Registro de área</h5>
                        <button class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="<?php echo base_url(); ?>editorial/registrar" method="post" enctype="multipart/form-data" autocomplete="off">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="nombre">Nombre</label>
                                        <input id="nombre" class="form-control" type="text" name="nombre" required placeholder="(*) Nombre del área">
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
    </main>
    <?php pie() ?>