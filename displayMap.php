<?php
 if(isset(){
   //get variable from the form
   $location = "https://www.google.com/maps/place/MMF+Systems+(India)+Pvt.+Ltd./@".$lat.",".$long.",".$zoom."z/data=!4m12!1m6!3m5!1s0x0:0x1c2e35caf2b1e50!2sMMF+Systems+(India)+Pvt.+Ltd.!8m2!3d18.5587549!4d73.7752235!3m4!1s0x0:0x1c2e35caf2b1e50!8m2!3d18.5587549!4d73.7752235";
   //$location =  "https://www.openstreetmap.org/node/16174445#map=11/18.5210/73.8769";
   
   header($location);
}
?>