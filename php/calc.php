
    <meta charset="utf-8">
 

<?php

// get posted data
	$date = $_POST['deposit_date'];
    $date = "2019-06-21";
	$deposit_amount = $_POST['deposit_amount'];
	$deposit_amount = 500000;
	$time_of_deposit = $_POST['time_of_deposit'];
	$time_of_deposit = "one";
    $yes_no = $_POST['yes_no'];
    $yes_no = "no";
	$deposit_amount_add = $_POST['deposit_amount_add'];
	$deposit_amount_add = 10000;


	if (isset($_POST['submit'])){
		if ($yes_no == "yes"){

			$month = date_parse_from_format("Y-m-d", $date)['month'];
			$daysn = date_parse_from_format("Y-m-d", $date)['day'];
			$summa = 0;
			for ($x = 1; $x < 13; $x++){
				$summa += cal_days_in_month(CAL_GREGORIAN, $x, date("Y"));
			}
			$daysy = $summa;
			$deposit_amount = (int)$deposit_amount;
			$deposit_amount_add = (int)$deposit_amount_add;
			$summn = $deposit_amount + ($deposit_amount + $deposit_amount_add)*$daysn*(10/$daysy);
		}
		if ($yes_no == "no"){
			$month = date_parse_from_format("Y-m-d", $date)['month'];
			$daysn = date_parse_from_format("Y-m-d", $date)['day'];
			$summa = 0;
			for ($x = 1; $x < 13; $x++){
				$summa += cal_days_in_month(CAL_GREGORIAN, $x, date("Y"));
			}
			$daysy = $summa;
			$deposit_amount = (int)$deposit_amount;
			$percentage_rate = 10;
			$summn = $deposit_amount + ($deposit_amount)*$daysn*($percentage_rate/$daysy);
			echo json_encode($summn);

		}

	}

	
?>
