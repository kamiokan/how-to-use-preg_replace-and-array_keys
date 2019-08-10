<?php
// preg_replace() と array_keys() を使った一括置き換えの動作確認テスト
// @see https://www.php.net/manual/ja/function.preg-replace.php
// @see https://www.php.net/manual/ja/function.array-keys.php
// @see https://www.php.net/manual/ja/reference.pcre.pattern.modifiers.php

$string = "人間を人間たらしめるのは愛なのではないか。そこに愛はあるのか。それを私は問いたい。";
$map = [
    '/人間/' => '馬',
    '/愛/'  => '走る本能',
];
$string = preg_replace(array_keys($map), $map, $string);
echo $string . "\n";
