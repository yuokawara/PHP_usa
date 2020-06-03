<?php
function random($array)
{

    // 範囲を求め、＄min、$maxの変数にする
    $min = 0;
    $max = count($array) - 1;

    // mt_random関数を使用
    $key = mt_rand($min, $max);

    $result = $array[$key];
    return $result;
}
?>