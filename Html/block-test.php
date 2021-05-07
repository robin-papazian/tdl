<?php 
    foreach($_POST['array']['solo'] as $value => $key)
    {
        echo '<pre>';
        echo $value;
        echo '</pre>';
        //var_dump($value);
        //echo $value[$key];
    }
    
    var_dump($_POST['array']);
?>
            