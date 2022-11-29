<?php 
$list = ["guardare il pollo che si scongela", "aggiungere zucchero ai popcorn", "riscaldare il caffè", "portare a spasso il pitone"];




header("Content-Type: application/json");
echo json_encode($list);

?>