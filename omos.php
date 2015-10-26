<!-- PAGE HEADER -->
<!--definerer variabler der bruges til at vise sidens title og til at loade et stylesheet der skifter baggrundsbilledet i "content-image" sectionen-->
<!--desuden bruges include til at loade vores header-->
<?php
// title som vises i <title> tag
	
	$pageTitle = 'Om Os';
	
	$css = '<link href="css/events.css" type="text/css" rel="stylesheet">';   
	include('includes/header.php');
?>
<!-- PAGE CONTENT -->

<section id="baggrund">


<h1 class="text">Velkommen Til Grotten</h1>

<img class="mand" src="images/rollespiller.jpg" alt="Mand der griner">

<h2  class="text">Her er alle velkommen!</h2>

<p class="text">
I det nordlige af Århus ud ad Randersvej lige ved de gule bygninger ligger der et gammelt 
bibliotek nede i kælderen til nummer 79. Hernede findes der mange mystiske væsner, krigere 
fra fortiden og soldater fra fremtiden - alle sammen er de klar til at byde dig velkommen i 
deres univers.</p>

<p class="text">
I Grotten er der ikke kun magiske figurer, vi er også en forening, der bygger på gensidig 
respekt og byder alle velkommen med åbne arme. Der er plads til alle, ung, gammel, høj, lav, 
tyk, tynd, nye og erfarne spillere.
</p>

<p class="text">
Ring på vores dør og kom ned og hils på, eller kom den første fredag i hver måned, hvor vi 
afholder hyggeaften for alle interesserede.
</p>

<p class="text">
Vi glæder os meget til at se dig hernede i Grotten!
</p>


</section>

<!-- PAGE FOOTER -->
<!--inkluderer vores footer på den side-->
<?php
	include('includes/footer.php');

?>