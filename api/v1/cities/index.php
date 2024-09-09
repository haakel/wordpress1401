<?php 
include_once "../../../appiran/services/CityService.php";
echo "city endpoint is here......";
$c= new CityService();
$c->getCities([]);