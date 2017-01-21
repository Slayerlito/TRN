<?php

$consulta = ControladorSQL::getControlador()->ejecutarSQL("SELECT * FROM trn_lkp_slider WHERE ID_NUM_POS > 0 ORDER BY ID_NUM_POS");
$i =0;
$slider[] = array();
while($row=  mysqli_fetch_array($consulta)){
    $slider[$i] = $row;
    $i++;
}

$smarty->assign("imagenes", $slider);

?>