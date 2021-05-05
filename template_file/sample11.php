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
■ 少数以下切り捨て
3,000円のものから、100円引きした場合は、<?php print(floor(100 / 3000 * 100)); ?>%引きです。
<!-- 3% -->

■切り上げ(ceil) → <?php print(ceil(100 / 3000 * 100)); ?> 
<!-- 4% -->

■四捨五入(round)　→ <?php print(round(100 / 3000 * 100 , 3)); ?>
<!-- 3.333% -->

</pre>
</main>
</body>    
</html>