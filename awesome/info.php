 
  <?php
	// because this variable is global, it is accessible in all included files as well.
	$page_title = "My Site";
?>
 <?php include('includes/head.html.php'); ?>  
    <div id="content">
    
    	<p class="centered">Watch the video closely! After watching click the 'Quiz' button below to take the quiz.</p>
         <div class="goToNext_orSubmit_button">
        <a href="quiz.php"><button class="nextButton" id="goToQuizPage" value="Quiz">Quiz</button></a>
   		</div><!--goToNext_orSubmit_button-->
        <div class="videowrapper">
        	<iframe class="iframe" width="560" height="315" src="https://www.youtube.com/embed/hnA2po5J9og" frameborder="0" allowfullscreen align="middle"></iframe>
        </div><!--videowrapper-->
       
        
    </div><!--content-->
<?php include('includes/foot.php'); ?>