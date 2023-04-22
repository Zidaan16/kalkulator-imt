<!DOCTYPE html>
<html>
<head>
	<title>Kalkulator IMT</title>
</head>
<body>
	<br>
	<div class="table">
		<table>
			<tr>
				<th>Indeks Massa Tubuh</th>
				<th>Status</th>
			</tr>
			<tr>
				<td>Kurang dari 18.05</td>
				<td>Kurus</td>
			</tr>
			<tr>
				<td>Kurang dari 24.09</td>
				<td>Normal</td>
			</tr>
			<tr>
				<td>Kurang dari 29.09</td>
				<td>Gemuk</td>
			</tr>
			<tr>
				<td>Lebih dari 29.09</td>
				<td>Obesitas</td>
			</tr>
		</table>
	</div>
	<br>
	<div class="box">
		<form method="post">
			<input type="number" name="tb" placeholder="Tinggi badan" id="a"><br>
			<input type="number" name="bb" placeholder="Berat badan" id="b">
			<input type="submit" name="submit" id="c">
		</form>
	</div>
	<style type="text/css">
		* {
			font-family: Verdana;
		}
		.table {
			margin: auto;
			width: 700px;
			background-color: powderblue;
			box-shadow: 0px 0px 10px gray;
			padding: 2%;
		}
		table {
			border-collapse: collapse;
			margin: auto;
			width: 50%;
		}
		table, th, td{
			border-top: 1px solid black;
			border-bottom: 1px solid black;
		}
		th {
			text-align: left;
			height: 40px;
		}
		td {
			padding: 5px;
		}
		.box {
			position: relative;
			margin: auto;
			width: 700px;
			padding: 2%;
			background-color: gainsboro;
			box-shadow: 0px 0px 10px gray;
			border-radius: 8px;
		}
		.footer {
			position: fixed;
			text-align: center;
			width: 99%;
			color: #a9a9a9;
			margin-top: 5px;
		}
		form {
			margin-left: 33%;
		}
		#a {
			width: 53%;
			margin-bottom: 7px;
		}
		#a, #b {
			height: 30px;
			padding-left: 5px;
			border-radius: 5px;
			border: solid 1px gray;
		}
		#c {
			height: 33px;
			background-color: aquamarine;
			border: solid 1px green;
			border-radius: 5px;
		}
		.box-hasil {
			color: green;
			background-color: lightgreen;
			margin: auto;
			width: 730px;
			padding: 15px;
			border: solid 2px limegreen;
			border-radius: 5px;
		}
	</style>
	<br>
	<div class="box-hasil">
<?php
if (isset($_POST['submit'])) {
	$tb = $_POST['tb'];
	$bb = $_POST['bb'];
	$a = strval($tb);
	$b = $a[0].".".$a[1].$a[2];
	$tb = floatval($b);
	$tb1 = $tb * $tb;
	$hasil = $bb / $tb1;
	$hasil = strval($hasil);
	$hasil1 = $hasil[0].$hasil[1].$hasil[2].$hasil[3].$hasil[4];
	$hasil1 = floatval($hasil1);
	if ($hasil1 < 18.05) {
		echo "Kamu kurus";
	}elseif ($hasil1 < 24.09) {
		echo "Kamu normal";
	}elseif ($hasil1 < 29.09) {
		echo "Kamu gemuk";
	}elseif ($hasil1 > 29.09) {
		echo "Kamu obesitas";
	}else{
		echo "Error";
	}
	echo "</br>".$hasil1;
}
?>
	</div>
	<div class="footer">
		copyright &copy; zidan
	</div>
</body>
</html>