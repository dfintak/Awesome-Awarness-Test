 
  <?php
	// because this variable is global, it is accessible in all included files as well.
	$page_title = "Quiz Page Awesome";
?>
 <?php include('includes/head.html.php'); ?>
  

<?php
	// the main name of the array is $q_and_ans. 
		// inside of that array is an array called q, each of which is each question
			//inside of that array are arrays called opts, which is each option for each question
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

 <div id="form_content">
 

<form method="post" action="results.php">
    <?php
	//question # = 0
    $q_count = 0;
	// for each item in $q_and_ans treat it as $q
    foreach($q_and_ans as $q) {
		// this helps us number the options
        $opt_count = 0;
    ?>
        <p>
        
        <?php 
		// display question based on the value of $q['q'] which is each question. 
		// $q_count + 1 displays the number of the question
		echo ($q_count + 1).'.) '.' '.$q['q'].'<br />'.'<br />';
		
		// NESTED FOREACH LOOP
		
		//for each sub array 'opts' inside of $q, we'll call 'em $opt
			// then we use php to interact with HTML to display one by one the options as radio buttons
			// id/name become (in HTML) the number of the option.
			//the value of each is $opt, which is each choice in the sub-array.
			// in the label we echo $opt which lets us display the options for answering each question
        foreach($q['opts'] as $opt) {
        ?>
            <input type="radio" id="<?php echo 'opt-'.$opt_count; ?>" value="<?php echo $opt; ?>"
                name="<?php echo 'q-'.$q_count; ?>" required>
                <? 
				// make the radio buttons sticky
				// is $q['opt's] set and does $q['otps'] == one of the options in $opt? True:'checked' or False:
				// in other words, if one of the options is clicked, remember which one it was.
				isset($q['opts']) and $q['opts'] == $opt ? 'checked' : '' ?>
            <label for="<?php echo 'opt-'.$opt_count; ?>"><?php echo $opt; ?></label><br /><br>
    <?php
            $opt_count++;
        }
        unset($opt);
        $q_count++;
    }
    unset($q);
    ?>
    </p><br>
    <!--<div class="goToNext_orSubmit_button">-->
    <button type="submit" name="submit" value="Submit">Submit</button>
    <!--<input type="submit" name="submit" value="Submit">-->
   <!-- </div>-->
</form>
<br>
<br>
<br>
<br>
<br>

</div><!--form_content-->



<?php include('includes/foot.php'); ?>


