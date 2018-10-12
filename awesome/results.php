<?php
	// because this variable is global, it is accessible in all included files as well.
	$page_title = "Quiz Page Awesome";
?>
 <?php include('includes/head.html.php'); ?> 
 
 <?php
 $q_and_ans = array(
	array('q' => 'What\'s the narrators name?',
		'opts' => array(
			'Greg Schmitz',
			'Greg Sanders',
			'Greg Smith'),
			'ans' => 0),
	array('q' => 'What is Greg\'s new friend\'s name?',
		'opts' => array(
			'Jose',
			'Manuel',
			'Manuelo'),
			'ans' => 1),
	array('q' => 'What beer are they drinking?',
		'opts' => array(
			'Pacifico',
			'Corona',
			'Pilsener'),
			'ans' => 2),
	array('q' => 'Where was the Mariscopa video taken?',
		'opts' => array(
			'Ecuador',
			'El Salvador',
			'Mexico'),
			'ans' => 1),
	array('q' => 'What was in the narrator\'s bowl that he failed to mention?',
		'opts' => array(
			'Shrimp',
			'Octopus',
			'Squid'),
			'ans' => 0),
	array('q' => 'What color was Manuel\'s shirt?',
		'opts' => array(
			'Green',
			'White',
			'Blue'),
			'ans' => 2),
	array('q' => 'What was printed on the beer bucket?',
		'opts' => array(
			'Corona Light',
			'Corona Extra',
			'Modelo'),
			'ans' => 1),
	array('q' => 'What kind of vehicle is behind Manuel?',
		'opts' => array(
			'Car',
			'Truck',
			'There is no vehicle'),
			'ans' => 1),
	array('q' => 'What color is the roof over the narrator\'s head?',
		'opts' => array(
			'Brown',
			'Tan',
			'Green'),
			'ans' => 2),
	array('q' => 'What kind of animal is on Manuel\'s shirt?',
		'opts' => array(
			'Crocodile',
			'Duck',
			'There is no animal'),
			'ans' => 0)
)
?>
<div id="results_content">
 <?php
	include('includes/functions.php');
	//// SUBMIT
	//if the user hits the submit button
if(isset($_POST['submit'])) {
	//display the following <p> one time
    echo '<p>Your answers are:<br />'.'<br>';
	$score = 0;
    $count = 0;
    foreach($q_and_ans as $q) {
	// if the question answered = the correct answer
		if ($_POST['q-'.$count] == $q['opts'][$q['ans']]){
			//increase score
			$score++;
			}
			// display # of question
        echo ($count + 1) .') ';
        if(isset($_POST['q-'.$count]))
            echo $_POST['q-'.$count];
        else
			// or display Not Selected
            echo 'Not Selected';
			// After each answer the user chose
        echo '<br> Correct Answer: '.$q['opts'][$q['ans']].'<br />'.'<br>';
        $count++;
		
    }
    unset($q);
    echo '</p>';
	echo '<p>You answered '.$score .' correctly</p>';
	/*$grade = $score / 10;
	$percentgrade = $grade * 100;
	//echo $grade;
	echo $percentgrade .'%';
	*/
	yourgrade($score);
}
?>
</div>
 
 
 <?php include('includes/foot.php'); ?>