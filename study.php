<?php
// bmi測定
function bmi ($height, $mass) {
    $height = $height / 100;
    $mass = $mass / ($height * $height);
    return $mass;
}

$bmi = bmi(170, 80);

if ($bmi < 18.5) {
    print "痩せてるよ";
} else if ($bmi > 25) {
    print "ダイエットしよー";
} else {
    print "標準だよー";
}
?>

<?php
// $counter = 0;
// while($counter < 31) {
//     $counter = $counter + 1;
//     print $counter;
// }

for($counter = 1; $counter <= 31; $counter++){
    print $counter;
}
?>

<?php
$member["name"] = "フジキド";
$member["age"] = "三十路";
$member["work"] = "ニンジャスレイヤー";

foreach ($member as $key => $value) {
    print $key. "は" .$value. "です\n";
}
