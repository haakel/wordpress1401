<?php
namespace App\utilities;
 class Response {
    
    public static function respond($data,$status_code) {
        // header("HTTP/1.1 $satus_code OK");
        header('content-type: application/json'); 
        echo json_encode($data);
     }

 } 