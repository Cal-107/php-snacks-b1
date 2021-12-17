<!-- Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta -->
<?php
$arrayEmpty = [];
for ($i=0; $i <= 15; $i++) { 
    $num = rand(1, 100);
    if(!in_array($num, $arrayEmpty)) {
        $arrayEmpty[]= $num;
    } else {
        $i--;
    }
}

// stampo così perchè su MAC il var_dump non è tanto leggibile
for ($i=0; $i < count($arrayEmpty) ; $i++) { 
    echo $arrayEmpty[$i];
    echo '<br>';
}
?>