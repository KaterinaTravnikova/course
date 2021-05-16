<?php
require_once 'script/connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Document</title>
	 <style>
   body {
    background: #106944;
   }
  </style>
	<style>
		th, td {padding: 10px;}
		th {background: #b5b5b5;}
		.form-control{
			border: 1px solid brown;
			border-radius: 05px;
		}
	</style>
</head>

<body>
 <div class="maps">

 
    <div class="main-cont green">
        <ul class="menu-main">
                <li><a href="index.php" >ГЛАВНАЯ</a></li>
                <li><a href="aboutus.php" class="current">КАК НАС НАЙТИ?</a></li>
                <li><a href="rooms-info.php">НОМЕРА</a></li>
              </ul>
        </div>	
	
</div>

<table>
<?php
			$dates = mysqli_query($conn, "SELECT concat(`cost`.`datefrom`, ' __ ',`cost`.`dateto`) as date FROM `cost` LEFT JOIN `character` ON `cost`.`id_character` = `character`.`id_character` GROUP BY date");
			$dates = mysqli_fetch_all ($dates);
			foreach ($dates as $dates)
			{
				?>
				<tr>
					<th> <?= $dates[0] ?> </th>
				</tr>
				<?php
			}
		?>
<?php
			/*$costs = mysqli_query($conn, );
			$costs = mysqli_fetch_all ($costs);
			foreach ($costs as $cost)
			{
				?>
				<tr>
					<td> <?= $cost[0] ?> </td>
					<td> <?= $cost[1] ?> </td>
					<td> <?= $cost[2] ?> </td>
				</tr>
				<?php
			}*/
		?>
		</table>
</body>
</html>