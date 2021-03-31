<?php
	$cards = array("jk.png","01.png","02.png","03.png","04.png","05.png","06.png",
	"07.png","08.png","09.png","10.png","11.png","12.png","13.png");
	$num1 = mt_rand(0,13);
?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	</head>
    <body>
    <div align="center">
    <font size="6">High&amp;Lowゲーム</font>
		<hr>
		<form action="HighAndLow.recieve.php"method="post">
		<?php
		//echo '<img src="../cards/',$cards[$num1],'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
		echo sprinf( '-%8s',<img src="../cards/',$cards[$num1],'">');
		echo '<img src="../cards/bg.png">';
		echo '<input type="hidden" name="leftCard" value="',$num1,'">';
		?>
		<br>
		<input type="radio" name="select" value="High">High&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="radio" name="select" value="Low">Low<br><br>
		<input type="submit"  value="決定">
		</form>
	</div>
    </body>
</html>
