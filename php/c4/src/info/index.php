<?php
$info = new \stdClass();
$info->width = 7;
$info->height = 6;
$info->strategies = [                            //another way to do it
    "Smart","Random"
];
echo json_encode($info); 


// $info = new GameInfo(WIDTH,HEIGHT, array_keys($strategies));
// echo json_encode($info); 

// class GameInfo {
//    public $width;
//    public $height;
//    public $strategies;
//    function __construct($width, $height, $strategies) {
//       $this->width= $width;
//       $this->height= $height;
//       $this->strategies= $strategies;
//     }   
// }

// echo(json_encode($info));

// write your code here … use uniqid() to create a unique play id.

?> 