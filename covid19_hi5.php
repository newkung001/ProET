<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
		<title>รางานสรุปเคสโควิด19</title>
	</head>
	<body>
		<?php
		    @$get_data=file_get_contents('https://covid19.th-stat.com/api/open/cases/sum');
			$covid19=json_decode($get_data);

			echo '<pre>';
			print_r($covid19);
			echo '</pre>';
		?>
	</body>
