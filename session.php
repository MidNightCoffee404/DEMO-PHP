<?php
// $color = array();
// $color = ["green", "blue", "red"];

// echo $color[2];

// $color[] = "black";
// echo json_encode($color)."<br>";

// $color[0] = "yellow";
// echo json_encode($color)."<br>";

// unset($color[3]);
// echo json_encode($color)."<br>";

// $data = ["mario shargao", 76, "Dasmarinas, Cavite", "BSIT", 4114, "mario.shargao@mrbros.mushroom"];
// echo json_encode($data)."<br>";

// $indexArr = ["Mario", "BSIT", "mario.shargao@sdca.edu.ph", "Dasmarinas, Cavite"];
// echo

// $student = ["Name" => "Mario",
//             "Course" => "BSIT",
//             "Email" => "mario.shargao@sdca.edu.ph",
//             "address" => "Dasmarinas, Cavite"];

// // $student["address"] = "Dasmarinas, Cavite";
// // echo json_encode($student);

// foreach($student as $row){
//     echo $row."<br>";
// }


// function showname($name){
//     echo "Want some mushroom, ".$name;
// }

// $username = "Mario";
// showname($username);

// function show($name, $num){
//     echo "Want some mushroom, ".$name.", I'll give you ".$num." high quality that i got.";
// }

// $num = 14;
// $name = "Mario";
// show($name, $num);

function computefair($fairamount, $discount){
    $totaldiscount = $fairamount * ($discount/100);
    $totalfair = $fairamount - $totaldiscount; 
    return $totalfair;
}

echo computefair(200,20);

?>