<?php

include("header.php");
include("function.php");
?>

<h1 class="title"> PHP Projects </h1>

<?php 
$info = new Operation; 
 $info-> Get_Project("PHP");



include("footer.php");
?>