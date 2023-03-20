<?php
   require_once  '../php/PHPExcel.php';
   $archivo = "../Adjuntos/A77FXLIX.xlsx";
   $inputFileType = PHPExcel_IOFactory::identify($archivo);
   $objReader = PHPExcel_IOFactory::createReader($inputFileType);
   $objPHPExcel = $objReader->load($archivo);
   $sheet = $objPHPExcel->getSheet(0); 
   $highestRow = $sheet->getHighestRow(); 
   $highestColumn = $sheet->getHighestColumn();
?>
<!DOCTYPE html>
<html style="font-size: 16px;" lang="es"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Ley de Disciplina Financiera</title>
    <link rel="stylesheet" href="/nicepage.css" media="screen">
<link rel="stylesheet" href="/styles/Ley-de-Disciplina-Financiera.css" media="screen">
    <script class="u-script" type="text/javascript" src="/js/jquery.js" "="" defer=""></script>
    <script class="u-script" type="text/javascript" src="/nicepage.js" "="" defer=""></script>
    <meta name="generator" content="Nicepage 4.16.0, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">  
    
 
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
    <meta name="twitter:title" content="Ley de Disciplina Financiera">
    <meta name="twitter:description" content="sosapat">
    <meta property="og:title" content="Ley de Disciplina Financiera">
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
    <section class="u-align-center-xs u-clearfix u-section-1" src="" id="carousel_e99d">
      <div class="u-clearfix u-sheet u-sheet-1">
        <img class="u-expand-resize u-expanded-height u-image u-image-contain u-image-1" src="/images/klipartz.com.png" data-image-width="1173" data-image-height="970">
        <div class="u-border-no-bottom u-border-no-left u-border-no-right u-border-no-top u-container-style u-group u-shape-rectangle u-group-1">
          <div class="u-container-layout u-container-layout-1">
            <h1 class="u-custom-font u-font-oswald u-text u-text-palette-3-base u-title u-text-1">Ley de General de Contabilidad Gubernamental</h1>
            <p class="u-large-text u-text u-text-variant u-text-2">Estados e Información Contable de acuerdo con los lineamientos en los articulos 47,48,49,51,55 LGCG</p>
          </div>
        </div>
      </div>
    </section>
    
    <div class="container">
       
        <div >
            <table class="table table-striped">
                <tr>
                    <td>
                        <p>
                        <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                            2022
                        </a>
                        <!--<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                            Button with data-target
                        </button>-->
                        </p>
                        <div class="collapse" id="collapseExample">
                            <ul>
                                <li>
                                <a  data-toggle="collapse" href="#trimestre2do22" role="button" aria-expanded="false" aria-controls="collapseExample">
                                2do Trimestre
                                </a>
                        
                                        <div class="collapse" id="trimestre2do22">
                                            <div >  
                                                <table class="table">           
                                                    <?php
                                                    $num=0;
                                                    $colsInMes1=941;
                                                    $colsFinMes1 = 959;

                                                    $colsInMes2=960;
                                                    $colsFinMes2=978;

                                                    $colsInMes3=979;
                                                    $colsFinMes3=997;

                                                    $difCols1=($colsFinMes1+1)-$colsInMes1;
                                                    $difCols2=($colsFinMes2+1)-$colsInMes2;
                                                    for ($row = $colsInMes1; $row <= $colsFinMes1; $row++){ 
                                                    $num++;
                                                    ?>
                                                        <tr>
                                                            <th scope='row'><?php echo $num;?></th>
                                                            <th><?php echo $sheet->getCell("D".$row)->getValue();?></th>
                                                            <th><a href="<?php echo $sheet->getCell("E".$row)->getValue();?>" target="_blank">Abril</a></th>
                                                            <th><a href="<?php echo $sheet->getCell("E".($row+$difCols1))->getValue();?>" target="_blank">Mayo</a></th>
                                                            <th><a href="<?php echo $sheet->getCell("E".($row+($difCols1+$difCols2)))->getValue();?>" target="_blank">Junio</a></th>
                                                            </tr>
                                                        <?php    
                                                    }

                                                    ?>
                                                </table> 
                                            </div>
                                        </div>
                                </li>
                                <li>
                                <a  data-toggle="collapse" href="#trimestre1er22" role="button" aria-expanded="false" aria-controls="collapseExample">
                                1er Trimestre
                                </a>
                        
                                        <div class="collapse" id="trimestre1er22">
                                            <div >  
                                                <table class="table">           
                                                    <?php
                                                    $num=0;
                                                    $colsInMes1= 873;
                                                    $colsFinMes1 = 890;

                                                    $colsInMes2=891;
                                                    $colsFinMes2=908;

                                                    $colsInMes3=909;
                                                    $colsFinMes3=926;

                                                    $difCols1=($colsFinMes1+1)-$colsInMes1;
                                                    $difCols2=($colsFinMes2+1)-$colsInMes2;
                                                    for ($row = $colsInMes1; $row <= $colsFinMes1; $row++){ 
                                                    $num++;
                                                    ?>
                                                        <tr>
                                                            <th scope='row'><?php echo $num;?></th>
                                                            <th><?php echo $sheet->getCell("D".$row)->getValue();?></th>
                                                            <th><a href="<?php echo $sheet->getCell("E".$row)->getValue();?>" target="_blank">Enero</a></th>
                                                            <th><a href="<?php echo $sheet->getCell("E".($row+$difCols1))->getValue();?>" target="_blank">Febrero</a></th>
                                                            <th><a href="<?php echo $sheet->getCell("E".($row+($difCols1+$difCols2)))->getValue();?>" target="_blank">Marzo</a></th>
                                                            </tr>
                                                        <?php    
                                                    }

                                                    ?>
                                                </table>
                                            </div>
                                        </div>
                                </li>
                            
                            </ul>
                        </div>
                    </td>
                    <td>
                    <p>
                        <a class="btn btn-primary" data-toggle="collapse" href="#collapse2021" role="button" aria-expanded="false" aria-controls="collapseExample">
                            2021
                        </a>
                        <!--<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                            Button with data-target
                        </button>-->
                        </p>
                        <div class="collapse" id="collapse2021">
                            <ul>
                                <li>
                                <a  data-toggle="collapse" href="#trimestre4to21" role="button" aria-expanded="false" aria-controls="collapseExample">
                                4to Trimestre
                                </a>
                        
                                        <div class="collapse" id="trimestre4to21">
                                            <div >  
                                                <table class="table">           
                                                    <?php
                                                     $num=0;
                                                     $colsInMes1=806;
                                                     $colsFinMes1 =823;
                     
                                                     $colsInMes2=824;
                                                     $colsFinMes2=841;
                     
                                                     $colsInMes3=842;
                                                     $colsFinMes3=859;
                     
                                                     $difCols1=($colsFinMes1+1)-$colsInMes1;
                                                     $difCols2=($colsFinMes2+1)-$colsInMes2;
                                                     for ($row = $colsInMes1; $row <= $colsFinMes1; $row++){ 
                                                         $num++;
                                                         ?>
                                                         <tr>
                                                             <th scope='row'><?php echo $num;?></th>
                                                             <th><?php echo $sheet->getCell("D".$row)->getValue();?></th>
                                                             <th><a href="<?php echo $sheet->getCell("E".$row)->getValue();?>" target="_blank">Octubre</a></th>
                                                             <th><a href="<?php echo $sheet->getCell("E".($row+$difCols1))->getValue();?>" target="_blank">Noviembre</a></th>
                                                             <th><a href="<?php echo $sheet->getCell("E".($row+($difCols1+$difCols2)))->getValue();?>" target="_blank">Diciembre</a></th>
                                                         </tr>
                                                         <?php    
                                                     }                                                    ?>
                                                </table>
                                            </div>
                                        </div>
                                </li>
                                <li>
                                <a  data-toggle="collapse" href="#trimestre3er21" role="button" aria-expanded="false" aria-controls="collapseExample">
                                3er Trimestre
                                </a>
                        
                                        <div class="collapse" id="trimestre3er21">
                                            <div >  
                                                <table class="table">           
                                                    <?php
                                                    $num=0;
                                                    $colsInMes1=739;
                                                    $colsFinMes1 = 756;
                    
                                                    $colsInMes2=757;
                                                    $colsFinMes2=774;
                    
                                                    $colsInMes3=775;
                                                    $colsFinMes3=792;
                    
                                                    $difCols1=($colsFinMes1+1)-$colsInMes1;
                                                    $difCols2=($colsFinMes2+1)-$colsInMes2;
                                                    for ($row = $colsInMes1; $row <= $colsFinMes1; $row++){ 
                                                        $num++;
                                                        ?>
                                                        <tr>
                                                            <th scope='row'><?php echo $num;?></th>
                                                            <th><?php echo $sheet->getCell("D".$row)->getValue();?></th>
                                                            <th><a href="<?php echo $sheet->getCell("E".$row)->getValue();?>" target="_blank">Julio</a></th>
                                                            <th><a href="<?php echo $sheet->getCell("E".($row+$difCols1))->getValue();?>" target="_blank">Agosto</a></th>
                                                            <th><a href="<?php echo $sheet->getCell("E".($row+($difCols1+$difCols2)))->getValue();?>" target="_blank">Septiembre</a></th>
                                                        </tr>
                                                        <?php    
                                                    }

                                                    ?>
                                                </table>
                                            </div>
                                        </div>
                                </li>
                            
                                <li>
                                <a  data-toggle="collapse" href="#trimestre2do21" role="button" aria-expanded="false" aria-controls="collapseExample">
                                2do Trimestre
                                </a>
                        
                                        <div class="collapse" id="trimestre2do21">
                                            <div >  
                                                <table class="table">           
                                                    <?php
                                                    $num=0;
                                                    $colsInMes1=672;
                                                    $colsFinMes1 = 689;
                    
                                                    $colsInMes2=690;
                                                    $colsFinMes2=707;
                    
                                                    $colsInMes3=708;
                                                    $colsFinMes3=725;
                    
                                                    $difCols1=($colsFinMes1+1)-$colsInMes1;
                                                    $difCols2=($colsFinMes2+1)-$colsInMes2;
                                                    for ($row = $colsInMes1; $row <= $colsFinMes1; $row++){ 
                                                        $num++;
                                                        ?>
                                                        <tr>
                                                            <th scope='row'><?php echo $num;?></th>
                                                            <th><?php echo $sheet->getCell("D".$row)->getValue();?></th>
                                                            <th><a href="<?php echo $sheet->getCell("E".$row)->getValue();?>" target="_blank">Abril</a></th>
                                                            <th><a href="<?php echo $sheet->getCell("E".($row+$difCols1))->getValue();?>" target="_blank">Mayo</a></th>
                                                            <th><a href="<?php echo $sheet->getCell("E".($row+($difCols1+$difCols2)))->getValue();?>" target="_blank">Junio</a></th>
                                                        </tr>
                                                        <?php    
                                                    }

                                                    ?>
                                                </table>
                                            </div>
                                        </div>
                                </li>
                                <li>
                                <a  data-toggle="collapse" href="#trimestre1er21" role="button" aria-expanded="false" aria-controls="collapseExample">
                                1er Trimestre
                                </a>
                        
                                        <div class="collapse" id="trimestre1er21">
                                            <div >  
                                                <table class="table">           
                                                    <?php
                                                     $num=0;
                                                     $colsInMes1=605;
                                                     $colsFinMes1 = 622;
                     
                                                     $colsInMes2=623;
                                                     $colsFinMes2=640;
                     
                                                     $colsInMes3=641;
                                                     $colsFinMes3=658;
                     
                                                     $difCols1=($colsFinMes1+1)-$colsInMes1;
                                                     $difCols2=($colsFinMes2+1)-$colsInMes2;
                                                     for ($row = $colsInMes1; $row <= $colsFinMes1; $row++){ 
                                                         $num++;
                                                         ?>
                                                         <tr>
                                                             <th scope='row'><?php echo $num;?></th>
                                                             <th><?php echo $sheet->getCell("D".$row)->getValue();?></th>
                                                             <th><a href="<?php echo $sheet->getCell("E".$row)->getValue();?>" target="_blank">Enero</a></th>
                                                             <th><a href="<?php echo $sheet->getCell("E".($row+$difCols1))->getValue();?>" target="_blank">Febrero</a></th>
                                                             <th><a href="<?php echo $sheet->getCell("E".($row+($difCols1+$difCols2)))->getValue();?>" target="_blank">Marzo</a></th>
                                                         </tr>
                                                         <?php    
                                                     }

                                                    ?>
                                                </table>
                                            </div>
                                        </div>
                                </li>
                            
                            </ul>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>
                        <a class="btn btn-primary" data-toggle="collapse" href="#collapse2020" role="button" aria-expanded="false" aria-controls="collapseExample">
                            2020
                        </a>
                        <!--<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                            Button with data-target
                        </button>-->
                        </p>
                        <div class="collapse" id="collapse2020">
                            <ul>
                            <li>
                                <a  data-toggle="collapse" href="#trimestre4to20" role="button" aria-expanded="false" aria-controls="collapseExample">
                                4to Trimestre
                                </a>
                        
                                        <div class="collapse" id="trimestre4to20">
                                            <div >  
                                                <table class="table">           
                                                    <?php
                                                     $num=0;
                                                     $colsInMes1=537;
                                                     $colsFinMes1 = 554;
                     
                                                     $colsInMes2=555;
                                                     $colsFinMes2=573;
                     
                                                     $colsInMes3=574;
                                                     $colsFinMes3=585;
                     
                                                     $difCols1=($colsFinMes1+1)-$colsInMes1;
                                                     $difCols2=($colsFinMes2+1)-$colsInMes2;
                                                     for ($row = $colsInMes1; $row <= $colsFinMes1; $row++){ 
                                                         $num++;
                                                         ?>
                                                         <tr>
                                                             <th scope='row'><?php echo $num;?></th>
                                                             <th><?php echo $sheet->getCell("D".$row)->getValue();?></th>
                                                             <th><a href="<?php echo $sheet->getCell("E".$row)->getValue();?>" target="_blank">Octubre</a></th>
                                                             <th><a href="<?php echo $sheet->getCell("E".($row+$difCols1))->getValue();?>" target="_blank">Noviembre</a></th>
                                                             <th><a href="<?php echo $sheet->getCell("E".($row+($difCols1+$difCols2)))->getValue();?>" target="_blank">Diciembre</a></th>
                                                         </tr>
                                                         <?php    
                                                     }

                                                    ?>
                                                </table>
                                            </div>
                                        </div>
                                </li>
                            <li>
                                <a  data-toggle="collapse" href="#trimestre3er20" role="button" aria-expanded="false" aria-controls="collapseExample">
                                3er Trimestre
                                </a>
                        
                                        <div class="collapse" id="trimestre3er20">
                                            <div >  
                                                <table class="table">           
                                                    <?php
                                                    $num=0;
                                                    $colsInMes1=469;
                                                    $colsFinMes1 = 486;
                    
                                                    $colsInMes2=487;
                                                    $colsFinMes2=504;
                    
                                                    $colsInMes3=505;
                                                    $colsFinMes3=523;
                    
                                                    $difCols1=($colsFinMes1+1)-$colsInMes1;
                                                    $difCols2=($colsFinMes2+1)-$colsInMes2;
                                                    for ($row = $colsInMes1; $row <= $colsFinMes1; $row++){ 
                                                        $num++;
                                                        ?>
                                                        <tr>
                                                            <th scope='row'><?php echo $num;?></th>
                                                            <th><?php echo $sheet->getCell("D".$row)->getValue();?></th>
                                                            <th><a href="<?php echo $sheet->getCell("E".$row)->getValue();?>" target="_blank">Julio</a></th>
                                                            <th><a href="<?php echo $sheet->getCell("E".($row+$difCols1))->getValue();?>" target="_blank">Agosto</a></th>
                                                            <th><a href="<?php echo $sheet->getCell("E".($row+($difCols1+$difCols2)))->getValue();?>" target="_blank">Septiembre</a></th>
                                                        </tr>
                                                        <?php    
                                                    }
                                                    ?>
                                                </table>
                                            </div>
                                        </div>
                                </li>
                                <li>
                                <a  data-toggle="collapse" href="#trimestre2do20" role="button" aria-expanded="false" aria-controls="collapseExample">
                                2do Trimestre
                                </a>
                        
                                        <div class="collapse" id="trimestre2do20">
                                            <div >  
                                                <table class="table">           
                                                    <?php
                                                    $num=0;
                                                    $colsInMes1=403;
                                                    $colsFinMes1 = 420;
                    
                                                    $colsInMes2=421;
                                                    $colsFinMes2=437;
                    
                                                    $colsInMes3=438;
                                                    $colsFinMes3=455;
                    
                                                    $difCols1=($colsFinMes1+1)-$colsInMes1;
                                                    $difCols2=($colsFinMes2+1)-$colsInMes2;
                                                    for ($row = $colsInMes1; $row <= $colsFinMes1; $row++){ 
                                                        $num++;
                                                        ?>
                                                        <tr>
                                                            <th scope='row'><?php echo $num;?></th>
                                                            <th><?php echo $sheet->getCell("D".$row)->getValue();?></th>
                                                            <th><a href="<?php echo $sheet->getCell("E".$row)->getValue();?>" target="_blank">Abril</a></th>
                                                            <th><a href="<?php echo $sheet->getCell("E".($row+$difCols1))->getValue();?>" target="_blank">Mayo</a></th>
                                                            <th><a href="<?php echo $sheet->getCell("E".($row+($difCols1+$difCols2)))->getValue();?>" target="_blank">Junio</a></th>
                                                        </tr>
                                                        <?php    
                                                    }
                                                    ?>
                                                </table>
                                            </div>
                                        </div>
                                </li>
                                <li>
                                <a  data-toggle="collapse" href="#trimestre1er20" role="button" aria-expanded="false" aria-controls="collapseExample">
                                1er Trimestre
                                </a>
                        
                                        <div class="collapse" id="trimestre1er20">
                                            <div >  
                                                <table class="table">           
                                                    <?php
                                                     $num=0;
                                                     $colsInMes1=340;
                                                     $colsFinMes1 = 356;
                     
                                                     $colsInMes2=357;
                                                     $colsFinMes2=373;
                     
                                                     $colsInMes3=374;
                                                     $colsFinMes3=389;
                     
                                                     $difCols1=($colsFinMes1+1)-$colsInMes1;
                                                     $difCols2=($colsFinMes2+1)-$colsInMes2;
                                                     for ($row = $colsInMes1; $row <= $colsFinMes1; $row++){ 
                                                         $num++;
                                                         ?>
                                                         <tr>
                                                             <th scope='row'><?php echo $num;?></th>
                                                             <th><?php echo $sheet->getCell("D".$row)->getValue();?></th>
                                                             <th><a href="<?php echo $sheet->getCell("E".$row)->getValue();?>" target="_blank">Enero</a></th>
                                                             <th><a href="<?php echo $sheet->getCell("E".($row+$difCols1))->getValue();?>" target="_blank">Febrero</a></th>
                                                             <th><a href="<?php echo $sheet->getCell("E".($row+($difCols1+$difCols2)))->getValue();?>" target="_blank">Marzo</a></th>
                                                         </tr>
                                                         <?php    
                                                     }
                                                    ?>
                                                </table>
                                            </div>
                                        </div>
                                </li>
                            
                            </ul>
                        </div>
                    
                    </td>
                    <td>
                    <p>
                        <a class="btn btn-primary" data-toggle="collapse" href="#collapse2019" role="button" aria-expanded="false" aria-controls="collapseExample">
                            2019
                        </a>
                        <!--<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                            Button with data-target
                        </button>-->
                        </p>
                        <div class="collapse" id="collapse2019">
                            <ul>
                                <li>
                                <a  data-toggle="collapse" href="#trimestre4to19" role="button" aria-expanded="false" aria-controls="collapseExample">
                                4to Trimestre
                                </a>
                        
                                        <div class="collapse" id="trimestre4to19">
                                            <div >  
                                                <table class="table">           
                                                    <?php
                                                     $num=0;
                                                     $colsInMes1=272;
                                                     $colsFinMes1 = 290;
                     
                                                     $colsInMes2=291;
                                                     $colsFinMes2=308;
                     
                                                     $colsInMes3=309;
                                                     $colsFinMes3=326;
                     
                                                     $difCols1=($colsFinMes1+1)-$colsInMes1;
                                                     $difCols2=($colsFinMes2+1)-$colsInMes2;
                                                     for ($row = $colsInMes1; $row <= $colsFinMes1; $row++){ 
                                                         $num++;
                                                         ?>
                                                         <tr>
                                                             <th scope='row'><?php echo $num;?></th>
                                                             <th><?php echo $sheet->getCell("D".$row)->getValue();?></th>
                                                             <th><a href="<?php echo $sheet->getCell("E".$row)->getValue();?>" target="_blank">Octubre</a></th>
                                                             <th><a href="<?php echo $sheet->getCell("E".($row+$difCols1))->getValue();?>" target="_blank">Noviembre</a></th>
                                                             <th><a href="<?php echo $sheet->getCell("E".($row+($difCols1+$difCols2)))->getValue();?>" target="_blank">Diciembre</a></th>
                                                         </tr>
                                                         <?php    
                                                     }

                                                    ?>
                                                </table>
                                            </div>
                                        </div>
                                </li>
                                <li>
                                <a  data-toggle="collapse" href="#trimestre3er19" role="button" aria-expanded="false" aria-controls="collapseExample">
                                3er Trimestre
                                </a>
                        
                                        <div class="collapse" id="trimestre3er19">
                                            <div >  
                                                <table class="table">           
                                                    <?php
                                                      $num=0;
                                                      $colsInMes1=200;
                                                      $colsFinMes1 = 218;
                      
                                                      $colsInMes2=219;
                                                      $colsFinMes2=237;
                      
                                                      $colsInMes3=238;
                                                      $colsFinMes3=258;
                      
                                                      $difCols1=($colsFinMes1+1)-$colsInMes1;
                                                      $difCols2=($colsFinMes2+1)-$colsInMes2;
                                                      for ($row = $colsInMes1; $row <= $colsFinMes1; $row++){ 
                                                          $num++;
                                                          ?>
                                                          <tr>
                                                              <th scope='row'><?php echo $num;?></th>
                                                              <th><?php echo $sheet->getCell("D".$row)->getValue();?></th>
                                                              <th><a href="<?php echo $sheet->getCell("E".$row)->getValue();?>" target="_blank">Julio</a></th>
                                                              <th><a href="<?php echo $sheet->getCell("E".($row+$difCols1))->getValue();?>" target="_blank">Agosto</a></th>
                                                              <th><a href="<?php echo $sheet->getCell("E".($row+($difCols1+$difCols2)))->getValue();?>" target="_blank">Septiembre</a></th>
                                                          </tr>
                                                          <?php    
                                                      }
                                                    ?>
                                                </table>
                                            </div>
                                        </div>
                                </li>
                            
                                <li>
                                <a  data-toggle="collapse" href="#trimestre2do19" role="button" aria-expanded="false" aria-controls="collapseExample">
                                2do Trimestre
                                </a>
                        
                                        <div class="collapse" id="trimestre2do19">
                                            <div >  
                                                <table class="table">           
                                                    <?php
                                                    $num=0;
                                                    $colsInMes1=143;
                                                    $colsFinMes1 = 161;
                    
                                                    $colsInMes2=162;
                                                    $colsFinMes2=180;
                    
                                                    $colsInMes3=181;
                                                    $colsFinMes3=199;
                    
                                                    $difCols1=($colsFinMes1+1)-$colsInMes1;
                                                    $difCols2=($colsFinMes2+1)-$colsInMes2;
                                                    for ($row = $colsInMes1; $row <= $colsFinMes1; $row++){ 
                                                        $num++;
                                                        ?>
                                                        <tr>
                                                            <th scope='row'><?php echo $num;?></th>
                                                            <th><?php echo $sheet->getCell("D".$row)->getValue();?></th>
                                                            <th><a href="<?php echo $sheet->getCell("E".$row)->getValue();?>" target="_blank">Abril</a></th>
                                                            <th><a href="<?php echo $sheet->getCell("E".($row+$difCols1))->getValue();?>" target="_blank">Mayo</a></th>
                                                            <th><a href="<?php echo $sheet->getCell("E".($row+($difCols1+$difCols2)))->getValue();?>" target="_blank">Junio</a></th>
                                                        </tr>
                                                        <?php    
                                                    }

                                                    ?>
                                                </table>
                                            </div>
                                        </div>
                                </li>
                                <li>
                                <a  data-toggle="collapse" href="#trimestre1er19" role="button" aria-expanded="false" aria-controls="collapseExample">
                                1er Trimestre
                                </a>
                        
                                        <div class="collapse" id="trimestre1er19">
                                            <div >  
                                                <table class="table">           
                                                    <?php
                                                     $num=0;
                                                     $colsInMes1=74;
                                                     $colsFinMes1 = 89;
                     
                                                     $colsInMes2=90;
                                                     $colsFinMes2=108;
                     
                                                     $colsInMes3=109;
                                                     $colsFinMes3=129;
                     
                                                     $difCols1=($colsFinMes1+1)-$colsInMes1;
                                                     $difCols2=($colsFinMes2+1)-$colsInMes2;
                                                     for ($row = $colsInMes1; $row <= $colsFinMes1; $row++){ 
                                                         $num++;
                                                         ?>
                                                         <tr>
                                                             <th scope='row'><?php echo $num;?></th>
                                                             <th><?php echo $sheet->getCell("D".$row)->getValue();?></th>
                                                             <th><a href="<?php echo $sheet->getCell("E".$row)->getValue();?>" target="_blank">Enero</a></th>
                                                             <th><a href="<?php echo $sheet->getCell("E".($row+$difCols1))->getValue();?>" target="_blank">Febrero</a></th>
                                                             <th><a href="<?php echo $sheet->getCell("E".($row+($difCols1+$difCols2)))->getValue();?>" target="_blank">Marzo</a></th>
                                                         </tr>
                                                         <?php    
                                                     }
                                                    ?>
                                                </table>
                                            </div>
                                        </div>
                                </li>
                            
                            </ul>
                        </div>
                    </td>
                    
                  
                </tr>
                <tr>
                    <td>
                        <p>
                        <a class="btn btn-primary" data-toggle="collapse" href="#collapse2018" role="button" aria-expanded="false" aria-controls="collapseExample">
                            2018
                        </a>
                        <!--<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                            Button with data-target
                        </button>-->
                        </p>
                        <div class="collapse" id="collapse2018">
                            <ul>
                            <li>
                                <a  data-toggle="collapse" href="#trimestre4to18" role="button" aria-expanded="false" aria-controls="collapseExample">
                                4to Trimestre
                                </a>
                        
                                        <div class="collapse" id="trimestre4to18">
                                            <div >  
                                                <table class="table">           
                                                    <?php
                                                     $num=0;
                                                     $colsInMes1=25;
                                                     $colsFinMes1 = 40;
                     
                                                     $colsInMes2=41;
                                                     $colsFinMes2=56;
                     
                                                     $colsInMes3=57;
                                                     $colsFinMes3=73;
                     
                                                     $difCols1=($colsFinMes1+1)-$colsInMes1;
                                                     $difCols2=($colsFinMes2+1)-$colsInMes2;
                                                     for ($row = $colsInMes1; $row <= $colsFinMes1; $row++){ 
                                                         $num++;
                                                         ?>
                                                         <tr>
                                                             <th scope='row'><?php echo $num;?></th>
                                                             <th><?php echo $sheet->getCell("D".$row)->getValue();?></th>
                                                             <th><a href="<?php echo $sheet->getCell("E".$row)->getValue();?>" target="_blank">Octubre</a></th>
                                                             <th><a href="<?php echo $sheet->getCell("E".($row+$difCols1))->getValue();?>" target="_blank">Noviembre</a></th>
                                                             <th><a href="<?php echo $sheet->getCell("E".($row+($difCols1+$difCols2)))->getValue();?>" target="_blank">Diciembre</a></th>
                                                         </tr>
                                                         <?php    
                                                     }
                                                    ?>
                                                </table>
                                            </div>
                                        </div>
                                </li>
                            </ul>
                        </div>
                    
                    </td>
                    <td>
                    </td>
                    
                  
                </tr>
                
            </table>
        </div>
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
        <div class="u-align-left u-social-icons u-spacing-10 u-social-icons-1">
          <a class="u-social-url" title="facebook" target="_blank" href="https://www.facebook.com/SosapaTepeaca/"><span class="u-icon u-social-facebook u-social-icon u-icon-5"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-3b7a"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-3b7a"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M73.5,31.6h-9.1c-1.4,0-3.6,0.8-3.6,3.9v8.5h12.6L72,58.3H60.8v40.8H43.9V58.3h-8V43.9h8v-9.2
            c0-6.7,3.1-17,17-17h12.5v13.9H73.5z"></path></svg></span>
          </a>
          <a class="u-social-url" title="twitter" target="_blank" href="https://twitter.com/sosapatepeaca?lang=es"><span class="u-icon u-social-icon u-social-twitter u-icon-6"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-82cb"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-82cb"><circle fill="currentColor" class="st0" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M83.8,47.3c0,0.6,0,1.2,0,1.7c0,17.7-13.5,38.2-38.2,38.2C38,87.2,31,85,25,81.2c1,0.1,2.1,0.2,3.2,0.2
            c6.3,0,12.1-2.1,16.7-5.7c-5.9-0.1-10.8-4-12.5-9.3c0.8,0.2,1.7,0.2,2.5,0.2c1.2,0,2.4-0.2,3.5-0.5c-6.1-1.2-10.8-6.7-10.8-13.1
            c0-0.1,0-0.1,0-0.2c1.8,1,3.9,1.6,6.1,1.7c-3.6-2.4-6-6.5-6-11.2c0-2.5,0.7-4.8,1.8-6.7c6.6,8.1,16.5,13.5,27.6,14
            c-0.2-1-0.3-2-0.3-3.1c0-7.4,6-13.4,13.4-13.4c3.9,0,7.3,1.6,9.8,4.2c3.1-0.6,5.9-1.7,8.5-3.3c-1,3.1-3.1,5.8-5.9,7.4
            c2.7-0.3,5.3-1,7.7-2.1C88.7,43,86.4,45.4,83.8,47.3z"></path></svg></span>
          </a>
          <a class="u-social-url" title="instagram" target="_blank" href="https://www.instagram.com/sosapatepeaca/?hl=es"><span class="u-icon u-social-icon u-social-instagram u-icon-7"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-06a9"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-06a9"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M55.9,38.2c-9.9,0-17.9,8-17.9,17.9C38,66,46,74,55.9,74c9.9,0,17.9-8,17.9-17.9C73.8,46.2,65.8,38.2,55.9,38.2
            z M55.9,66.4c-5.7,0-10.3-4.6-10.3-10.3c-0.1-5.7,4.6-10.3,10.3-10.3c5.7,0,10.3,4.6,10.3,10.3C66.2,61.8,61.6,66.4,55.9,66.4z"></path><path fill="#FFFFFF" d="M74.3,33.5c-2.3,0-4.2,1.9-4.2,4.2s1.9,4.2,4.2,4.2s4.2-1.9,4.2-4.2S76.6,33.5,74.3,33.5z"></path><path fill="#FFFFFF" d="M73.1,21.3H38.6c-9.7,0-17.5,7.9-17.5,17.5v34.5c0,9.7,7.9,17.6,17.5,17.6h34.5c9.7,0,17.5-7.9,17.5-17.5V38.8
            C90.6,29.1,82.7,21.3,73.1,21.3z M83,73.3c0,5.5-4.5,9.9-9.9,9.9H38.6c-5.5,0-9.9-4.5-9.9-9.9V38.8c0-5.5,4.5-9.9,9.9-9.9h34.5
            c5.5,0,9.9,4.5,9.9,9.9V73.3z"></path></svg></span>
          </a>
        </div>
        <div class="u-border-1 u-border-white u-expanded-width-lg u-expanded-width-md u-expanded-width-xl u-line u-line-horizontal u-opacity u-opacity-50 u-line-1"></div>
        <p class="u-align-center u-text u-text-4">© Copyright 2022  SOSAPAT - Sistema Operador de los Serviicos de Agua Potable y Alcantarillado del Municipio de Tepeaca de Negrete Puebla</p>
      </div></footer>
   
    <script  src="https://code.jquery.com/jquery-3.6.0.min.js"  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="  crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body></html>