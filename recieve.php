<?php
$cards = array("jk.png","01.png","02.png","03.png","04.png","05.png","06.png",
		"07.png","08.png","09.png","10.png","11.png","12.png","13.png");

$HighNum = $_POST['leftCard'];
$LowNum = $_POST['select'];
$num2 = mt_rand(0,13);

$LightCard = $num2;
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
		echo '<img src="../cards/',$cards[$HighNum],'">&nbsp;&nbsp;&nbsp;&nbsp;';
		echo '<img src="../cards/',$cards[$LightCard],'">'.PHP_EOL.PHP_EOL;
		echo "",$LowNum,"を選択しました。".PHP_EOL.PHP_EOL;

		if ($HighNum < $LightCard){
		   $result = "High";
		}  elseif ($HighNum > $LightCard){
		   $result = "Low";
		}  else  {
		   $result = $LowNum;
		}

		if ($LowNum == $result){
		   echo "You Win!".PHP_EOL.PHP_EOL;
		}  elseif ($LowNum <= $result){
		   echo "You Lose...".PHP_EOL.PHP_EOL;
		}  
		echo'<a href="send.php">もう一度挑戦</a>';
		?>
		</div>
    </body>
</html>
