<?php
require __DIR__.'/vendor/autoload.php';

use \App\Entity\vagaCurso;

if(isset($_POST['nameCOURSE'], $_POST['DESCRPTION'], $_POST['dateSTART'], $_POST['dateFINISH'], $_POST['STATUS'])){
    $obvagaCurso = new vagaCurso;
    $obvagaCurso->nameCOURSE = $_POST['nameCOURSE'];
    $obvagaCurso->DESCRPTION = $_POST['DESCRPTION'];
    $obvagaCurso->dateSTART = $_POST['dateSTART'];
    $obvagaCurso->dateFINISH = $_POST['dateFINISH'];
    $obvagaCurso->$STATUS = $_POST['STATUS'];
    

echo "<pre>"; print_r($obvagaCurso); echo "</pre>"; exit;  

}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/CURSOformulario.php';
include __DIR__.'/includes/footer.php';
 