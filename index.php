
<?php
	
	$pageTitle = 'Grotten';
	$css = '<link href="css/home.css" type="text/css" rel="stylesheet">'; 

	include('includes/header.php');
	
?>
<!-- PAGE HEADER --> 
<!--definerer variabler der bruges til at vise sidens title og til at loade et stylesheet der skifter baggrundsbilledet i "content-image" sectionen-->
<!--desuden bruges include til at loade vores header-->

<!-- PAGE CONTENT -->
	<section id="baggrund">



	<video id="intro" width="1024" height="600" controls autoplay>
  		<source src="video/grotten.mp4" type="video/mp4">
  		<!--hvis vi havde haft mere tid ville her være et alternativt videoformat f.eks grotten.ogg -->
  		Din browser kan ikke vise videoen.
	</video>





<script type='text/javascript'>
    document.getElementById('intro').addEventListener('ended',myHandler,false);
    function myHandler(e) {
    	window.location.replace("http://www.m-eskegaard.dk/grotten/omos.php")
    }
</script>





	<p class="welcome">
		Velkommen til rollespilsforeningen Grotten
	</p>


	
</section>



<!-- PAGE FOOTER -->
<!--inkluderer vores footer på den side-->
<?php
	include('includes/footer.php');

?>