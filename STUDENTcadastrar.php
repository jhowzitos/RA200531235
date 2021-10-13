<?php
require __DIR__.'/vendor/autoload.php';
//validação do POST
if(isset($_POST['name'], $_POST['email'], $_POST['password'], $_POST['phone'], $_POST['course'], $_POST['ativo'],)) {
    die('STUDENTcadastrar');
}
//echo "<pre>"; print_r($_POST); echo "</pre>"; exit;
include __DIR__.'/includes/header.php';
include __DIR__.'/includes/ALUNOformulario.php';
include __DIR__.'/includes/footer.php';
 