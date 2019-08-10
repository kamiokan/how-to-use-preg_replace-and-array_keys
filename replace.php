<?php
// preg_replace と array_keys を使った一括置き換えの動作確認テスト

$string = "人間を人間たらしめるのは愛なのではないか。そこに愛はあるのか。それを私は問いたい。";
$map = [
    '/人間/' => '馬',
    '/愛/'  => '走る本能',
];
$string = preg_replace(array_keys($map), $map, $string);
echo $string . "\n";
