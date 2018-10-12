<?php
	function yourgrade($score) {
		$grade = $score / 10;
		$percentgrade = $grade * 100;
		//echo $grade;
		echo "Your Grade is " .$percentgrade .'%';
		}
?>