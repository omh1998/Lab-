<?php 

include 'dbhandler.php';



function stars($av){
    $s = "";
    if ($av == 0) {
        for ($i=0; $i < 5; $i++) { 
            $s .= '<i class="fa fa-star fa-2x" style="color:grey"></i>';
        }  
    }
    for ($i=0; $i < floor($av); $i++) { 
        $s .= '<i class="fa fa-star fa-2x" style="color:goldenrod"></i>';
    }
    if (($av - floor($av)) > 0.4) {
        $s .= '<i class="fas fa-star-half fa-2x" style="color:goldenrod"></i>';
    }
    return $s;
}