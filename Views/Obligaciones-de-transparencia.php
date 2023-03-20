<?php
   require_once  '../php/PHPExcel.php';
   $archivo = "../Adjuntos/Filosofia Organizacional SOSAPAT/Directorio Servidores Públicos.xlsx";
   $archivo1 = "../Adjuntos/Filosofia Organizacional SOSAPAT/A77FVIII_primer_trim_2022.xlsx";
   $archivo2 = "../Adjuntos/Filosofia Organizacional SOSAPAT/A77FVIII_segundo_trim_2022.xlsx";
   
   $inputFileType = PHPExcel_IOFactory::identify($archivo);
   $objReader = PHPExcel_IOFactory::createReader($inputFileType);
   $objPHPExcel = $objReader->load($archivo);
   $sheet = $objPHPExcel->getSheet(0); 
   $highestRow = $sheet->getHighestRow(); 
   $highestColumn = $sheet->getHighestColumn();

   $inputFileType1 = PHPExcel_IOFactory::identify($archivo1);
   $objReader1 = PHPExcel_IOFactory::createReader($inputFileType1);
   $objPHPExcel1 = $objReader1->load($archivo1);
   $sheet1 = $objPHPExcel1->getSheet(0); 
   $highestRow1 = $sheet1->getHighestRow(); 
   $highestColumn1 = $sheet1->getHighestColumn();

   $inputFileType2 = PHPExcel_IOFactory::identify($archivo2);
   $objReader2 = PHPExcel_IOFactory::createReader($inputFileType2);
   $objPHPExcel2 = $objReader2->load($archivo2);
   $sheet2 = $objPHPExcel2->getSheet(0); 
   $highestRow2 = $sheet2->getHighestRow(); 
   $highestColumn2 = $sheet2->getHighestColumn();
?>
<!DOCTYPE html>
<html style="font-size: 16px;" lang="es"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Transparencia</title>
    <link rel="stylesheet" href="/nicepage.css" media="screen">
<link rel="stylesheet" href="/styles/Transparencia.css" media="screen">
    <script class="u-script" type="text/javascript" src="/js/jquery.js" "="" defer=""></script>
    <script class="u-script" type="text/javascript" src="/nicepage.js" "="" defer=""></script>
    
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="/styles/fraciones.css">
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/jquery-3.3.1.min.js"></script>
    <script src="/js/jquery-ui.min.js"></script>
    <script src="/js/actions.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "sosapat",
		"logo": "/images/img2-removebg-preview.png",
		"sameAs": [
				"https://www.facebook.com/SosapaTepeaca/",
				"https://twitter.com/sosapatepeaca?lang=es",
				"https://www.instagram.com/sosapatepeaca/?hl=es"
		]
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta name="twitter:site" content="@">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Transparencia">
    <meta name="twitter:description" content="sosapat">
    <meta property="og:title" content="Transparencia">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
    
  </head>
  <body class="u-body u-xl-mode" data-lang="es">
  <header class="u-clearfix u-header u-white u-header" id="sec-1ea1"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="/" class="u-image u-logo u-opacity u-opacity-95 u-image-1" data-image-width="1130" data-image-height="221">
          <img src="/images/img2-removebg-preview.png" class="u-logo-image u-logo-image-1">
        </a>
        <nav class="u-menu u-menu-mega u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px; font-weight: 700;">
            <a class="u-button-style u-custom-active-border-color u-custom-active-color u-custom-border u-custom-border-color u-custom-borders u-custom-hover-border-color u-custom-hover-color u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-text-decoration u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-spacing-20 u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-active-white u-border-4 u-border-active-palette-1-base u-border-hover-grey-30 u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-40 u-text-hover-custom-color-3" href="/Views/" style="padding: 15px 5px;">Inicio</a>
</li><li class="u-nav-item"><a class="u-active-white u-border-4 u-border-active-palette-1-base u-border-hover-grey-30 u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-40 u-text-hover-custom-color-3" href="/Views/Quienes-somos.php" style="padding: 15px 5px;">Quienes Somos</a>
</li><li class="u-nav-item"><a class="u-active-white u-border-4 u-border-active-palette-1-base u-border-hover-grey-30 u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-40 u-text-hover-custom-color-3" href="/Views/Contacto.php" style="padding: 15px 5px;">Contacto</a>
</li><li class="u-nav-item"><a class="u-active-white u-border-4 u-border-active-palette-1-base u-border-hover-grey-30 u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-40 u-text-hover-custom-color-3" href="/Views/Transparencia.php" style="padding: 15px 5px;">Transparencia</a>
</li><li class="u-nav-item"><a class="u-active-white u-border-4 u-border-active-palette-1-base u-border-hover-grey-30 u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-40 u-text-hover-custom-color-3" style="padding: 15px 5px;">Galeria</a>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="/Views/">Inicio</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="/Views/Quienes-somos.php">Quienes Somos</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="/Views/Contacto.php">Contacto</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="/Views/Transparencia.php">Transparencia</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link">Galeria</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div>
    </header> 
    <section class="u-align-center u-clearfix u-gradient u-section-1" id="carousel_f9e6">
      <div class="u-clearfix u-sheet u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-sheet-1">
        <img class="u-image u-image-default u-image-1" src="/images/img2-removebg-preview.png" alt="" data-image-width="1130" data-image-height="221">
        <div class="u-border-6 u-border-palette-1-base u-line u-line-horizontal u-line-1"></div>
        <h5 class="u-text u-text-grey-5 u-text-1">SISTEMA OPERADOR DE LOS SERVICIOS DE AGUA POTABLE&nbsp;<br>Y ALCANTARILLADO D​EL MUNICIPIO DE TEPEACA
        </h5>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-typography-Normal--Introduction u-white u-section-2" src="" id="carousel_8b49">
      <div class="u-clearfix u-sheet ">
        <!--<div class="u-border-6 u-border-palette-1-base u-line u-line-horizontal u-line-1"></div>
        <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-gutter-0 u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-layout-cell u-size-60 u-layout-cell-1">
                <div class="u-container-layout u-container-layout-1">
                  <div class="u-border-2 u-border-palette-1-dark-1 u-container-style u-group u-radius-13 u-shape-round u-white u-group-1">
                    <div class="u-container-layout u-container-layout-2">
                      <img class="u-image u-image-default u-preserve-proportions u-image-1" src="/images/GOTASOSA.png" alt="" data-image-width="598" data-image-height="598">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>-->
        <h2 class="u-text u-text-default u-text-1">Obligaciones de Transparencia</h2>
        <p class="u-align-center u-text u-text-black u-text-2"> 
        El derecho de acceso a la información pública se interpretará
