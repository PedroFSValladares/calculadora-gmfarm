<?php 
    function regraDeTres(){
        $var = $_POST['value1'];
        $result = $_POST['value2'] * $_POST['value3'] / $var;
        return $result;
    }
    //var_dump($_POST);
    echo regraDeTres();
?>