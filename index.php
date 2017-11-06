<html>
    <head>
        <title>Test Site</title>
        <?php
            require 'include/connection.php' ;
        ?>
    </head>

    <body>
        <?php
            $db = new db_connect();
            global $con ;
            $con = $db->connection();
            if($con->connect_error){
                die($con->connect_error);
            }else{
                echo "<br/>連線成功<br/>" ;
            }
        ?>
    </body>
</html>