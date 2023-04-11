<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Publicaciones</title>
    <link rel="icon" href="<?php echo base_url(); ?>Assets/img/GIDI1.ico"></link>
    <link rel="stylesheet" href="<?php echo base_url(); ?>Views\template\style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>Assets/css/styles.css" id="theme-stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>Assets/css/select2.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>Assets/css/dataTables.bootstrap4.min.css">
   
</head>

<body class="sb-nav-fixed">
<?php encabezado() ?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
          <h5 class="text-center"><p></p>Publicaciones</h5>
            <div class="row">
                
                <div class="col-lg-12">
                <?php if ($_SESSION['rol'] == 1) { ?>
                    <button class="btn btn-primary mb-2" type="button" data-toggle="modal" data-target="#nuevolibro"><i class="fas fa-plus-circle"></i>Ingresar publicación</button>
                <?php } ?>
                <?php if ($_SESSION['rol'] == 2) { ?>
                    <button class="btn btn-primary mb-2" type="button" data-toggle="modal" data-target="#nuevolibro"><i class="fas fa-plus-circle"></i>Ingresar publicación</button>
                <?php } ?>
                <?php if ($_SESSION['rol'] == 3) { ?>
                    <button class="btn btn-primary mb-2" type="button" data-toggle="modal" data-target="#nuevolibro"><i class="fas fa-plus-circle"></i>Ingresar publicación</button>
                <?php } ?>
                <?php if ($_SESSION['rol'] == 4) { ?>
                    <button class="btn btn-primary mb-2" type="button" data-toggle="modal" data-target="#nuevolibro"><i class="fas fa-plus-circle"></i>Ingresar publicación</button>
                <?php } ?>
                <?php if ($_SESSION['rol'] == 5) { ?>
                    <button class="btn btn-primary mb-2" type="button" data-toggle="modal" data-target="#nuevolibro"><i class="fas fa-plus-circle"></i>Ingresar publicación</button>
                <?php } ?>
                <?php if ($_SESSION['rol'] == 6) { ?>
                    <button class="btn btn-primary mb-2" type="button" data-toggle="modal" data-target="#nuevolibro"><i class="fas fa-plus-circle"></i>Ingresar publicación</button>
                <?php } ?>
                    <div class="table table-responsive ">
                        <table class="table  table-bordered table-sm" id="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Título</th>
                                    <th>Código</th>
                                    <th>Autor/es</th>
                                    <th>Área de trabajo</th>
                                    <th>Categoría</th>
                                    <th>Archivo PDF</th>
                                    <th>Fecha de aceptación</th>
                                    <th>Fecha de publicación</th>
                                    <th>Descripción</th>
                                    <th><center>Enlace del archivo</center></th>
                                    <!-- <th>Opciones</th> -->
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data['libros'] as $libro) {
                                    if ($libro['estado'] == 1) {
                                        $estado = '<span class="badge-success p-1 rounded">Activo</span>';
                                    } else {
                                        $estado = '<span class="badge-danger p-1 rounded">Inactivo</span>';
                                    }
                                ?>
                                    <tr>
                                        <td><?php echo $libro['titulo']; ?></td>
                                        <td><?php echo $libro['cantidad']; ?></td>
                                        <td><?php echo $libro['autor']; ?></td>
                                        <td><?php echo $libro['editorial']; ?></td>
                                        <td><?php echo $libro['materia']; ?></td>
                                        <td>
                                        <?php if($libro['imagen'] != ""){  ?>
                                           <center><a target="_blank" href="<?php echo base_url() ?>Assets/images/libros/<?php echo $libro['imagen']; ?>"><br/><button class="btn btn-info btn-sm">Visualizar</button></a></center>
                                            <center><a color="orange" download="Archivo de GIDI" href="<?php echo base_url() ?>Assets/images/libros/<?php echo $libro['imagen']; ?>"><button class="btn btn-success btn-sm mt-1" >PDF</button></a></center>
                                        <?php } ?>
                                            </td>
                                        <td>
                                        <form enctype="multipart/form-data">
                                        <?php echo $libro['anio_acepta']; ?>
                                        </form>
                                        </td>
                                        <td>
                                        <form enctype="multipart/form-data">
                                        <?php echo $libro['anio_edicion']; ?>
                                        </form>
                                        </td>
                                        <td><?php echo $libro['descripcion']; ?></td>
                                        <td><?php echo $libro['enlace']; ?></td>
                                        <?php if ($_SESSION['rol'] == 1) { ?>
                                        <td>
                                            <a href="<?php echo base_url(); ?>libros/editar?id=<?php echo $libro['id']; ?>" class="btn btn-primary" title="Editar"><i class="fas fa-edit"></i><br></a>
                                            <?php if ($libro['estado'] == 1) { ?>
                                                <form method="post" action="<?php echo base_url(); ?>libros/eliminar" class="d-inline eliminar">
                                                    <input type="hidden" name="id" value="<?php echo $libro['id']; ?>">
                                                    <button class="btn btn-warning mt-1" type="submit" title="Inhabilitar"><i class="fas fa-exclamation-triangle"></i></button>
                                                </form>
                                            <?php } else { ?>
                                                <form method="post" action="<?php echo base_url(); ?>libros/reingresar" class="d-inline reingresar">
                                                <br>
                                                <input type="hidden" name="id" value="<?php echo $libro['id']; ?>">
                                                    <br>
                                                    <button class="btn btn-success" type="submit"><i class="fas fa-audio-description"></i></button>
                                                </form>
                                            <?php } ?>
                                            <form method="get" action="<?php echo base_url(); ?>libros/eliminar1" class="d-inline eliminar1">
                                                <input type="hidden" name="id" value="<?php echo $libro['id']; ?>">
                                                <br>
                                                <button class="btn btn-danger mt-1" type="submit" title="Eliminar"> <i class="fas fa-trash-alt"></i> </button>
                                            </form>
                                        </td>
                                        <?php } ?>
                                        <?php if ($_SESSION['rol'] == 2) { ?>
                                        <td>
                                            <a href="<?php echo base_url(); ?>libros/editar?id=<?php echo $libro['id']; ?>" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                        <br> 
                                            <form method="get" action="<?php echo base_url(); ?>libros/eliminar1" class="d-inline eliminar1">
                                                <br>
                                                <input type="hidden" name="id" value="<?php echo $libro['id']; ?>">
                                                <br>
                                                <button class="btn btn-danger" type="submit"><i class="fas fa-trash-alt"></i></button>
                                            </form>
                                        </td>
                                        <?php } ?>
                                        <?php if ($_SESSION['rol'] == 3) { ?>
                                        <td>
                                            <a href="<?php echo base_url(); ?>libros/editar?id=<?php echo $libro['id']; ?>" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                            <br> 
                                            <form method="get" action="<?php echo base_url(); ?>libros/eliminar1" class="d-inline eliminar1">
                                                <br>
                                                <input type="hidden" name="id" value="<?php echo $libro['id']; ?>">
                                                <br>
                                                <button class="btn btn-danger" type="submit"><i class="fas fa-trash-alt"></i></button>
                                            </form>
                                        </td>
                                        <?php } ?>
                                        <?php if ($_SESSION['rol'] == 4) { ?>
                                        <td>
                                        <P></P> 
                                            <a href="<?php echo base_url(); ?>libros/editar?id=<?php echo $libro['id']; ?>" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                             
                                            <form method="get" action="<?php echo base_url(); ?>libros/eliminar1" class="d-inline eliminar1">
                                                <br>
                                                <input type="hidden" name="id" value="<?php echo $libro['id']; ?>">
                                                <br>
                                                <button class="btn btn-danger" type="submit"><i class="fas fa-trash-alt"></i></button>
                                            </form>
                                        </td>
                                        <?php } ?>
                                        <?php if ($_SESSION['rol'] == 5) { ?>
                                        <td>
                                            <a href="<?php echo base_url(); ?>libros/editar?id=<?php echo $libro['id']; ?>" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                            <br> 
                                            <form method="get" action="<?php echo base_url(); ?>libros/eliminar1" class="d-inline eliminar1">
                                                <br>
                                                <input type="hidden" name="id" value="<?php echo $libro['id']; ?>">
                                                <br>
                                                <button class="btn btn-danger" type="submit"><i class="fas fa-trash-alt"></i></button>
                                            </form>
                                        </td>
                                        <?php } ?>
                                        <?php if ($_SESSION['rol'] == 6) { ?>
                                        <td>
                                            <a href="<?php echo base_url(); ?>libros/editar?id=<?php echo $libro['id']; ?>" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                            <br> 
                                            <form method="get" action="<?php echo base_url(); ?>libros/eliminar1" class="d-inline eliminar1">
                                                <br>
                                                <input type="hidden" name="id" value="<?php echo $libro['id']; ?>">
                                                <br>
                                                <button class="btn btn-danger" type="submit"><i class="fas fa-trash-alt"></i></button>
                                            </form>
                                        </td>
                                        <?php } ?>
                                        <?php if ($_SESSION['rol'] == 7) { ?>
                                        <td>
                                            <!-- <a href="<?php echo base_url(); ?>libros/editar?id=<?php echo $libro['id']; ?>" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                            <?php if ($libro['estado'] == 1) { ?>
                                                <form method="post" action="<?php echo base_url(); ?>libros/eliminar" class="d-inline eliminar">
                                                    <input type="hidden" name="id" value="<?php echo $libro['id']; ?>">
                                                    <button class="btn btn-danger" type="submit"><i class="fas fa-trash-alt"></i></button>
                                                </form>
                                            <?php } else { ?>
                                                <form method="post" action="<?php echo base_url(); ?>libros/reingresar" class="d-inline reingresar">
                                                    <input type="hidden" name="id" value="<?php echo $libro['id']; ?>">
                                                    <button class="btn btn-success" type="submit"><i class="fas fa-audio-description"></i></button>
                                                </form>
                                            <?php } ?>  -->
                                        </td>
                                        <?php } ?>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <div id="nuevolibro" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="my-modal-title"><br>REGISTRO DE PUBLICACIÓN</h5>
                    <button class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo base_url() ?>libros/registrar" method="post" id="frmlibros" class="row" autocomplete="off" enctype="multipart/form-data">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="titulo">Título</label>
                                <input id="titulo" class="form-control" type="text" name="titulo" placeholder="Título del libro">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="autor">Autor</label>
                               
                                <select id="autor" class="form-control" name="autor">
                                    <?php foreach ($data['autores'] as $autor) { ?>
                                        <option value="<?php echo $autor['id']; ?>"><?php echo $autor['autor']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="editorial">Área de trabajo</label>
                                <select id="editorial" class="form-control" name="editorial">
                                    <?php foreach ($data['editoriales'] as $editorial) { ?>
                                        <option value="<?php echo $editorial['id']; ?>"><?php echo $editorial['editorial']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="materia">Categoría de publicación</label>
                                <select id="materia" class="form-control" name="materia">
                                    <?php foreach ($data['materias'] as $materia) { ?>
                                        <option value="<?php echo $materia['id']; ?>"><?php echo $materia['materia']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="cantidad">Código</label>
                                <input id="cantidad" class="form-control" type="text" name="cantidad" placeholder="Código">
                            </div>
                        </div>
                        <div class="col-md-6" hidden>
                            <div class="form-group">
                                <label for="num_pagina">Número de páginas</label>
                                <input id="num_pagina" class="form-control" type="number" name="num_pagina" placeholder="Número de páginas" value="0">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="anio_acepta">Fecha de aceptación</label>
                                <input id="anio_acepta" class="form-control" type="date" name="anio_acepta" value="<?php echo date("Y-m-d"); ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="anio_edicion">Fecha de publicación</label>
                                <input id="anio_edicion" class="form-control" type="date" name="anio_edicion" value="<?php echo date("Y-m-d"); ?>">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="descripcion">Descripción general</label>
                                    <textarea id="descripcion" class="form-control" name="descripcion" rows="1"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="enlace">Enlace del archivo</label>
                                    <textarea id="enlace" class="form-control" name="enlace" rows="1"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="imagen">Archivo PDF</label>
                                <input id="imagen" class="form-control" type="file" name="imagen">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <button class="btn btn-primary" type="submit">Registrar</button>
                                <button class="btn btn-danger" data-dismiss="modal" type="button">Cancelar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php pie() ?>
