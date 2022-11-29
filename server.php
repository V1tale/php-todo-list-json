<?php 
$list = file_get_contents("todo.json");
$listPhp = json_decode($list, true);

if (isset($_POST["newTask"])) {
    $newOne = $_POST["newTask"];
    $listPhp[] = ["text" => $newOne, "done" => false];
    file_put_contents("todo.json", json_encode($listPhp));
}


header("Content-Type: application/json");
echo json_encode($listPhp);


?>