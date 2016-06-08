<?php 
$title="Engr Md. Rasheduzzaman";
$currentPage= basename($_SERVER['PHP_SELF']);
$currentUrl="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
 
$db_host = "localhost"; 
$db_user = "root"; 
$db_pass = ""; 
$db_name = "mdrasheduzzaman"; 


if($currentPage=="index.php"){
$title="Home | Engr Md. Rasheduzzaman";


}
else if($currentPage=="aboutme.php"){
$title="About Me | Engr Md. Rasheduzzaman";
}
else if($currentPage=="contactme.php"){
$title="Contact Me | Engr Md. Rasheduzzaman";
}

else if($currentPage=="myeducation.php"){
$title="My Education | Engr Md. Rasheduzzaman";
}


























?>