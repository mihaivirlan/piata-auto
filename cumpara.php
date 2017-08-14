
<meta charset="UTF-8">
<link href="https://fonts.googleapis.com/css?family=Fresca" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:bold">
<link rel="stylesheet" href="scroll.php">

<div class="container"><br>
   <div class="raspuns_cumpara">
	Vă rugăm comandați automobilul dorit introducând datele necesare în casetele de mai jos, vă mulțumim!<br><br><br>
   </div>
        <form action="tabel_cumpara.php" method="post">
 	<input type="text" name="numele" class="form-control form_logare" placeholder="Numele dvs."  required  pattern="^[a-z]+$"><br>
 	<input type="text" name="prenumele" class="form-control form_logare" placeholder="Prenumele dvs."  required  pattern="^[a-z]+$"><br>
 	<input type="text" name="adresa" class="form-control form_logare" placeholder="Adresa dvs."  required><br>
	<input type="email" name="mail" class="form-control form_logare" placeholder="E-mail"  required><br>
	<input type="text" name="id_masina" class="form-control form_logare"
				style="display:none" value="<?php echo $id ?>" ><br>
	<textarea rows="4" cols="50" name="anunt" class="form-control form_logare" 
                     placeholder="Informaţii suplimentare (tel.contact /culoare masina /etc...)"  required></textarea><br>
	<button class="test3">Submit</button>
        </form> <br>
        
        <?php include('scroll.php')?>   

</div>