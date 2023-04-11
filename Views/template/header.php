<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!-- <title>GIDI</title> -->
    <link rel="icon" href="<?php echo base_url(); ?>Assets/img/GIDI1.ico"></link>
    <link rel="stylesheet" href="<?php echo base_url(); ?>Views\template\style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>Assets/css/styles.css" id="theme-stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>Assets/css/select2.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>Assets/css/dataTables.bootstrap4.min.css">

</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <label for="" class="brand">
            <label for="" class="brand">
                <p></p>
            <img src="<?php echo base_url(); ?>Views\template\logoprin.png" alt="">
            <br>
        </label>   
            <a style="color:white"><b>Gestor Informático Documental de Investigación</b></a>
        </label>
        <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
        <!-- Navbar-->
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><b><?php echo $_SESSION['nombre']; ?> (<?php echo $_SESSION['cargo'];?>) 
                <img src="<?php echo base_url(); ?>Assets/images/usuarios/<?php echo $_SESSION['imagen']; ?>" width="45" height="45" alt=""></b></a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <div>
                    <a class="dropdown-item" href="#" style="background-color: #22fd26"><b>Usuario activo</b></a>
                    </div> 
                    <?php if ($_SESSION['rol'] == 1) { ?>  
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?php echo base_url(); ?>usuarios/perfil">Cambiar contraseña</a>
                    <?php } ?>
                    <?php if ($_SESSION['rol'] == 2) { ?>  
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?php echo base_url(); ?>usuarios/perfil">Cambiar contraseña</a>
                    <?php } ?>
                    <?php if ($_SESSION['rol'] == 3) { ?>  
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?php echo base_url(); ?>usuarios/perfil">Cambiar contraseña</a>
                    <?php } ?>
                    <?php if ($_SESSION['rol'] == 4) { ?>  
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?php echo base_url(); ?>usuarios/perfil">Cambiar contraseña</a>
                    <?php } ?>
                    <?php if ($_SESSION['rol'] == 5) { ?>  
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?php echo base_url(); ?>usuarios/perfil">Cambiar contraseña</a>
                    <?php } ?>
                    <?php if ($_SESSION['rol'] == 6) { ?>  
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?php echo base_url(); ?>usuarios/perfil">Cambiar contraseña</a>
                    <?php } ?>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?php echo base_url(); ?>usuarios/salir">Salir</a>
                </div>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion navbar-light" id="sidenavAccordion" style="background-color: #96fdc6;">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                       
                            <!-- <a class="nav-link active" href="<?php //echo base_url(); ?>admin/escritorio">
                                <div class="sb-nav-link-icon"><i class="fas fa-tasks fa-lg"></i></div>
                                Prestamo
                            </a> -->
                        <a class="nav-link active" href="<?php echo base_url(); ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-home fa-lg"></i></div>
                            <b>Escritorio</b>
                        </a>
                        <?php if ($_SESSION['rol'] == 1) { ?>
                        <a class="nav-link collapsed active" href="<?php echo base_url(); ?>/libros" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-book fa-lg"></i></div>
                            <b>Publicaciones</b>
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down fa-lg"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link active" href="<?php echo base_url(); ?>libros">Publicaciones</a>
                                <a class="nav-link active" href="<?php echo base_url(); ?>autor">Autores</a>
                                <a class="nav-link active" href="<?php echo base_url(); ?>editorial">Áreas de trabajo</a>
                            </nav>
                        </div>
                        <?php } ?>
                        <?php if ($_SESSION['rol'] == 2) { ?>
                        <a class="nav-link collapsed active" href="<?php echo base_url(); ?>/libros" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-book fa-lg"></i></div>
                            <b>Publicaciones</b>
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down fa-lg"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link active" href="<?php echo base_url(); ?>libros">Publicaciones</a>
                                <a class="nav-link active" href="<?php echo base_url(); ?>autor">Autores</a>
                                <a class="nav-link active" href="<?php echo base_url(); ?>editorial">Áreas de trabajo</a>
                            </nav>
                        </div>
                        <?php } ?>
                        <?php if ($_SESSION['rol'] == 3) { ?>
                        <a class="nav-link collapsed active" href="<?php echo base_url(); ?>/libros" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-book fa-lg"></i></div>
                            <b>Publicaciones</b>
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down fa-lg"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link active" href="<?php echo base_url(); ?>libros">Publicaciones</a>
                                <a class="nav-link active" href="<?php echo base_url(); ?>autor">Autores</a>
                                <a class="nav-link active" href="<?php echo base_url(); ?>editorial">Áreas de trabajo</a>
                            </nav>
                        </div>
                        <?php } ?>
                        <?php if ($_SESSION['rol'] == 4) { ?>
                        <a class="nav-link collapsed active" href="<?php echo base_url(); ?>/libros" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-book fa-lg"></i></div>
                            <b>Publicaciones</b>
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down fa-lg"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link active" href="<?php echo base_url(); ?>libros">Publicaciones</a>
                                <a class="nav-link active" href="<?php echo base_url(); ?>autor">Autores</a>
                                <a class="nav-link active" href="<?php echo base_url(); ?>editorial">Áreas de trabajo</a>
                            </nav>
                        </div>
                        <?php } ?>
                        <?php if ($_SESSION['rol'] == 5) { ?>
                        <a class="nav-link collapsed active" href="<?php echo base_url(); ?>/libros" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-book fa-lg"></i></div>
                            <b>Publicaciones</b>
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down fa-lg"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link active" href="<?php echo base_url(); ?>libros">Publicaciones</a>
                                <a class="nav-link active" href="<?php echo base_url(); ?>autor">Autores</a>
                                <a class="nav-link active" href="<?php echo base_url(); ?>editorial">Áreas de trabajo</a>
                            </nav>
                        </div>
                        <?php } ?>
                        <?php if ($_SESSION['rol'] == 6) { ?>
                        <a class="nav-link collapsed active" href="<?php echo base_url(); ?>/libros" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-book fa-lg"></i></div>
                            <b>Publicaciones</b>
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down fa-lg"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link active" href="<?php echo base_url(); ?>libros">Publicaciones</a>
                                <a class="nav-link active" href="<?php echo base_url(); ?>autor">Autores</a>
                                <a class="nav-link active" href="<?php echo base_url(); ?>editorial">Áreas de trabajo</a>
                            </nav>
                        </div>
                        <?php } ?>
                        <?php if ($_SESSION['rol'] == 7) { ?>
                        <a class="nav-link collapsed active" href="<?php echo base_url(); ?>/libros" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-book fa-lg"></i></div>
                            <b>Publicaciones</b>
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down fa-lg"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link active" href="<?php echo base_url(); ?>libros">Publicaciones</a>
                            </nav>
                        </div>
                        <?php } ?>
                        <?php if ($_SESSION['rol'] == 1) { ?>
                        <a class="nav-link active" href="<?php echo base_url(); ?>materia">
                            <div class="sb-nav-link-icon"><i class="fas fa-list fa-lg"></i>
                            </div>
                            <b>Categorías</b>
                        </a>
                        <?php } ?>
                        <?php if ($_SESSION['rol'] == 2) { ?>
                        <a class="nav-link active" href="<?php echo base_url(); ?>materia">
                            <div class="sb-nav-link-icon"><i class="fas fa-list fa-lg"></i>
                            </div>
                            <b>Categorías</b>
                        </a>
                        <?php } ?>
                        <?php if ($_SESSION['rol'] == 3) { ?>
                        <a class="nav-link active" href="<?php echo base_url(); ?>materia">
                            <div class="sb-nav-link-icon"><i class="fas fa-list fa-lg"></i>
                            </div>
                            <b>Categorías</b>
                        </a>
                        <?php } ?>
                        <?php if ($_SESSION['rol'] == 4) { ?>
                        <a class="nav-link active" href="<?php echo base_url(); ?>materia">
                            <div class="sb-nav-link-icon"><i class="fas fa-list fa-lg"></i>
                            </div>
                            <b>Categorías</b>
                        </a>
                        <?php } ?>
                        <?php if ($_SESSION['rol'] == 5) { ?>
                        <a class="nav-link active" href="<?php echo base_url(); ?>materia">
                            <div class="sb-nav-link-icon"><i class="fas fa-list fa-lg"></i>
                            </div>
                            <b>Categorías</b>
                        </a>
                        <?php } ?>
                        <?php if ($_SESSION['rol'] == 6) { ?>
                        <a class="nav-link active" href="<?php echo base_url(); ?>materia">
                            <div class="sb-nav-link-icon"><i class="fas fa-list fa-lg"></i>
                            </div>
                            <b>Categorías</b>
                        </a>
                        <?php } ?>
                       <!--  <?php if ($_SESSION['rol'] == 1) { ?>
                            <a class="nav-link active" href="<?php //echo base_url(); ?>estudiantes">
                            <div class="sb-nav-link-icon"><i class="fas fa-book-reader fa-lg"></i>
                        </div>
                        Registros
                        </a>
                        <?php } ?> -->
                        <?php if ($_SESSION['rol'] == 1) { ?>
                            <a class="nav-link active" href="<?php echo base_url(); ?>usuarios/listar">
                                <div class="sb-nav-link-icon"><i class="fas fa-user fa-lg"></i>
                                </div>
                                <b>Usuarios</b>
                            </a>
                            <a class="nav-link active" href="<?php echo base_url(); ?>configuracion/listar">
                                <div class="sb-nav-link-icon"><i class="fas fa-tools fa-lg"></i>
                                </div>
                                <b>Configuración</b>
                            </a>
                        <?php } ?>

                        <?php if ($_SESSION['rol'] == 8) { ?>
                            <a class="nav-link active" href="<?php echo base_url(); ?>usuarios/listar">
                                <div class="sb-nav-link-icon"><i class="fas fa-user fa-lg"></i>
                                </div>
                                <b>Usuarios</b>
                            </a>
                        <?php } ?>
                        <?php if ($_SESSION['rol'] == 1) { ?>
                        <a class="nav-link collapsed active" href="<?php echo base_url(); ?>/libros" data-toggle="collapse" data-target="#collapseEst" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-file-pdf fa-lg"></i></div>
                            <b>Reportes</b>
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down fa-lg"></i></div>
                        </a>
                        <div class="collapse" id="collapseEst" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <!-- <a class="nav-link active" target="_blank" href="<?php //echo base_url(); ?>admin/pdf">Prestamos</a> -->
                                <a class="nav-link active" target="_blank" href="<?php echo base_url(); ?>libros/pdf">Reporte de publicaciones por Autor/es</a>
                                <a class="nav-link active" target="_blank" href="<?php echo base_url(); ?>libros/pdf2">Reporte por Publicaciones</a>
                                <a class="nav-link active" target="_blank" href="<?php echo base_url(); ?>libros/pdf3">Reporte por Áreas de trabajo</a>
                            </nav>
                        </div>
                        <?php } ?>

                    </div>
                </div>
                <div class="sb-sidenav-footer navbar-dark bg-dark">
                    <div class="small"><a style="color:white"><b>Síguenos en nuestras redes sociales:<p></p></b></a></div>
                    <a href="https://www.facebook.com/profile.php?id=100080916182351" class="text-white"><i class="fab fa-facebook-square"></i>&ensp;&ensp;&ensp;</a>
                    <a href="https://twitter.com/GidiRep" class="text-white"><i class="fab fa-twitter"></i>&ensp;&ensp;&ensp;</a>
                    <a href="https://news.google.com/u/2/topstories?tab=kn&hl=es-419&gl=US&ceid=US:es-419" class="text-white"><i class="fab fa-google-plus"></i>&ensp;&ensp;&ensp;</a>
                    <a href="https://www.linkedin.com/in/gidi-repositorio-586810238" class="text-white"><i class="fab fa-linkedin"></i>&ensp;&ensp;&ensp;</a>
                    <a href="https://www.youtube.com/channel/UCFM3wk4nadYpRQ2zyxdCPpw" class="text-white"><i class="fab fa-youtube"></i>&ensp;&ensp;&ensp;</a>
                </div>
            </nav>
        </div>