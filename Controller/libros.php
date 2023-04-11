<?php
    class libros extends Controllers{
        public function __construct()
        {
        session_start();
        if (empty($_SESSION['activo'])) {
            header("location: " . base_url());
        }
            parent::__construct();

        }
        public function libros()
        {
            $libro = $this->model->selectlibro();
            $materias = $this->model->selectMateria();
            $editorial = $this->model->selectEditorial();
            $autor = $this->model->selectAutor();
            $data = ['libros' => $libro, 'materias' => $materias, 'editoriales' => $editorial, 'autores' => $autor];
            $this->views->getView($this, "listar", $data);
        }
        public function registrar()
        {

            $titulo = $_POST['titulo'];
            $cantidad = $_POST['cantidad'];
            $autor = $_POST['autor'];
            $editorial = $_POST['editorial'];
            $anio_edicion = $_POST['anio_edicion'];
            $anio_acepta = $_POST['anio_acepta'];
            $editorial = $_POST['editorial'];
            $materia = $_POST['materia'];
            $num_pagina = $_POST['num_pagina'];
            $descripcion = $_POST['descripcion'];
            $enlace = $_POST['enlace'];
            $img = $_FILES['imagen'];
            $imgName = $img['name'];
            $nombreTemp = $img['tmp_name'];
            $fecha = md5(date("Y-m-d h:i:s")) ."_". $imgName;
            $destino = "Assets/images/libros/" . $fecha;
            if ($imgName == null || $imgName == "") {
                $insert = $this->model->insertarlibro($titulo, $cantidad, $autor, $editorial, $anio_edicion, $anio_acepta, $materia, $num_pagina, $descripcion, $enlace, $imgName);
            }else{
                $insert = $this->model->insertarlibro($titulo, $cantidad, $autor ,$editorial, $anio_edicion, $anio_acepta, $materia, $num_pagina, $descripcion, $enlace, $fecha);
                if ($insert) {
                    move_uploaded_file($nombreTemp, $destino);
                }
            }
            header("location: " . base_url() . "libros");
            die();
        }
        public function editar()
        {
            $id = $_GET['id'];
            $materias = $this->model->selectMateria();
            $editorial = $this->model->selectEditorial();
            $autor = $this->model->selectAutor();
            $libro = $this->model->editlibro($id);
            $data = ['materias' => $materias, 'editoriales' => $editorial, 'autores' => $autor, 'libro' => $libro];
            if ($data == 0) {
                $this->libros();
            } else {
                $this->views->getView($this, "editar", $data);
            }
        }
        public function modificar()
        {
            $id = $_POST['id'];
            $titulo = $_POST['titulo'];
            $cantidad = $_POST['cantidad'];
            $autor = $_POST['autor'];
            $editorial = $_POST['editorial'];
            $anio_edicion = $_POST['anio_edicion'];
            $anio_acepta = $_POST['anio_acepta'];
            $editorial = $_POST['editorial'];
            $materia = $_POST['materia'];
            $num_pagina = $_POST['num_pagina'];
            $descripcion = $_POST['descripcion'];
            $enlace = $_POST['enlace'];
            $img = $_FILES['imagen'];
            $imgName = $img['name'];
            $nombreTemp = $img['tmp_name'];
            $fecha = md5(date("Y-m-d h:i:s")) . "_" . $imgName;
            $destino = "Assets/images/libros/".$fecha;
            $imgAntigua = $_POST['foto'];
            if ($imgName == null || $imgName == "") {
                $actualizar = $this->model->actualizarlibro($titulo, $cantidad, $autor ,$editorial, $anio_edicion, $anio_acepta, $materia, $num_pagina, $descripcion, $enlace, $imgAntigua, $id);
            } else {
                $actualizar = $this->model->actualizarlibro($titulo, $cantidad, $autor ,$editorial, $anio_edicion, $anio_acepta, $materia, $num_pagina, $descripcion, $enlace, $fecha, $id);
                if ($actualizar) {
                    move_uploaded_file($nombreTemp, $destino);
                    if ($imgAntigua != "") {
                        unlink("Assets/images/libros/" . $imgAntigua);
                    }
                }
            }
            header("location: " . base_url() . "libros");
            die();
        }
        public function eliminar()
        {
            $id = $_POST['id'];
            $this->model->estadolibro(0, $id);
            header("location: " . base_url() . "libros");
            die();
        }
        public function reingresar()
        {
            $id = $_POST['id'];
            $this->model->estadolibro(1, $id);
            header("location: " . base_url() . "libros");
            die();
        }
        public function eliminar1()
        {
            $id = $_GET['id'];
            $this->model->eliminarlibro($id);
            header("location: " . base_url() . "libros");
            die();
        }  

        public function pdf()
        {
            $datos = $this->model->selectDatos();
            $libros = $this->model->selectlibro();
            require_once 'Libraries/pdf/fpdf.php';
            $pdf = new FPDF('L', 'mm', 'letter');
           /*  $pdf=new FPDF('P', 'mm', '300, 200'); */
            $pdf->AddPage();
            $pdf->SetMargins(10, 10, 10);
            $pdf->SetTitle("Publicaciones");
            $pdf->SetFont('Arial', 'B', 13);
            $pdf->Cell(255, 5, utf8_decode($datos['nombre']), 0, 1, 'C');
            $pdf->image(base_url() . "/Assets/img/logo.jpg", 243, 6, 30, 30, 'JPG');
            $pdf->SetFont('Arial', 'B', 10);
            $pdf->Cell(20, 5, utf8_decode("Teléfono: "), 0, 0, 'L');
            $pdf->SetFont('Arial', '', 10);
            $pdf->Cell(20, 5, $datos['telefono'], 0, 1, 'L');
            $pdf->SetFont('Arial', 'B', 10);
            $pdf->Cell(20, 5, utf8_decode("Dirección: "), 0, 0, 'L');
            $pdf->SetFont('Arial', '', 10);
            $pdf->Cell(20, 5, utf8_decode($datos['direccion']), 0, 1, 'L');
            $pdf->SetFont('Arial', 'B', 10);
            $pdf->Cell(20, 5, "Correo: ", 0, 0, 'L');
            $pdf->SetFont('Arial', '', 10);
            $pdf->Cell(20, 5, utf8_decode($datos['correo']), 0, 1, 'L');
            $pdf->Ln();
            $pdf->SetFillColor(0, 0, 0);
            $pdf->SetTextColor(255, 255, 255);
            $pdf->Cell(262, 5, "REPORTE DE PUBLICACIONES POR AUTOR/ES", 1, 1, 'C', 1);
            $pdf->SetTextColor(0, 0, 0);
            $pdf->SetFont('Arial', 'B', 10);
            $pdf->Cell(11, 5, utf8_decode('   N°'), 1, 0, 'L');
            $pdf->SetFont('Arial', 'B', 10);
            $pdf->Cell(145, 5, utf8_decode('                                                                     Título'), 1, 0, 'L');
            $pdf->SetFont('Arial', 'B', 10);
            $pdf->Cell(37, 5, utf8_decode('         Categoría'), 1, 0, 'L');
            $pdf->SetFont('Arial', 'B', 10);
            $pdf->Cell(15, 5, utf8_decode('Código'), 1, 0, 'L');
            $pdf->SetFont('Arial', 'B', 10);
            $pdf->Cell(54, 5, '                    Autor/es', 1, 1, 'L');
            $pdf->SetFont('Arial', '', 10);
            $contador = 1;
        foreach ($libros as $row) {
            $pdf->Cell(11, 10, $contador, 1, 0, 'L');
            $pdf->Cell(145, 10, utf8_decode($row['titulo']), 1, 0, 'L');
            $pdf->Cell(37, 10, utf8_decode($row['materia']), 1, 0, 'L');
            $pdf->Cell(15, 10, utf8_decode($row['cantidad']), 1, 0, 'L');
            $pdf->Cell(54, 10, utf8_decode($row['autor']), 1, 1, 'L');
            $contador++;
            }
            $pdf->Output("Publicaciones.pdf", "I");
        }
        public function pdf2()
        {
            $datos = $this->model->selectDatos();
            $libros = $this->model->selectlibro();
            require_once 'Libraries/pdf/fpdf.php';
            $pdf = new FPDF('L', 'mm', 'letter');
           /*  $pdf=new FPDF('P', 'mm', '300, 200'); */
            $pdf->AddPage();
            $pdf->SetMargins(10, 10, 10);
            $pdf->SetTitle("Publicaciones");
            $pdf->SetFont('Arial', 'B', 13);
            $pdf->Cell(255, 5, utf8_decode($datos['nombre']), 0, 1, 'C');
            $pdf->image(base_url() . "/Assets/img/logo.jpg", 243, 6, 30, 30, 'JPG');
            $pdf->SetFont('Arial', 'B', 10);
            $pdf->Cell(20, 5, utf8_decode("Teléfono: "), 0, 0, 'L');
            $pdf->SetFont('Arial', '', 10);
            $pdf->Cell(20, 5, $datos['telefono'], 0, 1, 'L');
            $pdf->SetFont('Arial', 'B', 10);
            $pdf->Cell(20, 5, utf8_decode("Dirección: "), 0, 0, 'L');
            $pdf->SetFont('Arial', '', 10);
            $pdf->Cell(20, 5, utf8_decode($datos['direccion']), 0, 1, 'L');
            $pdf->SetFont('Arial', 'B', 10);
            $pdf->Cell(20, 5, "Correo: ", 0, 0, 'L');
            $pdf->SetFont('Arial', '', 10);
            $pdf->Cell(20, 5, utf8_decode($datos['correo']), 0, 1, 'L');
            $pdf->Ln();
            $pdf->SetFillColor(0, 0, 0);
            $pdf->SetTextColor(255, 255, 255);
            $pdf->Cell(262, 5, "REPORTE POR PUBLICACIONES", 1, 1, 'C', 1);
            $pdf->SetTextColor(0, 0, 0);
            $pdf->SetFont('Arial', 'B', 10);
            $pdf->Cell(11, 5, utf8_decode('   N°'), 1, 0, 'L');
            $pdf->SetFont('Arial', 'B', 10);
            $pdf->Cell(145, 5, utf8_decode('                                                                     Título'), 1, 0, 'L');
            $pdf->SetFont('Arial', 'B', 10);
            $pdf->Cell(30, 5, utf8_decode('      Categoría'), 1, 0, 'L');
            $pdf->SetFont('Arial', 'B', 10);
            $pdf->Cell(37, 5, utf8_decode('Fecha de aceptación'), 1, 0, 'L');
            $pdf->SetFont('Arial', 'B', 10);
            $pdf->Cell(39, 5, utf8_decode('Fecha de publicación'), 1, 1, 'L');
            $pdf->SetFont('Arial', '', 10);
            $contador = 1;
        foreach ($libros as $row) {
            $pdf->Cell(11, 10, $contador, 1, 0, 'L');
            $pdf->Cell(145, 10, utf8_decode($row['titulo']), 1, 0, 'L');
            $pdf->Cell(30, 10, utf8_decode($row['materia']), 1, 0, 'L');
            $pdf->Cell(37, 10, utf8_decode($row['anio_acepta']), 1, 0, 'L');
            $pdf->Cell(39, 10, utf8_decode($row['anio_edicion']), 1, 1, 'L');
            $contador++;
            }
            $pdf->Output("Publicaciones.pdf", "I");
        }
        public function pdf3()
        {
            $datos = $this->model->selectDatos();
            $libros = $this->model->selectlibro();
            require_once 'Libraries/pdf/fpdf.php';
            $pdf = new FPDF('L', 'mm', 'letter');
           /*  $pdf=new FPDF('P', 'mm', '300, 200'); */
            $pdf->AddPage();
            $pdf->SetMargins(10, 10, 10);
            $pdf->SetTitle("Publicaciones");
            $pdf->SetFont('Arial', 'B', 13);
            $pdf->Cell(255, 5, utf8_decode($datos['nombre']), 0, 1, 'C');
            $pdf->image(base_url() . "/Assets/img/logo.jpg", 243, 6, 30, 30, 'JPG');
            $pdf->SetFont('Arial', 'B', 10);
            $pdf->Cell(20, 5, utf8_decode("Teléfono: "), 0, 0, 'L');
            $pdf->SetFont('Arial', '', 10);
            $pdf->Cell(20, 5, $datos['telefono'], 0, 1, 'L');
            $pdf->SetFont('Arial', 'B', 10);
            $pdf->Cell(20, 5, utf8_decode("Dirección: "), 0, 0, 'L');
            $pdf->SetFont('Arial', '', 10);
            $pdf->Cell(20, 5, utf8_decode($datos['direccion']), 0, 1, 'L');
            $pdf->SetFont('Arial', 'B', 10);
            $pdf->Cell(20, 5, "Correo: ", 0, 0, 'L');
            $pdf->SetFont('Arial', '', 10);
            $pdf->Cell(20, 5, utf8_decode($datos['correo']), 0, 1, 'L');
            $pdf->Ln();
            $pdf->SetFillColor(0, 0, 0);
            $pdf->SetTextColor(255, 255, 255);
            $pdf->Cell(265, 5, utf8_decode('REPORTE DE PUBLICACIONES POR ÁREAS DE TRABAJO Y FECHA DE PUBLICACIÓN'), 1, 1, 'C', 1);
            $pdf->SetTextColor(0, 0, 0);
            $pdf->SetFont('Arial', 'B', 10);
            $pdf->Cell(11, 5, utf8_decode('   N°'), 1, 0, 'L');
            $pdf->SetFont('Arial', 'B', 10);
            $pdf->Cell(140, 5, utf8_decode('                                                                     Título'), 1, 0, 'L');
            $pdf->SetFont('Arial', 'B', 10);
            $pdf->Cell(75, 5, utf8_decode('                         Área de trabajo'), 1, 0, 'L');
            $pdf->SetFont('Arial', 'B', 10);
            $pdf->Cell(39, 5, utf8_decode('Fecha de publicación'), 1, 1, 'L');
            $pdf->SetFont('Arial', '', 10);
            $contador = 1;
        foreach ($libros as $row) {
            $pdf->Cell(11, 10, $contador, 1, 0, 'L');
            $pdf->Cell(140, 10, utf8_decode($row['titulo']), 1, 0, 'L');
            $pdf->Cell(75, 10, utf8_decode($row['editorial']), 1, 0, 'L');
            $pdf->Cell(39, 10, utf8_decode($row['anio_edicion']), 1, 1, 'L');
            $contador++;
            }
            $pdf->Output("Publicaciones.pdf", "I");
        } 
}
