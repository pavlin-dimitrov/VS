<?php
if (!empty($_POST['date'])) {
	if ($_POST['date'] % 2 == 0) {
		echo "It's will rain today! Put some clothes on!";
	} else  {
		echo "It's will be very hot today, show some skin!";
	}
} else {
	echo "Write some day of the month! The field is empty!";
}
