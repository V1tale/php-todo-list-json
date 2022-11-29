<?php 
$list = ["guardare il pollo che si scongela", "aggiungere zucchero ai popcorn", "riscaldare il caffè", "portare a spasso il pitone"];


if (isset($_POST["newTask"])) {
    $newOne = $_POST["newTask"];
    $list[] = $newOne;
}


header("Content-Type: application/json");
echo json_encode($list);


?>