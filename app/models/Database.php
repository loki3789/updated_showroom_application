<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Database
 *
 * @author lokesh
 */
class Database {
    //put your code here
    
    
    public function get_connection(){
        $connection = mysqli_connect("localhost", "root", "root", "jspdb");
        return $connection;
    }
}
