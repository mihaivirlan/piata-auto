
<meta charset="UTF-8">
 <div class="container"><br>
    <div class="marca2"><?php echo $automobil['denumire'] ?>
    </div>
		
		<br>
	    	<img height="200"  width="300" src="<?php echo $automobil['imagine'] ?>" class="img_produs img-thumbnail"><br><br>
	<div class="informatii">
		<br>
		Anul producerii: <?php echo $automobil['anul'] ?> 
		<hr>		
		Preţ: <?php echo $automobil['pret'] ?> $;
		<hr>
		Caroserie: <?php echo $automobil['caroserie'] ?> 
		<hr> 
		Tara producerii: <?php echo $automobil['tara'] ;?>
		<hr> 
		Descriere: <?php echo $automobil['anunt'] ?>
		<hr> 
	</div>
	       <?php include('scroll.php')?>   

  </div>






