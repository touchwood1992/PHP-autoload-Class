<?php
echo "Hello all"; echo "<br>";
   function loadModel($class) {
    $path = dirname(__FILE__) . '/models/';
        if(file_exists($path . $class .'.php'))
        {
            require_once $path . $class .'.php';
        }    
   }
   
   spl_autoload_register(function ($class) { 

            $path = dirname(__FILE__) . '/controllers/';
            if(file_exists($path . $class .'.php'))
            {
                require_once $path . $class .'.php';
            }
    
    });
    
   spl_autoload_register(function($class) {

            $path = dirname(__FILE__) . '/views/';
            if(file_exists($path . $class .'.php'))
            {
                require_once $path . $class .'.php';
            }
    
   });


   spl_autoload_register('loadModel');

$h_controller = new HController();
$h_controller = new HView();
$h_controller = new Hmodel();
?>