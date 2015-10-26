<!DOCTYPE html>
 <!--dette er vores gennemgående header den bliver sat sammen med page content og footeren ved hjælp af php --> 
<html>
    <head>
	   <meta charset="utf-8">
	   <title><?php echo $pageTitle; ?></title> <!--loader en variabel der defineres på de page content sider og skrives i title  -->
       <meta name="viewport" content="width=device-width, initial-scale=1.0">      
        <link rel="icon" href="images/dice.ico"> <!-- ikon i browserens fane-->
    
        <meta name="robots" content="noindex"> <!-- gør at der ikke kan søges efter hjemmesiden -->
        <meta name="googlebot" content="noindex"> <!-- gør at der ikke kan søges efter hjemmesiden -->

        <meta name="description" content="rollespil, fantasy, eventyr, adventure, ars magica, shadowrun, pathfinder, dungeons and dragons, dark heresy, magic the gathering, 
        legend of the five rings,bard tales, peregrin, social, for alle,">
        <meta name="keywords" content="HTML,CSS">
        <meta name="author" content="Mikael Eskegaard Sørensen, Molly Mølgaard, Maria Oien, Rasmus Hjort Pedersen">

        <link rel="stylesheet" type="text/css" href="css/grotten.css">    <!--link til hoved stylesheet som bestemmer hvordan indholdet af hjemmesiden ser ud-->
        <link href='https://fonts.googleapis.com/css?family=New+Rocker' rel='stylesheet' type='text/css'>   <!--google fonts-->

       
       
    </head>

    <body>


<!--PAGE HEADER -->

        <section class="everything"> <!-- sætter en ramme om alt indholdet så det kan være centreret på skærme med høj opløsning-->
            <header>
                <img src="images/headerpic.png" class="image" id="header-pic" width="1890" alt="header background">
               <!-- <section class="logo"><a href="index.php" title="Home"><img src="images/logo1.png" class="logo" width="400" alt="logo" ></a></section>--> <!--logo-->
                
                    
                <nav class="navigation"> 
                    <ul>
                        <li id="omos"><a href="omos.php" class="nav-link">Om Os</a></li>
                        <li id="kalender"><a href="kalender.php" class="nav-link">Kalender</a></li>
                        <li id="logo"><a href="index.php" title="Home"><img src="images/logo1.png" class="logo" width="400" alt="logo" ></a></li>
                        <li id="links"><a href="#" class="nav-link">Links</a></li>
                        <li id="kontakt"><a href="#" class="nav-link">Kontakt</a></li>
                    </ul>
                </nav>
            </header>
        <!--sectionen "everything afsluttes i footer.php"-->
    <!--body afsluttes i footer.php"-->
 <!--html afsluttes i footer.php"-->

    
