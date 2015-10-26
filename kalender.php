<!-- PAGE HEADER -->
<!--definerer variabler der bruges til at vise sidens title og til at loade et stylesheet der skifter baggrundsbilledet i "content-image" sectionen-->
<!--desuden bruges include til at loade vores header-->
<?php

	
	$pageTitle = 'Kalender';
	  
	include('includes/header.php');
	
?>
<!-- PAGE CONTENT -->
	<section id="baggrund">
	<article class="text">
		<h1>Kalender</h1>
		
		<p>Her ser du en oversigt over vores forskellige spillelokaler. 
		Der bliver spillet kampagner hele ugen, alle dage noget nyt og spændende. 
		Tryk på et emne for mere information.</p>

		<h2>Lige Uger</h2>

		<img class="kalenderligeuge" src="images/kalenderligeuge.png" alt="Kalender for lige uger">

		<h2>Ulige Uger</h2>

		<img class="kalenderuligeuge" src="images/kalenderuligeuge.png" alt="Kalender for ulige uger">
	</article>

	<img class="ork" src="images/orc.png" alt="Orc">

	<img class="helt" src="images/helt.png" alt="Helt">

<!-- PAGE FOOTER -->
<!--inkluderer vores footer på den side-->
<?php
	include('includes/footer.php');

?>