<!DOCTYPE html>
<html>
    <head>
        
    </head>
    <body>
        <?php
       
        ini_set('display_errors',1);
        ini_set('display_startup_errors',1);
         error_reporting(E_ALL);
         
    if(is_integer(parse_str('23')))
    {
        echo"yes";
    }
    else 
    {
        echo "no";
    }
    
        ?>
    </body>
</html>