conforme al texto y al espíritu de las disposiciones contenidas en la
Constitución Política de los Estados Unidos Mexicanos, la
Constitución Política del Estado Libre y Soberano de Puebla, la
Declaración Universal de los Derechos Humanos, el Pacto
Internacional de Derechos Civiles y Políticos, la Convención
Americana sobre Derechos Humanos, y demás instrumentos
internacionales suscritos y ratificados por el Estado Mexicano, así
como a las resoluciones y sentencias vinculantes que emitan los
órganos nacionales e internacionales especializados, favoreciendo en
todo tiempo a las personas la protección más amplia.
<br>
El cual todo ente fiscalizado, debera mantener publica y accesible  la infomracion segun lo establesen las
Obligaciones de Transparencia de acuerdo al Articulo 77 de la Ley de Transparencia y Acceso a la Información Publica del Estado de Puebla.
</p>

      </div>
     
    </section>
    <br>
    <br>
    <div class="container ">
      <section>
        <table class="card-body ">
          <tr>
            <th>
              <div class="card ">
                  <div class="card text-center">
                    <div class="card-header">
                      FRACCIÓN I
                    </div>
                    <div class="card-body">
                      <h5 class="card-title" id="marco">Marco Normativo</h5>
                      <!--<a href="#" class="u-image u-logo u-opacity u-opacity-95 mx-auto " >
                        <img id="frac1" src="https://cdn-icons-png.flaticon.com/512/201/201568.png" class="u-logo-image u-logo-image-1">
                      </a>-->
                    </div>
                    <div class="card-footer text-muted">
                      <a href="/Views/Marco-Normativo.php" target="_blank">Ver Información</a>
                    </div>
                  </div>
              </div>
            </th>
            <th>
              <div class="card ">
                  <div class="card text-center">
                    <div class="card-header">
                      FRACCIÓN II
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Estructura Organica</h5>
                     <!-- <a href="#" class="u-image u-logo u-opacity u-opacity-95 mx-auto " >
                        <img id="frac1" src="https://cdn-icons-png.flaticon.com/512/201/201568.png" class="u-logo-image u-logo-image-1">
                      </a>-->
                    </div>
                    <div class="card-footer text-muted">
                     <select name="organigrama" id="organigrama">
                      <option value="" selected>Seleccione</option>
                      <option value="1">Estructura Organica</option>n 
                      <option value="2">Organigrama</option>n  
                     </select>
                    </div>
                  </div>
              </div>
            <th>
              <div class="card ">
                  <div class="card text-center">
                    <div class="card-header">
                      FRACCIÓN III
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Facultades de Cada Area</h5>
                      <!--<a href="#" class="u-image u-logo u-opacity u-opacity-95 mx-auto " >
                        <img id="frac1" src="https://cdn-icons-png.flaticon.com/512/201/201568.png" class="u-logo-image u-logo-image-1">
                      </a>-->
                    </div>
                    <div class="card-footer text-muted">
                      <a href="/adjuntos/Filosofia Organizacional SOSAPAT/Manual de organización.pdf" target="_blank">Ver informacion</a>
                    </div>
                  </div>
              </div>
            </th>
            <th>
            <div class="card ">
                  <div class="card text-center">
                    <div class="card-header">
                      FRACCIÓN IV
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Metas y Objetivos de Cada Área</h5>
                      <!--<a href="#" class="u-image u-logo u-opacity u-opacity-95 mx-auto " >
                        <img id="frac1" src="https://cdn-icons-png.flaticon.com/512/201/201568.png" class="u-logo-image u-logo-image-1">
                      </a>-->
                    </div>
                    <div class="card-footer text-muted">
                      Ver
                    </div>
                  </div>
              </div>
            </th>
          </tr>
          <tr>
            <th>
            <div class="card ">
                  <div class="card text-center">
                    <div class="card-header">
                      FRACCIÓN V
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Temas de Interes Público</h5>
                      <!--<a href="#" class="u-image u-logo u-opacity u-opacity-95 mx-auto " >
                        <img id="frac1" src="https://cdn-icons-png.flaticon.com/512/201/201568.png" class="u-logo-image u-logo-image-1">
                      </a>-->
                    </div>
                    <div class="card-footer text-muted">
                      Ver
                    </div>
                  </div>
              </div>
            </th>
            <th>
            <div class="card ">
                  <div class="card text-center">
                    <div class="card-header">
                      FRACCIÓN VI
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Indicadores y Resultados</h5>
                      <!--<a href="#" class="u-image u-logo u-opacity u-opacity-95 mx-auto " >
                        <img id="frac1" src="https://cdn-icons-png.flaticon.com/512/201/201568.png" class="u-logo-image u-logo-image-1">
                      </a>-->
                    </div>
                    <div class="card-footer text-muted">
                    <a href="#" data-toggle="modal" data-target="#indicResul">Ver Información</as>

                        <!-- Modal -->
                        <div class="modal fade bd-example-modal-lg" id="indicResul" tabindex="-1" role="dialog" aria-labelledby="indicResulTitle" aria-hidden="true">
                          <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
                            <div class="modal-content">
                              <div class="modal-header" style="background-color:rgb(197, 184, 101);">
                                <h5 class="modal-title" id="indicResulTitle">Indicadores y Resultados</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button> 
                              </div>
                              <div class="modal-body">
                                  <ul>
                                    <li><a href="/Adjuntos/docsSOSAPAT/PROGRAMAS PRESUPUESTARIOS 2019, 2020 Y 2021.pdf" target="_blank">PROGRAMAS PRESUPUESTARIOS 2019, 2020 Y 2021</a></li>
                                    <li><a href="/Adjuntos/docsSOSAPAT/EVALUACION A LOS PROGRAMAS PRESUPUESTARIOS 2021.pdf" target="_blank">EVALUACIÓN A LOS PROGRAMAS PRESUPUESTARIOS 2021</a></li>
                                    <li><a href="/Adjuntos/docsSOSAPAT/Cumplimiento al programa presupuestario 2021.pdf" target="_blank">INFORME DE CUMPLIMIENTO A LOS PROGRAMAS PRESUPUESTARIOS 2021</a></li>
                                    <li><a href="/Adjuntos/docsSOSAPAT/CUMPLIMIENTO FINAL A PROGRAMAS PRESPUESTARIOS 2019 Y 2020.pdf" target="_blank">INFORME DE CUMPLIMIENTO A LOS PROGRAMAS PRESUPUESTARIOS 2019, 2020</a></li>
                                   
                                  </ul>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                <!--<button type="button" class="btn btn-primary">Save changes</button>-->
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                  </div>
              </div>
            </th>
            <th>
            <div class="card ">
                  <div class="card text-center">
                    <div class="card-header">
                      FRACCIÓN VII
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Integrantes del Sujeto Obligado</h5>
                      <!--<a href="#" class="u-image u-logo u-opacity u-opacity-95 mx-auto " >
                        <img id="frac1" src="https://cdn-icons-png.flaticon.com/512/201/201568.png" class="u-logo-image u-logo-image-1">
                      </a>-->
                    </div>
                    <div class="card-footer text-muted">
                    <a href="#" data-toggle="modal" data-target="#exampleModalScrollable">Ver Información</as>

                      <!-- Modal -->
                      <div class="modal fade bd-example-modal-lg" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalScrollableTitle">Integrantes del SOSAPAT</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                            <table class="table" style="text-align:center; font-size:small;">  
                                          <thead style="background-color:burlywood;">
                                                <tr>
                                                    <th>#</th>
                                                    <th>Nombre</th>
                                                    <th>Puesto</th>
                                                    <th>Correo de Contadto</th>
                                                </tr>                                                
                                           </thead>
                                           <tbody id="cuerpo">
                                                    <?php
                                                    $num=0;
                                                    $colsInMes1=12;
                                                    $colsFinMes1 = 52;

                                                    for ($row = $colsInMes1; $row <= $colsFinMes1; $row++){ 
                                                    $num++;
                                                    ?>
                                                        <tr>
                                                            <th scope='row'><?php echo $num;?></th>
                                                            <th><?php echo $sheet->getCell("B".$row)->getValue();?></th>
                                                            <th><?php echo $sheet->getCell("C".$row)->getValue();?></th>
                                                            <th><?php echo $sheet->getCell("D".$row)->getValue();?></th>

                                                            </tr>
                                                        <?php    
                                                    }

                                                    ?>
                                                    </tbody>
                                                </table> 
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                              <!--<button type="button" class="btn btn-primary">Save changes</button>-->
                            </div>
                          </div>
                        </div>
                      </div>
                          
                    </div>
                  </div>
              </div>
            </th>
            <th>
            <div class="card ">
                  <div class="card text-center">
                    <div class="card-header">
                      FRACCIÓN VIII
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Remuneración Mensual (Bruta y Neta)</h5>
                      <!--<a href="#" class="u-image u-logo u-opacity u-opacity-95 mx-auto " >
                        <img id="frac1" src="https://cdn-icons-png.flaticon.com/512/201/201568.png" class="u-logo-image u-logo-image-1">
                      </a>-->
                    </div>
                    <div class="card-footer text-muted">
                    <select name="sueldos" id="sueldos">
                      <option value="" selected>Seleccione</option>
                      <option value="1" data-toggle="modal" data-target="#modal1erTrimestre">1er Trimestre</option>
                      <option value="2" data-toggle="modal" data-target="#modal2doTrimestre">2do Trimestre</option>
                     </select>

                     
                        <!-- Modal -->
                        <div class="modal fade bd-example-modal-xl" id="modal1erTrimestre" tabindex="-1" role="dialog" aria-labelledby="modal1erTrimestreTitle" aria-hidden="true">
                        <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="modal1erTrimestreTitle">Tabulador de sueldos 1er trimestre 2022</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                            <table class="table" style="text-align:center; font-size:small;">  
                                          <thead style="background-color:burlywood;">
                                                <tr>
                                                    <th>#</th>
                                                    <th>Ejercicio</th>
                                                    <th>Fecha de inicio del periodo que se informa</th>
                                                    <th>Fecha de término del periodo que se informa</th>
                                                    <th>Denominación o descripción del puesto</th>
                                                    <th>Nombre (s)</th>
                                                    <th>Primer apellido</th>
                                                    <th>Segundo apellido</th>
                                                    <th>Remuneración bruta</th>
                                                    <th>Remuneración neta</th>
                                                </tr>                                                
                                           </thead>
                                           <tbody id="cuerpo">
                                                    <?php
                                                    $num=0;
                                                    $colsInMes1=8;
                                                    $colsFinMes1 = 49;

                                                    for ($row = $colsInMes1; $row <= $colsFinMes1; $row++){ 
                                                    $num++;
                                                    ?>
                                                        <tr>
                                                            <th scope='row'><?php echo $num;?></th>
                                                            <th><?php echo $sheet1->getCell("A".$row)->getValue();?></th>
                                                            <th><?php echo $sheet1->getCell("B".$row)->getValue();?></th>
                                                            <th><?php echo $sheet1->getCell("C".$row)->getValue();?></th>
                                                            <th><?php echo $sheet1->getCell("F".$row)->getValue();?></th>
                                                            <th><?php echo $sheet1->getCell("I".$row)->getValue();?></th>
                                                            <th><?php echo $sheet1->getCell("J".$row)->getValue();?></th>
                                                            <th><?php echo $sheet1->getCell("K".$row)->getValue();?></th>
                                                            <th>$ <?php echo $sheet1->getCell("M".$row)->getValue();?></th>
                                                            <th>$ <?php echo $sheet1->getCell("O".$row)->getValue();?></th>
                                                            

                                                            </tr>
                                                        <?php    
                                                    }

                                                    ?>
                                                    </tbody>
                                                </table> 
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                              <!--<button type="button" class="btn btn-primary">Save changes</button>-->
                            </div>
                          </div>
                        </div>
                      </div>
                           <!-- Fin Modal -->
                              <!-- Modal -->
                     <div class="modal fade bd-example-modal-xl" id="modal2doTrimestre" tabindex="-1" role="dialog" aria-labelledby="modal2doTrimestreTitle" aria-hidden="true">
                        <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="modal2doTrimestreTitle">Tabulador de sueldos 2do trimestre 2022</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                            <table class="table" style="text-align:center; font-size:small;">  
                                          <thead style="background-color:burlywood;">
                                          <tr>
                                                    <th>#</th>
                                                    <th>Ejercicio</th>
                                                    <th>Fecha de inicio del periodo que se informa</th>
                                                    <th>Fecha de término del periodo que se informa</th>
                                                    <th>Denominación o descripción del puesto</th>
                                                    <th>Nombre (s)</th>
                                                    <th>Primer apellido</th>
                                                    <th>Segundo apellido</th>
                                                    <th>Remuneración bruta</th>
                                                    <th>Remuneración neta</th>
                                                </tr>                                                  
                                           </thead>
                                           <tbody id="cuerpo">
                                                    <?php
                                                    $num=0;
                                                    $colsInMes1=8;
                                                    $colsFinMes1 = 49;

                                                    for ($row = $colsInMes1; $row <= $colsFinMes1; $row++){ 
                                                    $num++;
                                                    ?>
                                                        <tr>
                                                            <th scope='row'><?php echo $num;?></th>
                                                            <th><?php echo $sheet2->getCell("A".$row)->getValue();?></th>
                                                            <th><?php echo $sheet2->getCell("B".$row)->getValue();?></th>
                                                            <th><?php echo $sheet2->getCell("C".$row)->getValue();?></th>
                                                            <th><?php echo $sheet2->getCell("F".$row)->getValue();?></th>
                                                            <th><?php echo $sheet2->getCell("I".$row)->getValue();?></th>
                                                            <th><?php echo $sheet2->getCell("J".$row)->getValue();?></th>
                                                            <th><?php echo $sheet2->getCell("K".$row)->getValue();?></th>
                                                            <th>$ <?php echo $sheet2->getCell("M".$row)->getValue();?></th>
                                                            <th>$ <?php echo $sheet2->getCell("O".$row)->getValue();?></th>
                                                            

                                                            </tr>
                                                        <?php    
                                                    }

                                                    ?>
                                                    </tbody>
                                                </table> 
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                              <!--<button type="button" class="btn btn-primary">Save changes</button>-->
                            </div>
                          </div>
                        </div>
                      </div>
                           <!-- Fin Modal -->
          
                    </div>
                  </div>
              </div>
            </th>
          </tr>
          <tr>
            <th>
            <div class="card ">
                  <div class="card text-center">
                    <div class="card-header">
                      FRACCIÓN IX
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Gastos de Representación y Viaticos</h5>
                      <!--<a href="#" class="u-image u-logo u-opacity u-opacity-95 mx-auto " >
                        <img id="frac1" src="https://cdn-icons-png.flaticon.com/512/201/201568.png" class="u-logo-image u-logo-image-1">
                      </a>-->
                    </div>
                    <div class="card-footer text-muted">
                      Ver
                    </div>
                  </div>
              </div>
            </th>
            <th>
            <div class="card ">
                  <div class="card text-center">
                    <div class="card-header">
                      FRACCIÓN X
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">No. Total de Plazas y Personal de Base y Confianza</h5>
                      <!--<a href="#" class="u-image u-logo u-opacity u-opacity-95 mx-auto " >
                        <img id="frac1" src="https://cdn-icons-png.flaticon.com/512/201/201568.png" class="u-logo-image u-logo-image-1">
                      </a>-->
                    </div>
                    <div class="card-footer text-muted">
                      Ver
                    </div>
                  </div>
              </div>
            </th>
            <th>
            <div class="card ">
                  <div class="card text-center">
                    <div class="card-header">
                      FRACCIÓN XI
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Contrataciones de Servicios Profecionales</h5>
                      <!--<a href="#" class="u-image u-logo u-opacity u-opacity-95 mx-auto " >
                        <img id="frac1" src="https://cdn-icons-png.flaticon.com/512/201/201568.png" class="u-logo-image u-logo-image-1">
                      </a>-->
                    </div>
                    <div class="card-footer text-muted">
                      Ver
                    </div>
                  </div>
              </div>
            </th>
            <th>
            <div class="card ">
                  <div class="card text-center">
                    <div class="card-header">
                      FRACCIÓN XII
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Declaraciones Patrimoniales de los Servidores Publicos</h5>
                      <!--<a href="#" class="u-image u-logo u-opacity u-opacity-95 mx-auto " >
                        <img id="frac1" src="https://cdn-icons-png.flaticon.com/512/201/201568.png" class="u-logo-image u-logo-image-1">
                      </a>-->
                    </div>
                    <div class="card-footer text-muted">
                      Ver
                    </div>
                  </div>
              </div>
            </th>
          </tr>
          <tr>
            <th>
            <div class="card">
                  <div class="card text-center">
                    <div class="card-header">
                      FRACCIÓN XIII
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Informacion de la Unidad de Transparencia</h5>
                      <!--<a href="#" class="u-image u-logo u-opacity u-opacity-95 mx-auto " >
                        <img id="frac1" src="https://cdn-icons-png.flaticon.com/512/201/201568.png" class="u-logo-image u-logo-image-1">
                      </a>-->
                    </div>
                    <div class="card-footer text-muted">
                      Ver
                    </div>
                  </div>
              </div>
            </th>
            <th>
            <div class="card ">
                  <div class="card text-center">
                    <div class="card-header">
                      FRACCIÓN XIV
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Convocatorias Para Ocupar Cargos Públicos</h5>
                      <!--<a href="#" class="u-image u-logo u-opacity u-opacity-95 mx-auto " >
                        <img id="frac1" src="https://cdn-icons-png.flaticon.com/512/201/201568.png" class="u-logo-image u-logo-image-1">
                      </a>-->
                    </div>
                    <div class="card-footer text-muted">
                      Ver
                    </div>
                  </div>
              </div>
            </th>
            <th>
            <div class="card ">
                  <div class="card text-center">
                    <div class="card-header">
                      FRACCIÓN XV
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Programas de Subcidios, Estímulos y Apoyos</h5>
                      <!--<a href="#" class="u-image u-logo u-opacity u-opacity-95 mx-auto " >
                        <img id="frac1" src="https://cdn-icons-png.flaticon.com/512/201/201568.png" class="u-logo-image u-logo-image-1">
                      </a>-->
                    </div>
                    <div class="card-footer text-muted">
                      Ver
                    </div>
                  </div>
              </div>
            </th>
            <th>
            <div class="card ">
                  <div class="card text-center">
                    <div class="card-header">
                      FRACCIÓN XVI
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Condiciones de Trabajo que Regulen la Relación Laboral</h5>
                      <!--<a href="#" class="u-image u-logo u-opacity u-opacity-95 mx-auto " >
                        <img id="frac1" src="https://cdn-icons-png.flaticon.com/512/201/201568.png" class="u-logo-image u-logo-image-1">
                      </a>-->
                    </div>
                    <div class="card-footer text-muted">
                      Ver
                    </div>
                  </div>
              </div>
            </th>
          </tr>
          <tr>
            <th>
            <div class="card ">
                  <div class="card text-center">
                    <div class="card-header">
                      FRACCIÓN XVII
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Información Curricular</h5>
                      <!--<a href="#" class="u-image u-logo u-opacity u-opacity-95 mx-auto " >
                        <img id="frac1" src="https://cdn-icons-png.flaticon.com/512/201/201568.png" class="u-logo-image u-logo-image-1">
                      </a>-->
                    </div>
                    <div class="card-footer text-muted">
                      Ver
                    </div>
                  </div>
              </div>
            </th>
            <th>
            <div class="card ">
                  <div class="card text-center">
                    <div class="card-header">
                      FRACCIÓN XVIII
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Listado de Servidores Públicos con Sanciones Administrativas</h5>
                      <!--<a href="#" class="u-image u-logo u-opacity u-opacity-95 mx-auto " >
                        <img id="frac1" src="https://cdn-icons-png.flaticon.com/512/201/201568.png" class="u-logo-image u-logo-image-1">
                      </a>-->
                    </div>
                    <div class="card-footer text-muted">
                      Ver
                    </div>
                  </div>
              </div>
            </th>
            <th>
            <div class="card ">
                  <div class="card text-center">
                    <div class="card-header">
                      FRACCIÓN XIX
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Servicios que Ofrece Señalando los Requisitos</h5>
                      <!--<a href="#" class="u-image u-logo u-opacity u-opacity-95 mx-auto " >
                        <img id="frac1" src="https://cdn-icons-png.flaticon.com/512/201/201568.png" class="u-logo-image u-logo-image-1">
                      </a>-->
                    </div>
                    <div class="card-footer text-muted">
                      Ver
                    </div>
                  </div>
              </div>
            </th>
            <th>
            <div class="card ">
                  <div class="card text-center">
                    <div class="card-header">
                      FRACCIÓN XX
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Tramites, Requisitos y Formatos que Ofrece</h5>
                      <!--<a href="#" class="u-image u-logo u-opacity u-opacity-95 mx-auto " >
                        <img id="frac1" src="https://cdn-icons-png.flaticon.com/512/201/201568.png" class="u-logo-image u-logo-image-1">
                      </a>-->
                    </div>
                    <div class="card-footer text-muted">
                      Ver
                    </div>
                  </div>
              </div>
            </th>
          </tr>
          <tr>
            <th>
            <div class="card ">
                  <div class="card text-center">
                    <div class="card-header">
                      FRACCIÓN XXI
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Información Financiera Sobre el Presupuesto Asignado</h5>
                      <!--<a href="#" class="u-image u-logo u-opacity u-opacity-95 mx-auto " >
                        <img id="frac1" src="https://cdn-icons-png.flaticon.com/512/201/201568.png" class="u-logo-image u-logo-image-1">
                      </a>-->
                    </div>
                    <div class="card-footer text-muted">
                      Ver
                    </div>
                  </div>
              </div>
            </th>
            <th>
            <div class="card ">
                  <div class="card text-center">
                    <div class="card-header">
                      FRACCIÓN XXII
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Información Relativa Sobre la Deuda Pública</h5>
                      <!--<a href="#" class="u-image u-logo u-opacity u-opacity-95 mx-auto " >
                        <img id="frac1" src="https://cdn-icons-png.flaticon.com/512/201/201568.png" class="u-logo-image u-logo-image-1">
                      </a>-->
                    </div>
                    <div class="card-footer text-muted">
                      Ver
                    </div>
                  </div>
              </div>
            </th>
            <th>
            <div class="card ">
                  <div class="card text-center">
                    <div class="card-header">
                      FRACCIÓN XXIII
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Montos Designados a Gastos Relativos</h5>
                      <!--<a href="#" class="u-image u-logo u-opacity u-opacity-95 mx-auto " >
                        <img id="frac1" src="https://cdn-icons-png.flaticon.com/512/201/201568.png" class="u-logo-image u-logo-image-1">
                      </a>-->
                    </div>
                    <div class="card-footer text-muted">
                      Ver
                    </div>
                  </div>
              </div>
            </th>
            <th>
            <div class="card ">
                  <div class="card text-center">
                    <div class="card-header">
                      FRACCIÓN XXIV
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Informes de Resultados de Auditorias</h5>
                      <!--<a href="#" class="u-image u-logo u-opacity u-opacity-95 mx-auto ">
                        <img id="frac1" src="https://cdn-icons-png.flaticon.com/512/201/201568.png" class="u-logo-image u-logo-image-1">
                      </a>-->
                    </div>
                    <div class="card-footer text-muted">
                      Ver
                    </div>
                  </div>
              </div>
            </th>
          </tr>
          <tr>
            <th>
            <div class="card ">
                  <div class="card text-center">
                    <div class="card-header">
                      FRACCIÓN XXV
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Resultados de la Dictaminación de los Estados Fiancieros</h5>
                      <!--<a href="#" class="u-image u-logo u-opacity u-opacity-95 mx-auto " >
                        <img id="frac1" src="https://cdn-icons-png.flaticon.com/512/201/201568.png" class="u-logo-image u-logo-image-1">
                      </a>-->
                    </div>
                    <div class="card-footer text-muted">
                      Ver
                    </div>
                  </div>
              </div>
            </th>
            <th>
            <div class="card ">
                  <div class="card text-center">
                    <div class="card-header">
                      FRACCIÓN XXVI
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Montos, Criterios, Convoatorias Y Listado de Personas Fisicas</h5>
                      <!--<a href="#" class="u-image u-logo u-opacity u-opacity-95 mx-auto " >
                        <img id="frac1" src="https://cdn-icons-png.flaticon.com/512/201/201568.png" class="u-logo-image u-logo-image-1">
                      </a>-->
                    </div>
                    <div class="card-footer text-muted">
                      Ver
                    </div>
                  </div>
              </div>
            </th>
            <th>
            <div class="card ">
                  <div class="card text-center">
                    <div class="card-header">
                      FRACCIÓN XXVII
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Conseciones, Contratos, Convenios, Perimisos, Licencias, etc.</h5>
                      <!--<a href="#" class="u-image u-logo u-opacity u-opacity-95 mx-auto " >
                        <img id="frac1" src="https://cdn-icons-png.flaticon.com/512/201/201568.png" class="u-logo-image u-logo-image-1">
                      </a>-->
                    </div>
                    <div class="card-footer text-muted">
                      Ver
                    </div>
                  </div>
              </div>
            </th>
            <th>
            <div class="card ">
                  <div class="card text-center">
                    <div class="card-header">
                      FRACCIÓN XXVIII
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Procedimientos de Adjudicación Directa, Invitacion Reestringida y Licitación de Cualquier Naturaleza </h5>
                      <!--<a href="#" class="u-image u-logo u-opacity u-opacity-95 mx-auto " >
                        <img id="frac1" src="https://cdn-icons-png.flaticon.com/512/201/201568.png" class="u-logo-image u-logo-image-1">
                      </a>-->
                    </div>
                    <div class="card-footer text-muted">
                      Ver
                    </div>
                  </div>
              </div>
            </th>
          </tr>
          <tr>
            <th>
            <div class="card ">
                  <div class="card text-center">
                    <div class="card-header">
                      FRACCIÓN XXIX
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Informes que por Disposición Legal Genere el Sujeto Obligado</h5>
                      <!--<a href="#" class="u-image u-logo u-opacity u-opacity-95 mx-auto " >
                        <img id="frac1" src="https://cdn-icons-png.flaticon.com/512/201/201568.png" class="u-logo-image u-logo-image-1">
                      </a>-->
                    </div>
                    <div class="card-footer text-muted">
                      Ver
                    </div>
                  </div>
              </div>
            </th>
            <th>
            <div class="card ">
                  <div class="card text-center">
                    <div class="card-header">
                      FRACCIÓN XXX
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Estadísticas que Generen en Cumplimiento de sus Facultades, Competencias y Funciones</h5>
                      <!--<a href="#" class="u-image u-logo u-opacity u-opacity-95 mx-auto " >
                        <img id="frac1" src="https://cdn-icons-png.flaticon.com/512/201/201568.png" class="u-logo-image u-logo-image-1">
                      </a>-->
                    </div>
                    <div class="card-footer text-muted">
                      Ver
                    </div>
                  </div>
              </div>
            </th>
            <th>
            <div class="card ">
                  <div class="card text-center">
                    <div class="card-header">
                      FRACCIÓN XXXI
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Informes Programaticos y Presupúestales, Balances Generales y Estado</h5>
                      <!--<a href="#" class="u-image u-logo u-opacity u-opacity-95 mx-auto " >
                        <img id="frac1" src="https://cdn-icons-png.flaticon.com/512/201/201568.png" class="u-logo-image u-logo-image-1">
                      </a>-->
                    </div>
                    <div class="card-footer text-muted">
                      Ver
                    </div>
                  </div>
              </div>
            </th>
            <th>
            <div class="card ">
                  <div class="card text-center">
                    <div class="card-header">
                      FRACCIÓN XXXII
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Padron de Proveedores y Contratistas</h5>
                      <!--<a href="#" class="u-image u-logo u-opacity u-opacity-95 mx-auto " >
                        <img id="frac1" src="https://cdn-icons-png.flaticon.com/512/201/201568.png" class="u-logo-image u-logo-image-1">
                      </a>-->
                    </div>
                    <div class="card-footer text-muted">
                      Ver
                    </div>
                  </div>
              </div>
            </th>
          </tr>
          <tr>
            <th>
            <div class="card ">
                  <div class="card text-center">
                    <div class="card-header">
                      FRACCIÓN XXXIII
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Convenios de Coordinación</h5>
                      <!--<a href="#" class="u-image u-logo u-opacity u-opacity-95 mx-auto " >
                        <img id="frac1" src="https://cdn-icons-png.flaticon.com/512/201/201568.png" class="u-logo-image u-logo-image-1">
                      </a>-->
                    </div>
                    <div class="card-footer text-muted">
                      Ver
                    </div>
                  </div>
              </div>
            </th>
            <th>
            <div class="card ">
                  <div class="card text-center">
                    <div class="card-header">
                      FRACCIÓN XXXIV
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Inventario de Bienes Muebles e Inmuebles en Posesión y en Propiedad</h5>
                      <!--<a href="#" class="u-image u-logo u-opacity u-opacity-95 mx-auto " >
                        <img id="frac1" src="https://cdn-icons-png.flaticon.com/512/201/201568.png" class="u-logo-image u-logo-image-1">
                      </a>-->
                    </div>
                    <div class="card-footer text-muted">
                      Ver
                    </div>
                  </div>
              </div>
            </th>
            <th>
            <div class="card ">
                  <div class="card text-center">
                    <div class="card-header">
                      FRACCIÓN XXXV
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Recomendaciones Emitidas por los Órganos Públicos del Edo. Mexicano</h5>
                      <!--<a href="#" class="u-image u-logo u-opacity u-opacity-95 mx-auto " >
                        <img id="frac1" src="https://cdn-icons-png.flaticon.com/512/201/201568.png" class="u-logo-image u-logo-image-1">
                      </a>-->
                    </div>
                    <div class="card-footer text-muted">
                      Ver
                    </div>
                  </div>
              </div>
            </th> 
            <th>
            <div class="card ">
                  <div class="card text-center">
                    <div class="card-header">
                      FRACCIÓN XXXVI
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Resoluciones y Laudos que Emitan en Procesos o Procedimientos en Forma de Juicio </h5>
                      <!--<a href="#" class="u-image u-logo u-opacity u-opacity-95 mx-auto " >
                        <img id="frac1" src="https://cdn-icons-png.flaticon.com/512/201/201568.png" class="u-logo-image u-logo-image-1">
                      </a>-->
                    </div>
                    <div class="card-footer text-muted">
                      Ver
                    </div>
                  </div>
              </div>
            </th>
          </tr>
          <tr>
            <th>
            <div class="card ">
                  <div class="card text-center">
                    <div class="card-header">
                      FRACCIÓN XXXVII
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Mecanismos de Participación Ciudadana</h5>
                      <!--<a href="#" class="u-image u-logo u-opacity u-opacity-95 mx-auto " >
                        <img id="frac1" src="https://cdn-icons-png.flaticon.com/512/201/201568.png" class="u-logo-image u-logo-image-1">
                      </a>-->
                    </div>
                    <div class="card-footer text-muted">
                      Ver
                    </div>
                  </div>
              </div>
            </th>
            <th>
            <div class="card ">
                  <div class="card text-center">
                    <div class="card-header">
                      FRACCIÓN XXXVIII
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Programas que se Ofertan, Tamites, Requisitos y Formatos</h5>
                      <!--<a href="#" class="u-image u-logo u-opacity u-opacity-95 mx-auto " >
                        <img id="frac1" src="https://cdn-icons-png.flaticon.com/512/201/201568.png" class="u-logo-image u-logo-image-1">
                      </a>-->
                    </div>
                    <div class="card-footer text-muted">
                      Ver
                    </div>
                  </div>
              </div>
            </th>
            <th>
            <div class="card ">
                  <div class="card text-center">
                    <div class="card-header">
                      FRACCIÓN XXXIX
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Actas y Resoluciones del Comite de Transparencia</h5>
                      <!--<a href="#" class="u-image u-logo u-opacity u-opacity-95 mx-auto " >
                        <img id="frac1" src="https://cdn-icons-png.flaticon.com/512/201/201568.png" class="u-logo-image u-logo-image-1">
                      </a>-->
                    </div>
                    <div class="card-footer text-muted">
                      Ver
                    </div>
                  </div>
              </div>
            </th>
            <th>
            <div class="card ">
                  <div class="card text-center">
                    <div class="card-header">
                      FRACCIÓN XL
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Evaluaciones y Encuestas Programas Financiados con Recursos Públicos</h5>
                      <!--<a href="#" class="u-image u-logo u-opacity u-opacity-95 mx-auto " >
                        <img id="frac1" src="https://cdn-icons-png.flaticon.com/512/201/201568.png" class="u-logo-image u-logo-image-1">
                      </a>-->
                    </div>
                    <div class="card-footer text-muted">
                      Ver
                    </div>
                  </div>
              </div>
            </th>
          </tr>
          <tr>
            <th>
            <div class="card ">
                  <div class="card text-center">
                    <div class="card-header">
                      FRACCIÓN XLI
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Estudios Financiados con Recursos Públicos</h5>
                      <!--<a href="#" class="u-image u-logo u-opacity u-opacity-95 mx-auto " >
                        <img id="frac1" src="https://cdn-icons-png.flaticon.com/512/201/201568.png" class="u-logo-image u-logo-image-1">
                      </a>-->
                    </div>
                    <div class="card-footer text-muted">
                      Ver
                    </div>
                  </div>
              </div>
            </th>
            <th>
            <div class="card ">
                  <div class="card text-center">
                    <div class="card-header">
                      FRACCIÓN XLII
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Listado de Juvilados y Pensionados</h5>
                      <!--<a href="#" class="u-image u-logo u-opacity u-opacity-95 mx-auto " >
                        <img id="frac1" src="https://cdn-icons-png.flaticon.com/512/201/201568.png" class="u-logo-image u-logo-image-1">
                      </a>-->
                    </div>
                    <div class="card-footer text-muted">
                      Ver
                    </div>
                  </div>
              </div>
            </th>
            <th>
            <div class="card ">
                  <div class="card text-center">
                    <div class="card-header">
                      FRACCIÓN XLIII
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Ingresos Recibidos y si Reesponsable</h5>
                      <!--<a href="#" class="u-image u-logo u-opacity u-opacity-95 mx-auto " >
                        <img id="frac1" src="https://cdn-icons-png.flaticon.com/512/201/201568.png" class="u-logo-image u-logo-image-1">
                      </a>-->
                    </div>
                    <div class="card-footer text-muted">
                      Ver
                    </div>
                  </div>
              </div>
            </th>
            <th>
            <div class="card ">
                  <div class="card text-center">
                    <div class="card-header">
                      FRACCIÓN XLIV
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Donaciones Hechas a Terceros en Dinero o Especie</h5>
                      <!--<a href="#" class="u-image u-logo u-opacity u-opacity-95 mx-auto " >
                        <img id="frac1" src="https://cdn-icons-png.flaticon.com/512/201/201568.png" class="u-logo-image u-logo-image-1">
                      </a>-->
                    </div>
                    <div class="card-footer text-muted">
                      Ver
                    </div>
                  </div>
              </div>
            </th>
          </tr>
          <tr>
            <th>
            <div class="card ">
                  <div class="card text-center">
                    <div class="card-header">
                      FRACCIÓN XLV
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Catalo de Disposicion y Guia de Archivo Documental</h5>
                      <!--<a href="#" class="u-image u-logo u-opacity u-opacity-95 mx-auto " >
                        <img id="frac1" src="https://cdn-icons-png.flaticon.com/512/201/201568.png" class="u-logo-image u-logo-image-1">
                      </a>-->
                    </div>
                    <div class="card-footer text-muted">
                      Ver
                    </div>
                  </div>
              </div>
            </th>
            <th>
            <div class="card ">
                  <div class="card text-center">
                    <div class="card-header">
                      FRACCIÓN XLVI
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Actas de sesiones Ordiarias y Extraordinarias</h5>
                      <!--<a href="#" class="u-image u-logo u-opacity u-opacity-95 mx-auto " >
                        <img id="frac1" src="https://cdn-icons-png.flaticon.com/512/201/201568.png" class="u-logo-image u-logo-image-1">
                      </a>-->
                    </div>
                    <div class="card-footer text-muted">
                      Ver
                    </div>
                  </div>
              </div>
            </th>
            <th>
            <div class="card ">
                  <div class="card text-center">
                    <div class="card-header">
                      FRACCIÓN XLVII
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Listado de Solicitudes a las Empresas Concesionarias de Telecomunicaciones y Proveedores de Servicios</h5>
                      <!--<a href="#" class="u-image u-logo u-opacity u-opacity-95 mx-auto " >
                        <img id="frac1" src="https://cdn-icons-png.flaticon.com/512/201/201568.png" class="u-logo-image u-logo-image-1">
                      </a>-->
                    </div>
                    <div class="card-footer text-muted">
                      Ver
                    </div>
                  </div>
              </div>
            </th>
            <th>
            <div class="card ">
                  <div class="card text-center">
                    <div class="card-header">
                      FRACCIÓN XLVIII
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Información que sea de Utilidad o se Considere Reelevantes</h5>
                      <!--<a href="#" class="u-image u-logo u-opacity u-opacity-95 mx-auto " >
                        <img id="frac1" src="https://cdn-icons-png.flaticon.com/512/201/201568.png" class="u-logo-image u-logo-image-1">
                      </a>-->
                    </div>
                    <div class="card-footer text-muted">
                      Ver
                    </div>
                  </div>
              </div>
            </th>
          </tr>
          <tr>
            <th>
            <div class="card ">
                  <div class="card text-center">
                    <div class="card-header">
                      FRACCIÓN XLIX
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Las Demas que Establesca la Legislación Vigente</h5>
                      <!--<a href="#" class="u-image u-logo u-opacity u-opacity-95 mx-auto " >
                        <img id="frac1" src="https://cdn-icons-png.flaticon.com/512/201/201568.png" class="u-logo-image u-logo-image-1">
                      </a>-->
                    </div>
                    <div class="card-footer text-muted">
                      Ver
                    </div>
                  </div>
              </div>
            </th>
           
          </tr>
        </table>
      </section>
    </div>
    
    <footer class="u-clearfix u-footer u-grey-80" id="sec-9791"><div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-expanded-width-sm u-expanded-width-xs u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-valign-top-lg u-valign-top-md u-valign-top-xl u-container-layout-1">
                <p class="u-align-center u-text u-text-1"><span class="u-file-icon u-icon u-icon-1"><img src="/images/888856.png" alt=""></span>&nbsp;<span style="font-size: 0.8125rem;"> Avenida Colon No. 208, Col Centro, Tepeaca de Negrete, Puebla.&nbsp; C. P.: 75200</span>
                </p>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-valign-top-lg u-valign-top-md u-valign-top-xl u-container-layout-2">
                <p class="u-align-center u-text u-text-2"><span class="u-file-icon u-icon u-icon-2"><img src="/images/831309.png" alt=""></span>&nbsp; <span style="font-size: 0.8125rem;">223 275 0691</span>&nbsp;&nbsp;&nbsp;<span class="u-file-icon u-icon u-icon-3"><img src="/images/1384055.png" alt=""></span>&nbsp; <span style="font-size: 0.8125rem;">223 128 1805&nbsp;</span>
                  <br>
                </p>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-valign-top-lg u-valign-top-md u-valign-top-xl u-container-layout-3">
                <p class="u-align-center u-text u-text-3">
                  <br><span class="u-file-icon u-icon u-icon-4"><img src="/images/732200.png" alt=""></span>aguapotable@sosapat.gob.mx
                </p>
              </div>
            </div>
          </div>
        </div>
        
        <div class="u-border-1 u-border-white u-expanded-width-lg u-expanded-width-md u-expanded-width-xl u-line u-line-horizontal u-opacity u-opacity-50 u-line-1"></div>
        <p class="u-align-center u-text u-text-4">© Copyright 2022  SOSAPAT - Sistema Operador de los Serviicos de Agua Potable y Alcantarillado del Municipio de Tepeaca de Negrete Puebla</p>
      </div></footer>
   
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    
  </body></html>