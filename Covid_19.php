<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
		<title>รายงานสถานการณ์ โควิด-19</title>
	</head>
	<body>
		<?php

		    @$get_data=file_get_contents('https://covid19.th-stat.com/api/open/today');
			$covid19=json_decode($get_data);
            
			$Confirmed=$covid19->Confirmed;
			$Recovered=$covid19->Recovered;
			$Hospitalized=$covid19->Hospitalized;
			$NewConfirmed=$covid19->NewConfirmed;
			$NewRecovered =$covid19->NewRecovered;
			$NewHospitalized =$covid19->NewHospitalized;
			$NewDeaths =$covid19->NewDeaths;
			$UpdateDate=$covid19->UpdateDate;
			$Deaths=$covid19->Deaths;
		?>

		<!--Bootstrap4 -->
		<div class="container">
			<div class="row">
				<div class="col col-sm-12">
					<h3 style="margin-top: 30px;"> รายงานสถานการณ์ โควิด-19 </h3>
					<h5>อัพเดทข้อมูลล่าสุด :  
						<?php echo  $UpdateDate;?> </h5>
				</div>

				<div class="col-12 col-sm-12">
					 <div class="alert alert-danger" role="alert">
						<b>ติดเชื้อรายใหม่ <?php echo  $NewConfirmed;?>  </b>
					</div>
				</div>

				<div class="col-6 col-sm-3">
					<div class="alert alert-info" role="alert">
						<b>ติดเชื้อสะสม  <br> <?php echo  $Confirmed;?>  </b>
					</div>
				</div>
				<div class="col-6 col-sm-3">
					<div class="alert alert-success" role="alert">
						<b>หายแล้ว <br> <?php echo  $Recovered;?> </b>
					</div>
				</div>
				<div class="col-6 col-sm-3">
					<div class="alert alert-warning" role="alert">
						<b>รักษาอยู่ใน รพ.  <br> <?php echo  $Hospitalized;?> </b>
					</div>
				</div>
				<div class="col-6 col-sm-3">
					<div class="alert alert-dark" role="alert">
						<b>เสียชีวิต <br> <?php echo  $Deaths;?> </b>
					</div>
				</div>

			</div>
		</div>
	</body>
</html>
