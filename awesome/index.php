 
  <?php
	// because this variable is global, it is accessible in all included files as well.
	$page_title = "My Site";
?>
 <?php include('includes/head.html.php'); ?>  
    <div id="content">
    
    	<p class="centered">Watch the video for instructions. To skip just smash that 'Next' button.</p>
        <div class="goToNext_orSubmit_button">
        <a href="info.php"><button class="nextButton" id="goToInfoPage" value="NEXT">NEXT</button></a>
   		</div><!--goToNext_orSubmit_button-->
        <div class="videowrapper">
        	<iframe  class="iframe" width="560" height="315" src="https://www.youtube.com/embed/xRhbj8lOvjM" frameborder="0" allowfullscreen align="middle"></iframe>
        </div><!--videowrapper-->
   
        
    </div><!--content-->
<?php include('includes/foot.php'); ?>