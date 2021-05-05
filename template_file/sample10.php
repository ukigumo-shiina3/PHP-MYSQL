<!doctype html>
<html lang="ja">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/style.css">

<title>PHP</title>
</head>
<body>
<header>
<h1 class="font-weight-normal">PHP</h1>    
</header>

<main>
<h2>Practice</h2>
<pre>
<?php
// 9時以降は開店、9時前は受付時間外
if (date('G') < 9) {
    print('＊ 現在受付時間外です');
}   else {
    print('ようこそ');
}

// 文字が入っているかいないか
$x = 'abc';
if ($x !== '') { //空ではない
    print('xには文字が入っています');
}

// 文字が入っているかいないか(条件の省略)
$x = 0; // 0=falese, 0以外=true
if ($x) { //空ではない
    print('xは0ではありません');
}

?>
</pre>
</main>
</body>    
</html>