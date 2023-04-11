<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Editar publicaciones</title>
    <link rel="icon" href="<?php echo base_url(); ?>Assets/img/GIDI1.ico"></link>
    <link rel="stylesheet" href="<?php echo base_url(); ?>Views\template\style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>Assets/css/styles.css" id="theme-stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>Assets/css/select2.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>Assets/css/dataTables.bootstrap4.min.css">

</head>
<?php encabezado() ?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
        <h5 class="text-center"> <br>EDITAR PUBLICACIÓN</h5>
            <div class="row p-5">
                <form action="<?php echo base_url() ?>libros/modificar" method="post" id="frmlibros" class="row" autocomplete="off" enctype="multipart/form-data">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="titulo">Título</label>
                            <input type="hidden" name="id" value="<?php echo $data['libro']['id']; ?>">
                            <input id="titulo" class="form-control" type="text" name="titulo" value="<?php echo $data['libro']['titulo']; ?>">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="autor">Autor</label>
                            <select id="autor" class="form-control" name="autor">
                                <?php foreach ($data['autores'] as $autor) { ?>
                                    <option <?php if ($autor['id'] == $data['libro']['id_autor']) {
                                                echo 'selected';
                                            } ?> value="<?php echo $autor['id']; ?>"><?php echo $autor['autor']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <label for="editorial">Área de trabajo</label>
                            <select id="editorial" class="form-control" name="editorial">
                                <?php foreach ($data['editoriales'] as $editorial) { ?>
                                    <option <?php if ($editorial['id'] == $data['libro']['id_editorial']) {
                                                echo 'selected';
                                            } ?> value="<?php echo $editorial['id']; ?>"><?php echo $editorial['editorial']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <label for="materia">Categoría de publicación</label>
                            <select id="materia" class="form-control" name="materia">
                                <?php foreach ($data['materias'] as $materia) { ?>
                                    <option <?php if ($materia['id'] == $data['libro']['id_materia']) {
                                                echo 'selected';
                                            } ?> value="<?php echo $materia['id']; ?>"><?php echo $materia['materia']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="cantidad">Código</label>
                            <input id="cantidad" class="form-control" type="text" name="cantidad" value="<?php echo $data['libro']['cantidad'] ?>">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="num_pagina">Número de páginas</label>
                            <input id="num_pagina" class="form-control" type="number" name="num_pagina" value="<?php echo $data['libro']['num_pagina']; ?>">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="anio_acepta">Fecha de aceptación</label>
                            <input id="anio_acepta" class="form-control" type="date" name="anio_acepta" value="<?php echo $data['libro']['anio_acepta']; ?>">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="anio_edicion">Fecha de publicación</label>
                            <input id="anio_edicion" class="form-control" type="date" name="anio_edicion" value="<?php echo $data['libro']['anio_edicion']; ?>">
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="form-group">
                            <div class="form-group">
                                <label for="descripcion">Descripción</label>
                                <textarea id="descripcion" class="form-control" name="descripcion" rows="2"><?php echo $data['libro']['descripcion']; ?></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="form-group">
                            <div class="form-group">
                                <label for="enlace">Enlace del archivo</label>
                                <textarea id="enlace" class="form-control" name="enlace" rows="2"><?php echo $data['libro']['enlace']; ?></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="imagen">Archivo PDF</label>
                            <input id="fototemp" type="hidden" name="foto" value="<?php echo $data['libro']['imagen']; ?>">
                            <input id="imagen" class="form-control" type="file" name="imagen">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <button><iframe class="img-thumbnail" src="<?php echo base_url() . "Assets/images/libros/" . $data['libro']['imagen']; ?>" width="250"></iframe><b>Archivo cargado previamente</b></button>
                    <br>
                    </div>
                    <br>
                        <div class="form-group">
                            <button class="btn btn-primary" type="submit">Modificar</button>
                            <a class="btn btn-danger" href="<?php echo base_url(); ?>libros">Cancelar</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <?php pie() ?>