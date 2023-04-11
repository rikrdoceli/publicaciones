<?php encabezado() ?>
<head>
    <title>Autores</title>
</head>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h5 class="text-center"><p></p>Autores registrados</h5>
            <div class="row">
                <div class="col-lg-12">
                    <button class="btn btn-primary mb-2" type="button" data-toggle="modal" data-target="#nuevolibro"><i class="fas fa-plus-circle"></i> Ingresar autores</button>
                    <div class="table-responsive">
                        <table class="table table-light mt-4" id="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th><center>Id</center></th>
                                    <th><center>Nombres y Apellidos del autor o autores de la publicación</center></th>
                                    <!-- <th><center>Foto</center></th> -->
                                   <!--  <th><center>Foto</center></th> -->
                                    <th><center>Estado</center></th>
                                    <th><center>Acción</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data as $autor) {
                                    if ($autor['estado'] == 1) {
                                        $estado = '<span class="badge-success p-1 rounded">Activo</span>';
                                    } else {
                                        $estado = '<span class="badge-danger p-1 rounded">Inactivo</span>';
                                    }
                                ?>
                                    <tr>
                                        <td><center><?php echo $autor['id']; ?></center></td>
                                        <td><center><?php echo $autor['autor']; ?></center></td>
                                        <!-- <td><center><img class="img-thumbnail" src="<?php echo base_url() ?>Assets/images/autor/<?php echo $autor['imagen']; ?>" width="100"></center></td> -->
                                        <!-- <td><center><?php echo $autor['autor2']; ?></center></td> -->
                                        <!-- <td><center><img class="img-thumbnail" src="<?php echo base_url() ?>Assets/images/autor/<?php echo $autor['imagen2']; ?>" width="100"></center></td> -->
                                        <td><center><?php echo $estado; ?></center></td>
                                        <td><center>
                                        <a class="btn btn-primary" href="<?php echo base_url() ?>autor/editar?id=<?php echo $autor['id'] ?>"><i class="fas fa-edit"></i></a>
                                        <?php if ($_SESSION['rol'] == 1) { ?>
                                        <?php if ($autor['estado'] == 1) { ?>
                                                <form method="post" action="<?php echo base_url() ?>autor/eliminar" class="d-inline eliminar">
                                                    <input type="hidden" name="id" value="<?php echo $autor['id']; ?>">
                                                    <button class="btn btn btn-warning" type="submit"><i class="fas fa-exclamation-triangle"></i></button>
                                                </form>
                                            <?php } else { ?>
                                                <form method="post" action="<?php echo base_url() ?>autor/reingresar" class="d-inline reingresar">
                                                    <input type="hidden" name="id" value="<?php echo $autor['id']; ?>">
                                                    <button class="btn btn-success" type="submit"><i class="fas fa-audio-description"></i></button>
                                                </form>
                                            <?php } ?>
                                            <?php } ?>
                                            <form method="get" action="<?php echo base_url(); ?>autor/eliminar1" class="d-inline eliminar1">
                                                <input type="hidden" name="id" value="<?php echo $autor['id']; ?>">
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
        <div id="nuevolibro" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="my-modal-title"><br>REGISTRO DE AUTOR/ES</h5>
                        <h5 class="modal-title text-white" id="my-modal-title">Registro Autor</h5>
                        <button class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="<?php echo base_url(); ?>autor/registrar" method="post" enctype="multipart/form-data" autocomplete="off">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="nombre">Nombres y apellidos del autor o los autores</label>
                                        <input id="nombre" class="form-control" type="text" name="nombre" required placeholder="(*) Nombres y apellidos">
                                    </div>
                                </div>
                                <!-- <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="foto">Foto</label>
                                        <input id="foto" class="form-control" type="file" name="imagen">
                                    </div>
                                </div> -->
                                <!-- <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="foto">Foto</label>
                                        <input id="foto" class="form-control" type="file" name="imagen2">
                                    </div>
                                </div> -->
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