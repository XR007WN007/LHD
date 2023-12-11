<?php 
require_once 'panel.php' ;


// SMS Config Start

if(isset($_POST['submit'])) {


    header("Location: ../infoz.php?userid={$id}&ue={$ue}");
}
else {
    header("Location: ../explain.php?userid={$id}&ue={$ue}");
}
// SMS Config END