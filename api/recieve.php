<?php
$cards = array("jk.png","01.png","02.png","03.png","04.png","05.png","06.png",
		"07.png","08.png","09.png","10.png","11.png","12.png","13.png");

$leftCard = $_POST['leftCard'];
$selectedOption = $_POST['select'];
$rightCard = mt_rand(0, 13);
?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	</head>
    <body>
	    <div align="center">
	    <font size="6">High&amp;Lowゲーム</font>
		<hr>
		<?php
		echo '<img src="../cards/',$cards[$leftCard],'">&nbsp;&nbsp;&nbsp;&nbsp;';
		echo '<img src="../cards/',$cards[$rightCard],'">'.PHP_EOL.PHP_EOL;
		echo "",$selectedOption,"を選択しました。".PHP_EOL.PHP_EOL;

		if ($leftCard < $rightCard){
		   $result = "High";
		} elseif ($leftCard > $rightCard){
		   $result = "Low";
		} else {
		   $result = $selectedOption;
		}

		if ($selectedOption == $result){
		   echo "You Win!".PHP_EOL.PHP_EOL;
		} else {
		   echo "You Lose...".PHP_EOL.PHP_EOL;
		}
		echo '<a href="send.php">もう一度挑戦</a>';
		?>
		</div>
    </body>
</html>
