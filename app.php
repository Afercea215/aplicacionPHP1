<?php
    if (!empty($_GET['a'])&&!empty($_GET['b'])) {
        $n1 = $_GET['a'];
        $n2 = $_GET['b'];
        
        $result = $n1 + $n2;
        echo $result;
    }else {
        echo "Debe de rellenar todos los datos";
    }
?>