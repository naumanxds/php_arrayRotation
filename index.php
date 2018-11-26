<?php


/**
* @param $arr input array that needs rotation
* @param $low lowest index where rotation needs to be start 
* @param $high heighest index till where the rotation needs to take place
* @param $num number of rotations from that need to take place
* @return $arr result array
*/
function myRotate1D($arr, $low, $high, $num)
{
    for($l = 1; $l <= $num; $l++) {
        $temp = $arr[$high];

        for($j = $high; $j >= $low; $j--) {
            if($j != $low) {
                $arr[$j] = $arr[$j-1];
            } else {
                $arr[$j] = $temp;
            }
        }
    }

    return $arr;
}


/**
* @param $arr input 2D square array
* uses no additional space
* @return $arr result arrat with 90 degree rotation
*/
function myRotaion2D($arr) {
    $size = sizeof($arr);

    for($i=0; $i < $size; $i++) {
        for($j=$i+1; $j<$size; $j++) {
            $temp = $arr[$i][$j];
            $arr[$i][$j] = $arr[$j][$i];
            $arr[$j][$i] = $temp;
        }
    }

    $loop = 0;

    if($size%2 == 0) {
        $loop = $size/2;
    } else {
        $loop = ($size-1)/2;
    }

    for($x=0, $y=$size-1; $x<$loop; $x++, $y--) {
        for($i=0; $i<$size; $i++) {
            $temp = $arr[$i][$x];
            $arr[$i][$x] = $arr[$i][$y];
            $arr[$i][$y] = $temp;
        }
    }

    return $arr;
}


$arr1D = [1,2,3,4,5,6,7,8,9,0];

$arr2D = [
    [1,2,3,4],
    ['a','b','c'],
    ['A','B','C']
];


var_dump(myRotate1D($arr1D, 2, 8, 2));
var_dump(myRotate2D($arr2D));