<?php
// ファイルを開く
$openFile = fopen('./data/data.txt', 'r');
// ファイル内容を1行ずつ読み込んで出力
while ($line = fgets($openFile)) {
    echo nl2br($line);
}
// ファイルを閉じる
fclose($openFile);

?>