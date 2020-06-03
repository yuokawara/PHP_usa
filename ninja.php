<?php
// $nijya[1] = "ダークニンジャ＝サン";
// $nijya[2] = "ナラクニンジャ＝サン";
// $nijya[3] = "デモリッションニンジャ＝サン";
// $nijya[4] = "ニンジャスレイヤー＝サン";
// $nijya[5] = "ドラゴンドージョー＝サン";

// $key = mt_rand(1, 5);

// print $nijya[$key];
?>

<?php
// リファクタリングと関数化
include("common.php");

$ninja[] = "ダークニンジャ＝サン";
$ninja[] = "ナラクニンジャ＝サン";
$ninja[] = "デモリッションニンジャ＝サン";
$ninja[] = "ニンジャスレイヤー＝サン";
$ninja[] = "ドラゴンドージョー＝サン";

print random($ninja);
?>
