<?php
    require 'vendor/autoload.php' ;

    $app = new \Slim\Slim() ;
    $app->get('/',function(){
        echo "<h1>Hello World</h1>" ;
    }) ;

    //測試slim framework api
    $app->get('/api/:name',function($name){
        echo "Hello ! ".$name ;
    });

    $app->run();
?>