<?php
	session_start();
		// var_dump($_SESSION['total']);
		// var_dump($_SESSION['places']);
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP Advanced Intermediate - Make Money!</title>
	<style>
		.container {
			margin: 0 auto;
			width: 850px;
		}
		.location {
			position: relative;
			width: 200px;
			height: 200px;
			float: left;
			border: 1px solid black;
			text-align: center;
			margin-right: 10px;
			background-color: #ffffcc;
		}
		.activities {
			border: 1px solid black;
			padding: 5px;
			max-height: 300px;
			overflow: scroll;
		}
		[name=gold_total] {
			background-color: yellow;
			height: 30px;
			font-size: 1.3em;
			color: green;
		}
		input[type=submit].gold {
			position: absolute;
			bottom: 10px;
			left: 40px;
			font-size: 1.3em;
			font-family: Tahoma;
			background-color: yellow;
		}
		input[value="Reset!"] {
			background-color: #cccccc;
			border-color: gray;
			font-size: 1.1em;
		}
		.clear {
			clear: both;
		}
	</style>
</head>
<body>
	<div class="container">
		<p>Your Gold: <input type="text" name="gold_total" id="gold_total" value="<?php 
				if (isset($_SESSION['total']))
					echo $_SESSION['total']; 
				else
					echo '0';
			?>" disabled="disabled">
			
		</p>

		<div class="location">
			<h2>Farm</h2>
			<h2>(earns 10-20 golds)</h2>
			<form action="process2.php" method="post">
				<input type="hidden" name="place" value="farm">
				<input class="gold" type="submit" value="Find Gold!">
			</form>
		</div>
		<div class="location">
			<h2>Cave</h2>
			<h2>(earns 5-10 golds)</h2>
			<form action="process2.php" method="post">
				<input type="hidden" name="place" value="cave">
				<input class="gold" type="submit" value="Find Gold!">
			</form>
		</div>
		<div class="location">
			<h2>House</h2>
			<h2>(earns 2-5 golds)</h2>
			<form action="process2.php" method="post">
				<input type="hidden" name="place" value="house">
				<input class="gold" type="submit" value="Find Gold!">
			</form>
		</div>
		<div class="location">
			<h2>Casino</h2>
			<h2>(earns/takes 0-50 golds)</h2>
			<form action="process2.php" method="post">
				<input type="hidden" name="place" value="casino">
				<input class="gold" type="submit" value="Find Gold!">
			</form>
		</div>
			<form action="process2.php" method="post">
				<input type="hidden" name="reset" value="reset">
				<input type="submit" value="Reset!">
			</form>
		<div class="clear"></div>
		<p>Activities:</p>
		<div class="activities">
			<?php 
				
					// echo implode(' ', $_SESSION['result']);
				if (isset($_SESSION['result'])) {
					echo implode('', array_reverse($_SESSION['result']));
				}
				
			?>
		</div>
	</div>
</body>
</html>
<?php
	// $_SESSION = array();
?>