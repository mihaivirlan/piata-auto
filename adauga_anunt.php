<!DOCTYPE html>
<html>
    <title></title>
      <head> 
    	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:bold">
    	<link href="https://fonts.googleapis.com/css?family=Fira+Sans" rel="stylesheet">
            <link rel="stylesheet" href="style.css">
       </head>
        
<body>
 <div class="container"><br>
    <div class="formular">
           <b>Vă rugăm, completați casetele de mai jos pentru a adăuga anunțul dvs.</b> <br><br><br> 
            <form class="form-horizontal" action="/sait/insert.php" method="post">
                <input type="email" name="email" class="form-control form_logare" placeholder="E-mail" required><br>
                <input type="text" name="producator" class="form-control form_logare" placeholder="Producator" required  pattern="^[a-z]+$"><br>
                <input type="number" name="anul" class="form-control form_logare" placeholder="Anul producerii" required><br>
                <input type="text" name="tara" class="form-control form_logare" placeholder="Tara origine" required  pattern="^[a-z]+$"><br>
                <input type="text" name="caroserie" class="form-control form_logare" placeholder="Caroserie" required  pattern="^[a-z0-9]+$"><br>
                <input type="text" name="pret" class="form-control form_logare" placeholder="Pret" required pattern="^[0-9]+$"><br>
                <input type="text" name="imagine" class="form-control form_logare" placeholder="Imagine" required><br>
                <textarea rows="4" cols="50" name="anunt" class="form-control form_logare"
                placeholder="Anunt" required pattern="^[a-z0-9]+$"></textarea><br>
                <input type="submit" value="Submit" class="btn btn-default buton_submit"><br><br>
            </form>
            
     </div>
 </div>
</body>
</html>