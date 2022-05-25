<?php 
    function regraDeTres(){
        $var = trimReplace($_POST['value1']);
        $result = trimReplace($_POST['value2']) * trimReplace($_POST['value3']) / $var;
        return number_format($result, 2, ".", "");
    }

    function trimReplace($value){
        return str_replace(",", ".", trim($value));
    }
    //var_dump($_POST);
    echo regraDeTres();
?>