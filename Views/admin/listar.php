<?php encabezado() ?>
<div id="layoutSidenav_content">
      <main>
        <div class="container-fluid">
        <div class="col-md-12 p-2">
        <p></p>
        
          <center><span class="badge badge-success"><h2> Escritorio principal </h2></span></center>
        
          <br>
          <ol class="breadcrumb mb-4">
          <center><li style= "text-align:center" class="breadcrumb-item active">¡Sea bienvenido/a a una nueva experiencia para la gestión documental totalmente en línea conocido como GIDI! ¡Muchas gracias por tu visita, lo apreciamos mucho!</li></center>
          </ol>
          <div class="row">
            <div class="col-xl-3 col-md-6">
              <div class="card bg-primary text-white mb-4">
                <div class="card-body">Conocer acerca del sistema informático GIDI</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                  <a class="small text-white stretched-link" href="https://drive.google.com/file/d/18dDwb2lT_UenSd2VQSmh-00aiiTmx0rj/view?usp=sharing" target="_blank">Más detalles</a>
                  <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card bg-warning text-white mb-4">
                <div class="card-body">Información acerca de repositorios institucionales</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                  <a class="small text-white stretched-link" href="https://sites.google.com/site/portafoliogydc/home/repositorios-institucionales#TOC-Definici-n" target="_blank">Más detalles</a>
                  <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card bg-danger text-white mb-4">
                <div class="card-body">Acerca del Departamento de Investigación</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                  <a class="small text-white stretched-link" href="http://direccioninvestigacionutelvt.com" target="_blank">Más detalles</a>
                  <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card bg-secondary text-white mb-4">
                <div class="card-body">Recibir información de GIDI - Sección de Noticias</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                  <a class="small text-white stretched-link" href="http://localhost/biblioteca/Views/index.html" target="_blank">Más detalles</a>
                  <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
              </div>
            </div>
          </div>
          
          <center><h1><span class="badge badge-info"><h2>Información de conocimiento general</h2></span></h1></center>
         
          <br>
          <div class="row">
            <div class="col-xl-6">
              <div class="card mb-4">
                <div class="card-header">
                  <i class="fas fa-chart-area mr-1"></i>
                  Gráfico de área de aprobación de repositorios
                </div>
                <div class="card-body"><canvas id="myAreaChart" width="100%" height="25"></canvas></div>
              </div>
            </div>
            <div class="col-xl-6">
              <div class="card mb-4">
                <div class="card-header">
                  <i class="fas fa-chart-bar mr-1"></i>
                  Gráfico de barras de aprobación de repositorios
                </div>
                <div class="card-body"><canvas id="myBarChart" width="100%" height="25"></canvas></div>
              </div>
            </div>
          </div>
          <div class="card mb-4">
            <div class="card-header">
              <i class="fas fa-table mr-1"></i>
              Tabla de repositorios institucionales
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    
                  <thead>
                    <tr>
                      <th><center>Nombre</center></th>
                      <th><center>Universidad</center></th>
                      <th><center>Ubicación</center></th>
                      <th><center>Años de uso</center></th>
                      <th><center>Fecha de inicio de uso</center></th>
                      <th><center>Porcentaje de aceptación</center></th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                    <th><center>Nombre</center></th>
                      <th><center>Universidad</center></th>
                      <th><center>Ubicación</center></th>
                      <th><center>Años de uso</center></th>
                      <th><center>Fecha de inicio de uso</center></th>
                      <th><center>Porcentaje de aceptación</center></th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <tr>
                      <td align="center">Redalyc</td>
                      <td align="center">MTI</td>
                      <td align="center">Edinburgh</td>
                      <td align="center">18</td>
                      <td align="center">2004/04/25</td>
                      <td align="center">90%</td>
                    </tr>
                    <tr>
                      <td align="center">REMERI</td>
                      <td align="center">eCornell</td>
                      <td align="center">Tokyo</td>
                      <td align="center">17</td>
                      <td align="center">2004/07/25</td>
                      <td align="center">92%</td>
                    </tr>
                    <tr>
                      <td align="center">UNAM</td>
                      <td align="center">InterContinental University</td>
                      <td align="center">Estados Unidos</td>
                      <td align="center">19</td>
                      <td align="center">2003/01/12</td>
                      <td align="center">90%</td>
                    </tr>
                    <tr>
                      <td align="center">UNRUZ</td>
                      <td align="center">Atlantic International University</td>
                      <td align="center">Edinburgh</td>
                      <td align="center">18</td>
                      <td align="center">2004/03/29</td>
                      <td align="center">85%</td>
                    </tr>
                    <tr>
                      <td align="center">UANL</td>
                      <td align="center">Pacific University</td>
                      <td align="center">Tokyo</td>
                      <td align="center">20</td>
                      <td align="center">2001/11/28</td>
                      <td align="center">88%</td>
                    </tr>
                    <tr>
                      <td align="center">U.Papers</td>
                      <td align="center">Breyer State University</td>
                      <td align="center">Estados Unidos</td>
                      <td align="center">20</td>
                      <td align="center">2001/12/02</td>
                      <td align="center">87%</td>
                    </tr>
                    <tr>
                      <td align="center">PubMed</td>
                      <td align="center">Barry University</td>
                      <td align="center">Canadá</td>
                      <td align="center">21</td>
                      <td align="center">2000/08/06</td>
                      <td align="center">91%</td>
                    </tr>
                    <tr>
                      <td align="center">Research Papers</td>
                      <td align="center">Bastyr University</td>
                      <td align="center">Tokyo</td>
                      <td align="center">16</td>
                      <td align="center">2005/10/14</td>
                      <td align="center">95%</td>
                    </tr>
                    <tr>
                      <td align="center">DIALNET</td>
                      <td align="center">Universitat Abat Oliba CEU</td>
                      <td align="center">España</td>
                      <td align="center">21</td>
                      <td align="center">2000/09/15</td>
                      <td align="center">95%</td>
                    </tr>
                    <tr>
                      <td align="center">Gallica</td>
                      <td align="center">Universidad Alfonso X</td>
                      <td align="center">España</td>
                      <td align="center">19</td>
                      <td align="center">2002/12/13</td>
                      <td align="center">89%</td>
                    </tr>
                    <tr>
                      <td align="center">Gaines</td>
                      <td align="center">Aliant Internacional University</td>
                      <td align="center">London</td>
                      <td align="center">20</td>
                      <td align="center">2001/12/19</td>
                      <td align="center">89%</td>
                    </tr>
                    <tr>
                      <td align="center">Bibliotheque</td>
                      <td align="center">American University</td>
                      <td align="center">Edinburgh</td>
                      <td align="center">21</td>
                      <td align="center">2001/03/03</td>
                      <td align="center">90%</td>
                    </tr>
                    <tr>
                      <td align="center">Charde</td>
                      <td align="center">Bastyr University</td>
                      <td align="center">Estados Unidos</td>
                      <td align="center">21</td>
                      <td align="center">2001/10/16</td>
                      <td align="center">87%</td>
                    </tr>
                    <tr>
                      <td align="center">Haley</td>
                      <td align="center">Alabama A&M University</td>
                      <td align="center">Estados Unidos</td>
                      <td align="center">16</td>
                      <td align="center">2005/12/18</td>
                      <td align="center">89%</td>
                    </tr>
                    <tr>
                      <td align="center">CFO</td>
                      <td align="center">Bircham International University</td>
                      <td align="center">London</td>
                      <td align="center">15</td>
                      <td align="center">2007/03/17</td>
                      <td align="center">88%</td>
                    </tr>
                  </tbody>

                </table>
              </div>
            </div>
          </div>
        </div>
      </main>
      <footer class="py-4 bg-light mt-auto">
        <div class="container-fluid">
          <div class="d-flex align-items-center justify-content-between small">
            <div class="text-muted">Copyright &copy; GIDI</div>
            <div>
                <div class="text-muted">Versión 4.5.0</div>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
  <script src="<?php echo base_url(); ?>Views/demo/chart-area-demo.js"></script>
  <script src="<?php echo base_url(); ?>Views/demo/chart-bar-demo.js"></script>

<?php pie() ?>
