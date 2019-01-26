<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Controller_to_save_data
 *
 * @author lokesh
 */
class Controller_to_save_data extends Controller {
    //put your code here
     public function process_request() {

        $category = $_REQUEST['category'];
        
        require_once(realpath($_SERVER["DOCUMENT_ROOT"]) . '\PhpProject7\app\models\Database_class.php');
        
        $date = date("Y-m-d");
        $time = date("h-i-sa");

        $t = new Database_class;
        $t->saverecords($category, $time, $date);
        
        
        header('location:/PhpProject7/app/views/view%28html%29/Homepage.html');
    }
}
