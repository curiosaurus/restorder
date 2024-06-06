<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;
class ApiDemoController extends RestController 
{
    public function index_get(){
        echo 'I am restful API';
    }
}

?>