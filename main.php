<?php

function myname($name, $age){
    $firstObject = [
        'name'=>'Gideon Sainyeye',
        'age'=>40,
    ];
    $firstArray = ['Gideon Sainyeye', 40];
    // echo 'Object -->'.json_decode(json_encode($firstObject)).' array ---> '.json_encode($firstArray);
    // echo json_decode(json_encode($firstObject))->name;
    // echo $firstArray[0];
    // consversion
    $age = '20';
    echo ($firstArray);
};

myname('Gideon Sainyeye', 40);
?>