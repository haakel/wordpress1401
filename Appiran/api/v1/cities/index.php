<?php 
include_once "../../../loader.php";

use \App\services\CityService;
use \App\Utilities\Response;

// echo "city endpoint is here......";
$c= new CityService();
$result = $c->getCities([1,2,3,4,5]);
Response::respond($result,200);