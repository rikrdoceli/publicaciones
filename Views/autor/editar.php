<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Editar autores</title>
    <link rel="icon" href="<?php echo base_url(); ?>Assets/img/GIDI1.ico"></link>
    <link rel="stylesheet" href="<?php echo base_url(); ?>Views\template\style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>Assets/css/styles.css" id="theme-stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>Assets/css/select2.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>Assets/css/dataTables.bootstrap4.min.css">

</head>
<?php encabezado() ?>
<!-- Begin Page Content -->
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
        <h5 class="text-center"> <br>EDITAR AUTOR/ES</h5>
            <div class="row mt-2">
                <div class="col-lg-6 m-auto">
                    <div class="card">
                        <div class="card-body">
                            <form action="<?php echo base_url(); ?>autor/modificar" method="post" enctype="multipart/form-data" autocomplete="off">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="nombre">Nombres y Apellidos del autor o autores</label>
                                            <input type="hidden" name="id" value="<?php echo $data['id']; ?>" required>
                                            <input id="nombre" class="form-control" type="text" name="nombre" value="<?php echo $data['autor']; ?>" required placeholder="Nombre y Apellido del autor 1">
                                        </div>
                                    </div>
                                    <!-- <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="foto">Foto</label>
                                            <input id="foto" class="form-control" type="file" name="imagen">
                                            <input type="hidden" name="foto" value="<?php echo $data['imagen']; ?>">
                                            <img class="img-thumbnail" src="<?php echo base_url() . "Assets/images/autor/" . $data['imagen']; ?>" width="250">
                                        </div>
                                    </div> -->
                                    <!-- <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="nombre2">Nombre y Apellido - Autor 2</label>
                                            <input type="hidden" name="id" value="<?php echo $data['id']; ?>" required>
                                            <input id="nombre2" class="form-control" type="text" name="nombre2" value="<?php echo $data['autor2']; ?>" required placeholder="Nombre y Apellido del autor 2">
                                        </div>
                                    </div> -->
                                    <!-- <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="foto">Foto</label>
                                            <input id="foto" class="form-control" type="file" name="imagen2">
                                            <input type="hidden" name="foto" value="<?php echo $data['imagen']; ?>">
                                            <img class="img-thumbnail" src="<?php echo base_url() . "Assets/images/autor/" . $data['imagen2']; ?>" width="250">
                                        </div>
                                    </div> -->
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <button class="btn btn-primary" type="submit">Modificar</button>
                                            <a class="btn btn-danger" href="<?php echo base_url(); ?>autor" type="button">Atras</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php pie() ?>