<?php

include("header.php");
include("function.php");
?>

<h1 class="title"> Engr. Md. Rasheduzzaman </h1>

<?php 
$info = new Operation;
echo '<h3 class="title"> Present Address </h3>';
$info-> Get_Info("presentaddress");




echo '<h3 class="title"> Parmanent Address </h3>';
$info-> Get_Info("parmanentaddress");







echo '<h3 class="title"> Career Summary </h3>';
$info-> Get_Info("careersummary");

 


echo '<h3 class="title"> Work Experiences </h3>';
$info-> Get_Info("workexperience");

 


echo '<h3 class="title">Education </h3>';
$info-> Get_Info("education");

 


echo '<h3 class="title">Research Interest </h3>';
$info-> Get_Info("researchinterest");

 
include("footer.php");
?>