<?php
    if (!empty($_GET['a'])&&!empty($_GET['b'])) {
        $n1 = $_GET['a'];
        $n2 = $_GET['b'];
        if (is_numeric($n1)&&is_numeric($n2)) {
            $result = $n1 + $n2;
            echo $result;   
        }else {
            echo "Los datos deben ser numeros";
        }  
    }else {
        echo "Debe de rellenar todos los datos";
    }
?>