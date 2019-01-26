<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of View_Class
 *
 * @author lokesh
 */
class View_Class {

    public function render($data,$date,$maximum_of_day_or_week_or_month) {
        
        require realpath($_SERVER["DOCUMENT_ROOT"]) . '\PhpProject7\vendor\autoload.php';
        $loader = new Twig_Loader_Filesystem(($_SERVER["DOCUMENT_ROOT"]) . '\PhpProject7\app\views\view(html)');
        $twig = new Twig_Environment($loader);
        $array_of_data = array('model' => $data[0], 'has_queries' => $data[1], 'date' => $date, 'day_or_week_or_month' => $maximum_of_day_or_week_or_month);
        echo $twig->render('Show_result_of_query.html', $array_of_data);
    }

}
