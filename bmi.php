<?php
function bmi ($height, $mass) {
    // 体重、身長
    $height = $height / 100; ## cmに戻す
    $mass = $mass / ($height * $height);

    return $mass;
}

$bmi = bmi (170, 50);